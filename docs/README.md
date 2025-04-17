# OPEN AI API Documentation

This documentation comes from the `swagger` open-API file at 
https://github.com/openai/openai-openapi

This yaml define the Open-AI model and the doc is auto-generated with
some tools, for example `openapi-generator` :
https://openapi-generator.tech/

## Open-AI Client automatic generation from the yaml source

The client consist of both the [model](/Model) and the [Api](/Api)

With docker, one single command:
```
docker run --rm \
  -v "${PWD}:/local" \
  openapitools/openapi-generator-cli generate \
  -i /local/openapi.yaml \
  -g php \
  -o /local/generated-php-client \
  --additional-properties=invokerPackage=JeedomOpenAI,packageName=OpenAIClient \
  --library=psr-18 --skip-validate-spec
```

## Install dependencies with Composer

`composer require guzzlehttp/guzzle nyholm/psr7 php-http/guzzle7-adapter`

## Exemple usage

```<?php

require 'vendor/autoload.php';
require 'generated-php-client/autoload.php'; // ou adapte si tu as PSR-4 avec composer.json

use JeedomOpenAI\Api\DefaultApi;
use JeedomOpenAI\Configuration;
use JeedomOpenAI\ApiException;
use JeedomOpenAI\Model\CreateChatCompletionRequest;

use Http\Adapter\Guzzle7\Client as GuzzleAdapter;
use Nyholm\Psr7\Factory\Psr17Factory;

// 🔑 Clé API OpenAI (met-la dans un .env si tu veux)
$apiKey = 'sk-xxx';

$config = Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'Bearer ' . $apiKey);

$client = new DefaultApi(
    new GuzzleAdapter(), // PSR-18 compatible HTTP client
    $config
);

$request = new CreateChatCompletionRequest([
    'model' => 'gpt-3.5-turbo',
    'messages' => [
        ['role' => 'user', 'content' => 'Salut, raconte-moi une blague.']
    ],
    'temperature' => 0.7
]);

try {
    $result = $client->createChatCompletion($request);
    echo "✅ Réponse :\n";
    echo $result->__toString();
} catch (ApiException $e) {
    echo "❌ Erreur API : ", $e->getMessage(), "\n";
    echo $e->getResponseBody();
}
```