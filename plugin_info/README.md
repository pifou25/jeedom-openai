# OPEN AI API

## Spécifications de l'API OpenAI au format openAPI
https://github.com/openai/openai-openapi

C'est un `swagger` de openAI, cela permet de générer le code PHP d'un client automatiquement,
 par exemple avec un outil tel que `openapi-generator` :

https://openapi-generator.tech/

## Génération du client PHP à partir du fichier yaml

Avec docker installé, 1 seule commande, depuis le répertoire 
où le fichier openai.yaml est accessible :
```
docker run --rm \
  -v "${PWD}:/local" \
  openapitools/openapi-generator-cli:v7.12.0 generate \
  -i /local/openai.yaml \
  -g php \
  -o /local/client \
  --additional-properties=invokerPackage=jeedom\\plugins\\openai\\core\\client\\lib \
  --library=psr-18 --skip-validate-spec
```

## Installation des dépendances
`composer require guzzlehttp/guzzle nyholm/psr7 php-http/guzzle7-adapter`

## Exemple d'utilisation

```<?php

require 'vendor/autoload.php';
require 'generated-php-client/autoload.php'; // ou adapte si tu as PSR-4 avec composer.json

use jeedom\plugins\openai\core\client\lib\Api\DefaultApi;
use jeedom\plugins\openai\core\client\lib\Configuration;
use jeedom\plugins\openai\core\client\lib\ApiException;
use jeedom\plugins\openai\core\client\lib\Model\CreateChatCompletionRequest;

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