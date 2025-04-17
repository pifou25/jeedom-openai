# JeedomOpenAI\EmbeddingsApi

All URIs are relative to https://api.openai.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createEmbedding()**](EmbeddingsApi.md#createEmbedding) | **POST** /embeddings | Creates an embedding vector representing the input text.


## `createEmbedding()`

```php
createEmbedding($create_embedding_request): \JeedomOpenAI\Model\CreateEmbeddingResponse
```

Creates an embedding vector representing the input text.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiKeyAuth
$config = JeedomOpenAI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new JeedomOpenAI\Api\EmbeddingsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$create_embedding_request = new \JeedomOpenAI\Model\CreateEmbeddingRequest(); // \JeedomOpenAI\Model\CreateEmbeddingRequest

try {
    $result = $apiInstance->createEmbedding($create_embedding_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmbeddingsApi->createEmbedding: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_embedding_request** | [**\JeedomOpenAI\Model\CreateEmbeddingRequest**](../Model/CreateEmbeddingRequest.md)|  |

### Return type

[**\JeedomOpenAI\Model\CreateEmbeddingResponse**](../Model/CreateEmbeddingResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
