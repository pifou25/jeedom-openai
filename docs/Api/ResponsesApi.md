# JeedomOpenAI\ResponsesApi

All URIs are relative to https://api.openai.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createResponse()**](ResponsesApi.md#createResponse) | **POST** /responses | Creates a model response. Provide [text](/docs/guides/text) or [image](/docs/guides/images) inputs to generate [text](/docs/guides/text) or [JSON](/docs/guides/structured-outputs) outputs. Have the model call your own [custom code](/docs/guides/function-calling) or use built-in [tools](/docs/guides/tools) like [web search](/docs/guides/tools-web-search) or [file search](/docs/guides/tools-file-search) to use your own data as input for the model&#39;s response.
[**deleteResponse()**](ResponsesApi.md#deleteResponse) | **DELETE** /responses/{response_id} | Deletes a model response with the given ID.
[**getResponse()**](ResponsesApi.md#getResponse) | **GET** /responses/{response_id} | Retrieves a model response with the given ID.
[**listInputItems()**](ResponsesApi.md#listInputItems) | **GET** /responses/{response_id}/input_items | Returns a list of input items for a given response.


## `createResponse()`

```php
createResponse($create_response): \JeedomOpenAI\Model\Response
```

Creates a model response. Provide [text](/docs/guides/text) or [image](/docs/guides/images) inputs to generate [text](/docs/guides/text) or [JSON](/docs/guides/structured-outputs) outputs. Have the model call your own [custom code](/docs/guides/function-calling) or use built-in [tools](/docs/guides/tools) like [web search](/docs/guides/tools-web-search) or [file search](/docs/guides/tools-file-search) to use your own data as input for the model's response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiKeyAuth
$config = JeedomOpenAI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new JeedomOpenAI\Api\ResponsesApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$create_response = new \JeedomOpenAI\Model\CreateResponse(); // \JeedomOpenAI\Model\CreateResponse

try {
    $result = $apiInstance->createResponse($create_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResponsesApi->createResponse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_response** | [**\JeedomOpenAI\Model\CreateResponse**](../Model/CreateResponse.md)|  |

### Return type

[**\JeedomOpenAI\Model\Response**](../Model/Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/event-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteResponse()`

```php
deleteResponse($response_id)
```

Deletes a model response with the given ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiKeyAuth
$config = JeedomOpenAI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new JeedomOpenAI\Api\ResponsesApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$response_id = resp_677efb5139a88190b512bc3fef8e535d; // string | The ID of the response to delete.

try {
    $apiInstance->deleteResponse($response_id);
} catch (Exception $e) {
    echo 'Exception when calling ResponsesApi->deleteResponse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **response_id** | **string**| The ID of the response to delete. |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getResponse()`

```php
getResponse($response_id, $include): \JeedomOpenAI\Model\Response
```

Retrieves a model response with the given ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiKeyAuth
$config = JeedomOpenAI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new JeedomOpenAI\Api\ResponsesApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$response_id = resp_677efb5139a88190b512bc3fef8e535d; // string | The ID of the response to retrieve.
$include = array(new \JeedomOpenAI\Model\\JeedomOpenAI\Model\Includable()); // \JeedomOpenAI\Model\Includable[] | Specify additional output data to include in the response. Currently supported values are: - `file_search_call.results`: Include the search results of   the file search tool call. - `message.input_image.image_url`: Include image urls from the input message. - `computer_call_output.output.image_url`: Include image urls from the computer call output.

try {
    $result = $apiInstance->getResponse($response_id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResponsesApi->getResponse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **response_id** | **string**| The ID of the response to retrieve. |
 **include** | [**\JeedomOpenAI\Model\Includable[]**](../Model/\JeedomOpenAI\Model\Includable.md)| Specify additional output data to include in the response. Currently supported values are: - &#x60;file_search_call.results&#x60;: Include the search results of   the file search tool call. - &#x60;message.input_image.image_url&#x60;: Include image urls from the input message. - &#x60;computer_call_output.output.image_url&#x60;: Include image urls from the computer call output. | [optional]

### Return type

[**\JeedomOpenAI\Model\Response**](../Model/Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listInputItems()`

```php
listInputItems($response_id, $limit, $order, $after, $before): \JeedomOpenAI\Model\ResponseItemList
```

Returns a list of input items for a given response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiKeyAuth
$config = JeedomOpenAI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new JeedomOpenAI\Api\ResponsesApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$response_id = 'response_id_example'; // string | The ID of the response to retrieve input items for.
$limit = 20; // int | A limit on the number of objects to be returned. Limit can range between 1 and 100, and the default is 20.
$order = 'order_example'; // string | The order to return the input items in. Default is `asc`. - `asc`: Return the input items in ascending order. - `desc`: Return the input items in descending order.
$after = 'after_example'; // string | An item ID to list items after, used in pagination.
$before = 'before_example'; // string | An item ID to list items before, used in pagination.

try {
    $result = $apiInstance->listInputItems($response_id, $limit, $order, $after, $before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResponsesApi->listInputItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **response_id** | **string**| The ID of the response to retrieve input items for. |
 **limit** | **int**| A limit on the number of objects to be returned. Limit can range between 1 and 100, and the default is 20. | [optional] [default to 20]
 **order** | **string**| The order to return the input items in. Default is &#x60;asc&#x60;. - &#x60;asc&#x60;: Return the input items in ascending order. - &#x60;desc&#x60;: Return the input items in descending order. | [optional]
 **after** | **string**| An item ID to list items after, used in pagination. | [optional]
 **before** | **string**| An item ID to list items before, used in pagination. | [optional]

### Return type

[**\JeedomOpenAI\Model\ResponseItemList**](../Model/ResponseItemList.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
