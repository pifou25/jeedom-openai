# JeedomOpenAI\CompletionsApi

All URIs are relative to https://api.openai.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCompletion()**](CompletionsApi.md#createCompletion) | **POST** /completions | Creates a completion for the provided prompt and parameters.


## `createCompletion()`

```php
createCompletion($create_completion_request): \JeedomOpenAI\Model\CreateCompletionResponse
```

Creates a completion for the provided prompt and parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiKeyAuth
$config = JeedomOpenAI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new JeedomOpenAI\Api\CompletionsApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$create_completion_request = new \JeedomOpenAI\Model\CreateCompletionRequest(); // \JeedomOpenAI\Model\CreateCompletionRequest

try {
    $result = $apiInstance->createCompletion($create_completion_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompletionsApi->createCompletion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_completion_request** | [**\JeedomOpenAI\Model\CreateCompletionRequest**](../Model/CreateCompletionRequest.md)|  |

### Return type

[**\JeedomOpenAI\Model\CreateCompletionResponse**](../Model/CreateCompletionResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
