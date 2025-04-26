<?php

namespace jeedom\plugins\openai\core;

use jeedom\plugins\openai\core\client\lib\Configuration;
use jeedom\plugins\openai\core\client\lib\Api\ChatApi;
use jeedom\plugins\openai\core\client\lib\Api\ModelsApi;
use jeedom\plugins\openai\core\client\lib\Model\CreateChatCompletionRequest;

class OpenAICompatibleClient
{
    private ChatApi $chatApi;
    private ModelsApi $modelsApi;

    /**
     * @param string $token Clé API ou access token
     * @param string $baseUrl URL de l’API (ex: https://api.openai.com/v1 ou https://api.mistral.ai/v1)
     * @param string $authType 'access_token' (Bearer) ou 'api_key' (dans un header)
     * @param string|null $header Nom du header à utiliser si api_key (ex: 'Authorization', 'X-API-Key')
     */
    public function __construct(
        string $token,
        string $baseUrl = 'https://api.openai.com/v1',
        string $authType = 'access_token',
        ?string $header = 'Authorization'
    ) {
        $config = Configuration::getDefaultConfiguration()->setHost($baseUrl);

        if ($authType === 'access_token') {
            $config->setAccessToken($token); // Bearer
        } elseif ($authType === 'api_key') {
            $config->setApiKey($header, $token);
        }

        $this->chatApi = new ChatApi(null, $config);
        $this->modelsApi = new ModelsApi(null, $config);
    }

    /**
     * Envoie une requête /v1/chat/completions
     *
     * @param string $model
     * @param array $messages
     * @param array $options
     * @return mixed
     * @throws \Exception
     */
    public function sendChatMessage(string $model, array $messages, array $options = [])
    {
        $payload = array_merge([
            'model' => $model,
            'messages' => $messages,
        ], $options);

        $request = new CreateChatCompletionRequest($payload);

        return $this->chatApi->createChatCompletion($request);
    }

    /**
     * Récupère la liste des modèles disponibles via /v1/models
     *
     * @return array|string[]
     */
    public function listModels(): array
    {
        try {
            $response = $this->modelsApi->listModels();
            $models = [];

            foreach ($response->getData() as $model) {
                $models[] = $model->getId();
            }

            return $models;
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }
}
