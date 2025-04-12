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

    /**
     * Get JSON configuration file for models
     * @return array Configuration array with models
     */
    public static function getModelsConfig() {
        $jsonFile = dirname(__FILE__) . '/../../plugin_info/openai_models.json';
        if (!file_exists($jsonFile)) {
            return array();
        }

        $config = json_decode(file_get_contents($jsonFile), true);
        if (!isset($config['openapis'])) {
            return array();
        }
        return $config;
    }

    public function preInsert() {
        $this->setCategory('communication', 1);
        // Set default values for new instances
        $this->setConfiguration('implementation', 'gpt-3.5-turbo');
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

    /**
     * Get Jeedom context for the system prompt
     * @return array Context data for Jeedom objects and their equipments
     */
    private function getJeedomContext() {
        $context = array();
        $includedObjects = $this->getConfiguration('included_objects', array());
        
        foreach ($includedObjects as $objectId) {
            $object = jeeObject::byId($objectId);
            if (!is_object($object)) continue;

            $objectData = array(
                'name' => $object->getName(),
                'equipments' => array()
            );

            foreach ($object->getEqLogic() as $eqLogic) {
                $eqData = array(
                    'name' => $eqLogic->getName(),
                    'info' => array()
                );

                foreach ($eqLogic->getCmd('info') as $cmd) {
                    $eqData['info'][] = array(
                        'name' => $cmd->getName(),
                        'value' => $cmd->execCmd(),
                        'unit' => $cmd->getUnite()
                    );
                }

                if (!empty($eqData['info'])) {
                    $objectData['equipments'][] = $eqData;
                }
            }

            if (!empty($objectData['equipments'])) {
                $context[] = $objectData;
            }
        }

        return $context;
    }

    private function buildSystemPrompt($context) {
        $language = translate::getLanguage(); // Get Jeedom-configured language
        $translations = json_decode(file_get_contents(dirname(__FILE__) . "/../../core/i18n/{$language}.json"), true);
    
        $systemPrompt = $translations['system_prompt_header'] . "\n";
        $systemPrompt .= '{"status" : "ok|error", "message" : "message", "actions" : [ { "action" : "action", "status" : "ok|error", "message" : "message", "payload" : { }, "timestamp" : "timestamp" } ]} ' . "\n\n";
    
        foreach ($context as $object) {
            $systemPrompt .= $translations['location'] . ": " . $object['name'] . "\n";
            foreach ($object['equipments'] as $equipment) {
                $systemPrompt .= "  " . $translations['equipment'] . ": " . $equipment['name'] . "\n";
                foreach ($equipment['info'] as $info) {
                    $value = $info['value'];
                    $unit = !empty($info['unit']) ? ' ' . $info['unit'] : '';
                    $systemPrompt .= "    - " . $info['name'] . ": " . $value . $unit . "\n";
                }
            }
            $systemPrompt .= "\n";
        }
    
        $systemPrompt .= $translations['system_prompt_footer'];
    
        return $systemPrompt;
    }

    /**
     * Get available models from API first with $url and $apiKey
     * or from JSON file if API fails or not configured
     * @return array List of available models
     */
    public function getAvailableModels() {
        $apiKey = $this->getConfiguration('api_key');
        $apiUrl = $this->getConfiguration('api_url');

        if (!empty($apiKey) && !empty($apiUrl)) {
            // Try to get models from API first
            $apiModels = $this->getOpenApiModels($apiKey, $apiUrl);
            if (!empty($apiModels)) {
                return $apiModels;
            }
        }

        $implementation = $this->getConfiguration('implementation');
        // Fallback to JSON configuration
        return $this->getModelsFromJson($implementation);
    }

    /**
     * Read JSON file to get models configuration
     * @param string $implementation The implementation to get models for
     * @return array Configuration array with models
     */
    private function getModelsFromJson($implementation) {
        $models = self::getModelsConfig();
        if (!isset($config['openapis'][$implementation])) {
            return array();
        }

        $modelData = $config['openapis'][$implementation];
        if (!isset($modelData['models'])) {
            return array(array(
                'id' => $implementation,
                'name' => $modelData['name']
            ));
        }

        return array_map(function($model) {
            return array(
                'id' => $model,
                'name' => $model
            );
        }, $modelData['models']);
    }

    /**
     * Get models from OpenAI API
     * @param string $apiKey The API key for authentication
     * @param string $apiUrl The API URL to fetch models from
     * @return array List of available models
     */
    private function getOpenApiModels($apiKey, $apiUrl) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "$apiUrl/models");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization: Bearer ' . $apiKey
        ));

        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            log::add('openai', 'error', "Error fetching OpenAI models from $apiUrl: " . curl_error($ch));
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

    public function sendToOpenAI($prompt) {
        $apiKey = $this->getConfiguration('api_key');
        $apiUrl = $this->getConfiguration('api_url');
        $model = $this->getConfiguration('model');
        $systemPrompts = $this->getConfiguration('system_prompts', array());

        if (empty($apiKey)) {
            throw new Exception(__('API Key not configured', __FILE__));
        }

        if (empty($modelId)) {
            throw new Exception(__('Model not configured', __FILE__));
        }

        // Get Jeedom context and build system prompt
        $context = $this->getJeedomContext();
        $systemPromptHeader = $this->buildSystemPrompt($context);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $apiUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Authorization: Bearer ' . $apiKey
        ));

        $messages = array();
        $messages[] = array(
            'role' => 'system',
            'content' => $systemPromptHeader
        );
        
        // Add system prompts
        foreach ($systemPrompts as $systemPromptUser) {
            if (!empty($systemPromptUser)) {
                $messages[] = array(
                    'role' => 'system',
                    'content' => $systemPromptUser
                );
            }
        }

        // Add user prompt
        $messages[] = array(
            'role' => 'user',
            'content' => $prompt
        );

        $data = array(
            'model' => $modelId,
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
        } elseif (isset($responseData['error'])) {
            return $responseData['error']['message'];
        } else {
            log::add('openai', 'error', "Invalid response from OpenAI: " . print_r($responseData, true));
            throw new Exception(__('Invalid response from OpenAPI', __FILE__));
        }
    }

    public static function getCompatibleMessageCommands() {
        $return = array();
        foreach (cmd::byTypeSubType('action', 'message') as $cmd) {
            $eqLogic = $cmd->getEqLogic();
            if ($eqLogic->getEqType_name() != 'openai') {
                $return[] = array(
                    'value' => $cmd->getId(),
                    'text' => $eqLogic->getName() . ' - ' . $cmd->getName()
                );
            }
        }
        return $return;
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

                // Send response to configured output commands
                $outputCommands = $eqLogic->getConfiguration('output_commands', array());
                foreach ($outputCommands as $cmdId) {
                    $cmd = cmd::byId($cmdId);
                    if (is_object($cmd)) {
                        $cmd->execute(array('message' => $response));
                    }
                }
            } catch (Exception $e) {
                log::add('openai', 'error', $e->getMessage());
            }
        }
    }
}