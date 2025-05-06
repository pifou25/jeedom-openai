<?php

require_once dirname(__FILE__) . '/../../../../core/php/core.inc.php';
require_once __DIR__ . '/../../vendor/autoload.php';

use OpenAI\Client;
use OpenAI\Factory;

class openaiApi {
    private $client;
    private $eqLogic;
    
    /**
     * Constructor
     * @param openai $eqLogic The OpenAI equipment logic object
     */
    public function __construct($eqLogic) {
        $this->eqLogic = $eqLogic;
        $apiKey = $this->eqLogic->getConfiguration('api_key');
        
        if (empty($apiKey)) {
            throw new Exception(__('API Key not configured', __FILE__));
        }
        
        $this->client = Factory::create($apiKey);
    }
    
    /**
     * Send a chat completion request to OpenAI
     * @param array $messages Array of messages with role and content
     * @param string $model The model to use
     * @return array The response from OpenAI
     */
    public function createChatCompletion($messages, $model = null) {
        if ($model === null) {
            $model = $this->eqLogic->getConfiguration('model', 'gpt-3.5-turbo');
        }
        
        try {
            $response = $this->client->chat()->create([
                'model' => $model,
                'messages' => $messages,
                'temperature' => 0.7,
                'max_tokens' => 500,
                'response_format' => ['type' => 'json_object']
            ]);
            
            return [
                'status' => 'ok',
                'content' => $response->choices[0]->message->content,
                'model' => $response->model,
                'usage' => [
                    'prompt_tokens' => $response->usage->promptTokens,
                    'completion_tokens' => $response->usage->completionTokens,
                    'total_tokens' => $response->usage->totalTokens
                ]
            ];
        } catch (\Exception $e) {
            log::add('openai', 'error', 'OpenAI API error: ' . $e->getMessage());
            return [
                'status' => 'error',
                'message' => $e->getMessage()
            ];
        }
    }
    
    /**
     * Process Jeedom context and create a chat completion
     * @param string $userPrompt The user's prompt
     * @param array $context Optional additional context
     * @return array The processed response
     */
    public function processJeedomRequest($userPrompt, $context = []) {
        // Build messages array with system context
        $messages = [];
        
        // Add system prompts
        $systemPrompts = $this->eqLogic->getConfiguration('system_prompts', []);
        foreach ($systemPrompts as $prompt) {
            $messages[] = [
                'role' => 'system',
                'content' => $prompt
            ];
        }
        
        // Add Jeedom context
        $jeedomContext = $this->eqLogic->getJeedomContext();
        if (!empty($jeedomContext)) {
            $messages[] = [
                'role' => 'system',
                'content' => 'Current Jeedom context: ' . json_encode($jeedomContext)
            ];
        }
        
        // Add custom context if provided
        if (!empty($context)) {
            $messages[] = [
                'role' => 'system',
                'content' => json_encode($context)
            ];
        }
        
        // Add user prompt
        $messages[] = [
            'role' => 'user',
            'content' => $userPrompt
        ];
        
        // Send request to OpenAI
        $response = $this->createChatCompletion($messages);
        
        // Process response for Jeedom actions if needed
        if ($response['status'] === 'ok') {
            try {
                $jsonResponse = json_decode($response['content'], true);
                if (json_last_error() === JSON_ERROR_NONE && isset($jsonResponse['actions'])) {
                    foreach ($jsonResponse['actions'] as $action) {
                        $this->processJeedomAction($action);
                    }
                }
            } catch (\Exception $e) {
                log::add('openai', 'error', 'Error processing response: ' . $e->getMessage());
            }
        }
        
        return $response;
    }
    
    /**
     * Process a Jeedom action from the AI response
     * @param array $action The action to process
     */
    private function processJeedomAction($action) {
        if (!isset($action['action']) || !isset($action['payload'])) {
            return;
        }
        
        try {
            switch ($action['action']) {
                case 'setValue':
                    if (isset($action['payload']['cmd_id']) && isset($action['payload']['value'])) {
                        $cmd = cmd::byId($action['payload']['cmd_id']);
                        if (is_object($cmd)) {
                            $cmd->event($action['payload']['value']);
                        }
                    }
                    break;
                    
                case 'executeCmd':
                    if (isset($action['payload']['cmd_id'])) {
                        $cmd = cmd::byId($action['payload']['cmd_id']);
                        if (is_object($cmd)) {
                            $cmd->execute();
                        }
                    }
                    break;
                    
                default:
                    log::add('openai', 'debug', 'Unknown action type: ' . $action['action']);
                    break;
            }
        } catch (\Exception $e) {
            log::add('openai', 'error', 'Error executing action: ' . $e->getMessage());
        }
    }
}