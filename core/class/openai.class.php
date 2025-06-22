<?php

require_once dirname(__FILE__) . '/../../../../core/php/core.inc.php';

use JeedomOpenAI\Api\DefaultApi;
use JeedomOpenAI\Configuration;
use JeedomOpenAI\ApiException;
use JeedomOpenAI\Model\CreateChatCompletionRequest;

use Http\Adapter\Guzzle7\Client as GuzzleAdapter;
use Nyholm\Psr7\Factory\Psr17Factory;

class openai extends eqLogic {

    const OPENAI_RESPONSE_JSON = '{"status" : "ok|error", "message" : "message", "actions" : [ { "action" : "action", "status" : "ok|error", "message" : "message", "payload" : { }, "timestamp" : "timestamp" } ]}';

    private $apiKey;
    private $modelId;
    private $implementation;

    public static $_widgetPossibility = [
        'custom' => true,
        'custom::layout' => false,
        'parameters' => [],
    ];
    
    public static function dependancy_info() {
        return [
            'log' => log::getPathToLog(__CLASS__ . '_dep'),
            'state' => 'ok',
            'progress' => 100,
            'message' => __('Dependency check completed', __FILE__)
        ];
    }

    public static function dependancy_install() {
        log::remove(__CLASS__ . '_dep');
        return array('script' => dirname(__FILE__) . '/../../resources/install_#stype#.sh ' . jeedom::getTmpFolder(__CLASS__) . '/dependency', 'log' => log::getPathToLog(__CLASS__ . '_dep'));
    }

    public function preInsert() {
        $this->setCategory('communication', 1);
        $this->setConfiguration('model', 'gpt-3.5-turbo');
    }

    public function postSave() {
        // Create default commands 'prompt', 'response', and 'sendPrompt'
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
        
        if (empty($this->getConfiguration('prompt'))) {
            $defaultPrompt[] = OpenAiHelper::getTranslations('system_prompt_header');
            $defaultPrompt[] = self::OPENAI_RESPONSE_JSON;
            $this->setConfiguration('prompt', $defaultPrompt);
            $this->save();
        }
    }

    /**
     * Build the open AI configuration
     * This function retrieves the OpenAI API key and model ID from the configuration.
     */
    public function getOpenAIClient() {

        if (empty($this->apiKey)) {
            throw new Exception(__('API Key not configured', __FILE__));
        }

        if (empty($this->modelId)) {
            throw new Exception(__('Model not configured', __FILE__));
        }

        $modelConfig = OpenAiHelper::getModelConfig( $this->implementation);

        $config = Configuration::getDefaultConfiguration()
            ->setApiKey('Authorization', 'Bearer ' . $this->apiKey)
            // set openAI API URL
            ->setHost($modelConfig['url'])
            // set openAI API endpoint
            ->setBasePath($modelConfig['endpoint']);
        $client = new DefaultApi(
            new GuzzleAdapter(), // PSR-18 compatible HTTP client
            $config
        );

        return $client;
    }

    /**
     * Build the system prompt for OpenAI
     * This function constructs the system prompt for OpenAI by including
     * the context of the Jeedom home automation system.
     * It formats the information about the objects and their associated
     * equipment in a structured manner.
     * The prompt is built by iterating through the context and appending
     * the relevant information to the system prompt string.
     * @param array $context The context of the Jeedom home automation system
     * @return array [role => system, content => system prompt]
     */
    public function buildSystemPrompt() {

        // array of user-defined system prompts
        $systemPrompt = OpenAiHelper::buildSystemPrompt( $this->getConfiguration('prompt'));
        // Get Jeedom context and build system prompt
        $context = OpenAiHelper::getJeedomContext( $this->getConfiguration('included_objects', array()));
        return OpenAiHelper::buildSystemPrompt( context, 'system', $systemPrompt);
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

            $client = $eqLogic->getOpenAIClient();

            $systemPrompt = $eqLogic->buildSystemPrompt();
            
            // the complete list of system and user prompts
            $messages = [
                $systemPrompt,
                array(
                    'role' => 'user',
                    'content' => $prompt
                )
            ];

            try {
                $response = $this->sendToOpenAI($messages);
                // process the response
                $result = $this->processResponse($response);

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
    
    /**
     * Send a prompt to OpenAI API and return the response
     * @param string $prompt The systems and user prompt to send
     * @return string The response from OpenAI
     * @throws Exception If there is an error with the API request
     */
    private function sendToOpenAI($prompt, $apiUrl, $apiKey) {

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $apiUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Authorization: Bearer ' . $apiKey
        ));

        $data = array(
            'model' => $modelId,
            'messages' => $messages
        );

        $encoded = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);
        log::add('openai', 'debug', "Sending prompt to $apiUrl: $encoded");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $encoded);
        $response = curl_exec($ch);
        
        if (curl_errno($ch)) {
            throw new Exception(curl_error($ch));
        }
        
        curl_close($ch);
        $responseData = json_decode($response, true);
        log::add('openai', 'debug', 'OpenAI response: ' . json_encode($responseData, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK));

        if (isset($responseData['choices'][0]['message']['content'])) {
            return $responseData['choices'][0]['message']['content'];
        } else if (isset($responseData['error'])) {
            return $responseData['error']['message'];
            // throw new Exception(__('OpenAI API error: ', __FILE__) . $responseData['error']['message']);
        } else {
            throw new Exception(__('Invalid response from OpenAI', __FILE__));
        }
    }

    /**
     * process the response from OpenAI
     * @param string $response The response from OpenAI
     * @return string The processed response
     */
    private function processResponse($response) {
        $json = json_decode( $response, true, 512, JSON_BIGINT_AS_STRING);
        if(is_array($json)) {

            // traiter le message de retour
            $message = $json['message'];
            $status = $json['status'];
            if ($status == 'error') {
                return $message;
            }

            if ($status == 'ok') {
                $message = $json['actions'][0]['message'];

                // traiter les actions de retour
                foreach ($json['actions'] as $action) {
                    $actionCmd = cmd::getById(null, $action['action']);
                    if (is_object($actionCmd)) {
                        $actionCmd->event($action['message']);
                    } else {
                        log::add('openai', 'warn', 'Action command not found: ' . $action['action']);
                    }
                }

                if (isset($message['payload'])) {
                    $payload = $message['payload'];
                    foreach ($payload as $key => $value) {
                        if (is_array($value)) {
                            $json[$key] = json_encode($value, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);
                        } else {
                            $json[$key] = $value;
                        }
                    }
                }
            }

            return $json;
        } else {
            // message OK de l'IA mais pas au format JSON
            return $response;
        }
        return $response;
    }
}