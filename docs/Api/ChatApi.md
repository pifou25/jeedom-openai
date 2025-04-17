# JeedomOpenAI\ChatApi

All URIs are relative to https://api.openai.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createChatCompletion()**](ChatApi.md#createChatCompletion) | **POST** /chat/completions | **Starting a new project?** We recommend trying [Responses](/docs/api-reference/responses)  to take advantage of the latest OpenAI platform features. Compare [Chat Completions with Responses](/docs/guides/responses-vs-chat-completions?api-mode&#x3D;responses).  ---  Creates a model response for the given chat conversation. Learn more in the [text generation](/docs/guides/text-generation), [vision](/docs/guides/vision), and [audio](/docs/guides/audio) guides.  Parameter support can differ depending on the model used to generate the response, particularly for newer reasoning models. Parameters that are only supported for reasoning models are noted below. For the current state of  unsupported parameters in reasoning models,  [refer to the reasoning guide](/docs/guides/reasoning).
[**deleteChatCompletion()**](ChatApi.md#deleteChatCompletion) | **DELETE** /chat/completions/{completion_id} | Delete a stored chat completion. Only Chat Completions that have been created with the &#x60;store&#x60; parameter set to &#x60;true&#x60; can be deleted.
[**getChatCompletion()**](ChatApi.md#getChatCompletion) | **GET** /chat/completions/{completion_id} | Get a stored chat completion. Only Chat Completions that have been created with the &#x60;store&#x60; parameter set to &#x60;true&#x60; will be returned.
[**getChatCompletionMessages()**](ChatApi.md#getChatCompletionMessages) | **GET** /chat/completions/{completion_id}/messages | Get the messages in a stored chat completion. Only Chat Completions that have been created with the &#x60;store&#x60; parameter set to &#x60;true&#x60; will be returned.
[**listChatCompletions()**](ChatApi.md#listChatCompletions) | **GET** /chat/completions | List stored Chat Completions. Only Chat Completions that have been stored with the &#x60;store&#x60; parameter set to &#x60;true&#x60; will be returned.
[**updateChatCompletion()**](ChatApi.md#updateChatCompletion) | **POST** /chat/completions/{completion_id} | Modify a stored chat completion. Only Chat Completions that have been created with the &#x60;store&#x60; parameter set to &#x60;true&#x60; can be modified. Currently, the only supported modification is to update the &#x60;metadata&#x60; field.


## `createChatCompletion()`

```php
createChatCompletion($create_chat_completion_request): \JeedomOpenAI\Model\CreateChatCompletionResponse
```

**Starting a new project?** We recommend trying [Responses](/docs/api-reference/responses)  to take advantage of the latest OpenAI platform features. Compare [Chat Completions with Responses](/docs/guides/responses-vs-chat-completions?api-mode=responses).  ---  Creates a model response for the given chat conversation. Learn more in the [text generation](/docs/guides/text-generation), [vision](/docs/guides/vision), and [audio](/docs/guides/audio) guides.  Parameter support can differ depending on the model used to generate the response, particularly for newer reasoning models. Parameters that are only supported for reasoning models are noted below. For the current state of  unsupported parameters in reasoning models,  [refer to the reasoning guide](/docs/guides/reasoning).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiKeyAuth
$config = JeedomOpenAI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new JeedomOpenAI\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$create_chat_completion_request = new \JeedomOpenAI\Model\CreateChatCompletionRequest(); // \JeedomOpenAI\Model\CreateChatCompletionRequest

try {
    $result = $apiInstance->createChatCompletion($create_chat_completion_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->createChatCompletion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_chat_completion_request** | [**\JeedomOpenAI\Model\CreateChatCompletionRequest**](../Model/CreateChatCompletionRequest.md)|  |

### Return type

[**\JeedomOpenAI\Model\CreateChatCompletionResponse**](../Model/CreateChatCompletionResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/event-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteChatCompletion()`

```php
deleteChatCompletion($completion_id): \JeedomOpenAI\Model\ChatCompletionDeleted
```

Delete a stored chat completion. Only Chat Completions that have been created with the `store` parameter set to `true` can be deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiKeyAuth
$config = JeedomOpenAI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new JeedomOpenAI\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$completion_id = 'completion_id_example'; // string | The ID of the chat completion to delete.

try {
    $result = $apiInstance->deleteChatCompletion($completion_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->deleteChatCompletion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **completion_id** | **string**| The ID of the chat completion to delete. |

### Return type

[**\JeedomOpenAI\Model\ChatCompletionDeleted**](../Model/ChatCompletionDeleted.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChatCompletion()`

```php
getChatCompletion($completion_id): \JeedomOpenAI\Model\CreateChatCompletionResponse
```

Get a stored chat completion. Only Chat Completions that have been created with the `store` parameter set to `true` will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiKeyAuth
$config = JeedomOpenAI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new JeedomOpenAI\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$completion_id = 'completion_id_example'; // string | The ID of the chat completion to retrieve.

try {
    $result = $apiInstance->getChatCompletion($completion_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->getChatCompletion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **completion_id** | **string**| The ID of the chat completion to retrieve. |

### Return type

[**\JeedomOpenAI\Model\CreateChatCompletionResponse**](../Model/CreateChatCompletionResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChatCompletionMessages()`

```php
getChatCompletionMessages($completion_id, $after, $limit, $order): \JeedomOpenAI\Model\ChatCompletionMessageList
```

Get the messages in a stored chat completion. Only Chat Completions that have been created with the `store` parameter set to `true` will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiKeyAuth
$config = JeedomOpenAI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new JeedomOpenAI\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$completion_id = 'completion_id_example'; // string | The ID of the chat completion to retrieve messages from.
$after = 'after_example'; // string | Identifier for the last message from the previous pagination request.
$limit = 20; // int | Number of messages to retrieve.
$order = 'asc'; // string | Sort order for messages by timestamp. Use `asc` for ascending order or `desc` for descending order. Defaults to `asc`.

try {
    $result = $apiInstance->getChatCompletionMessages($completion_id, $after, $limit, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->getChatCompletionMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **completion_id** | **string**| The ID of the chat completion to retrieve messages from. |
 **after** | **string**| Identifier for the last message from the previous pagination request. | [optional]
 **limit** | **int**| Number of messages to retrieve. | [optional] [default to 20]
 **order** | **string**| Sort order for messages by timestamp. Use &#x60;asc&#x60; for ascending order or &#x60;desc&#x60; for descending order. Defaults to &#x60;asc&#x60;. | [optional] [default to &#39;asc&#39;]

### Return type

[**\JeedomOpenAI\Model\ChatCompletionMessageList**](../Model/ChatCompletionMessageList.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listChatCompletions()`

```php
listChatCompletions($model, $metadata, $after, $limit, $order): \JeedomOpenAI\Model\ChatCompletionList
```

List stored Chat Completions. Only Chat Completions that have been stored with the `store` parameter set to `true` will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiKeyAuth
$config = JeedomOpenAI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new JeedomOpenAI\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$model = 'model_example'; // string | The model used to generate the Chat Completions.
$metadata = array('key' => 'metadata_example'); // array<string,string> | A list of metadata keys to filter the Chat Completions by. Example:  `metadata[key1]=value1&metadata[key2]=value2`
$after = 'after_example'; // string | Identifier for the last chat completion from the previous pagination request.
$limit = 20; // int | Number of Chat Completions to retrieve.
$order = 'asc'; // string | Sort order for Chat Completions by timestamp. Use `asc` for ascending order or `desc` for descending order. Defaults to `asc`.

try {
    $result = $apiInstance->listChatCompletions($model, $metadata, $after, $limit, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->listChatCompletions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | **string**| The model used to generate the Chat Completions. | [optional]
 **metadata** | [**array<string,string>**](../Model/string.md)| A list of metadata keys to filter the Chat Completions by. Example:  &#x60;metadata[key1]&#x3D;value1&amp;metadata[key2]&#x3D;value2&#x60; | [optional]
 **after** | **string**| Identifier for the last chat completion from the previous pagination request. | [optional]
 **limit** | **int**| Number of Chat Completions to retrieve. | [optional] [default to 20]
 **order** | **string**| Sort order for Chat Completions by timestamp. Use &#x60;asc&#x60; for ascending order or &#x60;desc&#x60; for descending order. Defaults to &#x60;asc&#x60;. | [optional] [default to &#39;asc&#39;]

### Return type

[**\JeedomOpenAI\Model\ChatCompletionList**](../Model/ChatCompletionList.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateChatCompletion()`

```php
updateChatCompletion($completion_id, $update_chat_completion_request): \JeedomOpenAI\Model\CreateChatCompletionResponse
```

Modify a stored chat completion. Only Chat Completions that have been created with the `store` parameter set to `true` can be modified. Currently, the only supported modification is to update the `metadata` field.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiKeyAuth
$config = JeedomOpenAI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new JeedomOpenAI\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$completion_id = 'completion_id_example'; // string | The ID of the chat completion to update.
$update_chat_completion_request = new \JeedomOpenAI\Model\UpdateChatCompletionRequest(); // \JeedomOpenAI\Model\UpdateChatCompletionRequest

try {
    $result = $apiInstance->updateChatCompletion($completion_id, $update_chat_completion_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->updateChatCompletion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **completion_id** | **string**| The ID of the chat completion to update. |
 **update_chat_completion_request** | [**\JeedomOpenAI\Model\UpdateChatCompletionRequest**](../Model/UpdateChatCompletionRequest.md)|  |

### Return type

[**\JeedomOpenAI\Model\CreateChatCompletionResponse**](../Model/CreateChatCompletionResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
