<?php

require_once dirname(__FILE__) . '/../../../../core/php/core.inc.php';

class openai extends eqLogic {
    public static $_widgetPossibility = array(
        'custom' => true,
        'custom::layout' => false,
        'parameters' => array(),
    );

    public static function dependancy_info() {
        $return = array();
        $return['log'] = 'openai_dep';
        $return['state'] = 'ok';
        return $return;
    }

    public static function dependancy_install() {
        log::remove(__CLASS__ . '_dep');
        return array('script' => dirname(__FILE__) . '/../../resources/install_#stype#.sh ' . jeedom::getTmpFolder(__CLASS__) . '/dependency', 'log' => log::getPathToLog(__CLASS__ . '_dep'));
    }

    public function preInsert() {
        $this->setCategory('communication', 1);
        // Set default values for new instances
        $this->setConfiguration('api_url', 'https://api.openai.com/v1/chat/completions');
        $this->setConfiguration('model', 'gpt-3.5-turbo');
        $this->setConfiguration('system_prompts', array(
            'You are a helpful AI assistant. Please provide clear and concise responses.'
        ));
    }

    public function postSave() {
        $prompt = $this->getCmd(null, 'prompt');
        if (!is_object($prompt)) {
            $prompt = new openaiCmd();
            $prompt->setName(__('Prompt', __FILE__));
            $prompt->setEqLogic_id($this->getId());
            $prompt->setLogicalId('prompt');
            $prompt->setType('info');
            $prompt->setSubType('string');
            $prompt->save();
        }

        $response = $this->getCmd(null, 'response');
        if (!is_object($response)) {
            $response = new openaiCmd();
            $response->setName(__('Response', __FILE__));
            $response->setEqLogic_id($this->getId());
            $response->setLogicalId('response');
            $response->setType('info');
            $response->setSubType('string');
            $response->save();
        }

        $sendPrompt = $this->getCmd(null, 'sendPrompt');
        if (!is_object($sendPrompt)) {
            $sendPrompt = new openaiCmd();
            $sendPrompt->setName(__('Send Prompt', __FILE__));
            $sendPrompt->setEqLogic_id($this->getId());
            $sendPrompt->setLogicalId('sendPrompt');
            $sendPrompt->setType('action');
            $sendPrompt->setSubType('message');
            $sendPrompt->save();
        }
    }

    public function getAvailableModels() {
        $apiKey = $this->getConfiguration('api_key');
        $apiUrl = $this->getConfiguration('api_url');

        if (empty($apiKey) || empty($apiUrl)) {
            return array();
        }

        // Handle different API providers
        if (strpos($apiUrl, 'api.openai.com') !== false) {
            return $this->getOpenAIModels($apiKey);
        } else if (strpos($apiUrl, 'api.anthropic.com') !== false) {
            return $this->getAnthropicModels($apiKey);
        } else if (strpos($apiUrl, 'api.mistral.ai') !== false) {
            return $this->getMistralModels($apiKey);
        }

        return array();
    }

    private function getOpenAIModels($apiKey) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/models');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization: Bearer ' . $apiKey
        ));

        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            log::add('openai', 'error', 'Error fetching OpenAI models: ' . curl_error($ch));
            return array();
        }
        curl_close($ch);

        $data = json_decode($response, true);
        $models = array();

        if (isset($data['data'])) {
            foreach ($data['data'] as $model) {
                if (strpos($model['id'], 'gpt') !== false) {
                    $models[] = array(
                        'id' => $model['id'],
                        'name' => $model['id']
                    );
                }
            }
        }

        return $models;
    }

    private function getAnthropicModels($apiKey) {
        return array(
            array('id' => 'claude-2', 'name' => 'Claude 2'),
            array('id' => 'claude-instant-1', 'name' => 'Claude Instant')
        );
    }

    private function getMistralModels($apiKey) {
        return array(
            array('id' => 'mistral-tiny', 'name' => 'Mistral Tiny'),
            array('id' => 'mistral-small', 'name' => 'Mistral Small'),
            array('id' => 'mistral-medium', 'name' => 'Mistral Medium')
        );
    }

    public function sendToOpenAI($prompt) {
        $apiKey = $this->getConfiguration('api_key');
        $apiUrl = $this->getConfiguration('api_url');
        $model = $this->getConfiguration('model');
        $systemPrompts = $this->getConfiguration('system_prompts', array());

        if (empty($apiKey)) {
            throw new Exception(__('API Key not configured', __FILE__));
        }

        if (empty($apiUrl)) {
            throw new Exception(__('API URL not configured', __FILE__));
        }

        if (empty($model)) {
            throw new Exception(__('Model not configured', __FILE__));
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $apiUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Authorization: Bearer ' . $apiKey
        ));

        $messages = array();
        
        // Add system prompts
        foreach ($systemPrompts as $systemPrompt) {
            if (!empty($systemPrompt)) {
                $messages[] = array(
                    'role' => 'system',
                    'content' => $systemPrompt
                );
            }
        }

        // Add user prompt
        $messages[] = array(
            'role' => 'user',
            'content' => $prompt
        );

        $data = array(
            'model' => $model,
            'messages' => $messages
        );

        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        $response = curl_exec($ch);
        
        if (curl_errno($ch)) {
            throw new Exception(curl_error($ch));
        }
        
        curl_close($ch);
        $responseData = json_decode($response, true);
        
        if (isset($responseData['choices'][0]['message']['content'])) {
            return $responseData['choices'][0]['message']['content'];
        } else {
            throw new Exception(__('Invalid response from OpenAI', __FILE__));
        }
    }
}

class openaiCmd extends cmd {
    public function execute($_options = array()) {
        if ($this->getType() != 'action') {
            return;
        }

        $eqLogic = $this->getEqLogic();
        
        if ($this->getLogicalId() == 'sendPrompt') {
            $prompt = $_options['message'];
            $promptCmd = $eqLogic->getCmd(null, 'prompt');
            if (is_object($promptCmd)) {
                $promptCmd->event($prompt);
            }

            try {
                $response = $eqLogic->sendToOpenAI($prompt);
                $responseCmd = $eqLogic->getCmd(null, 'response');
                if (is_object($responseCmd)) {
                    $responseCmd->event($response);
                }
            } catch (Exception $e) {
                log::add('openai', 'error', $e->getMessage());
            }
        }
    }
}