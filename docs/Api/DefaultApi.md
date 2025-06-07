# JeedomOpenAI\DefaultApi

All URIs are relative to https://api.openai.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**adminApiKeysCreate()**](DefaultApi.md#adminApiKeysCreate) | **POST** /organization/admin_api_keys | Create an organization admin API key
[**adminApiKeysDelete()**](DefaultApi.md#adminApiKeysDelete) | **DELETE** /organization/admin_api_keys/{key_id} | Delete an organization admin API key
[**adminApiKeysGet()**](DefaultApi.md#adminApiKeysGet) | **GET** /organization/admin_api_keys/{key_id} | Retrieve a single organization API key
[**adminApiKeysList()**](DefaultApi.md#adminApiKeysList) | **GET** /organization/admin_api_keys | List organization API keys


## `adminApiKeysCreate()`

```php
adminApiKeysCreate($admin_api_keys_create_request): \JeedomOpenAI\Model\AdminApiKey
```

Create an organization admin API key

Create a new admin-level API key for the organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiKeyAuth
$config = JeedomOpenAI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new JeedomOpenAI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$admin_api_keys_create_request = new \JeedomOpenAI\Model\AdminApiKeysCreateRequest(); // \JeedomOpenAI\Model\AdminApiKeysCreateRequest

try {
    $result = $apiInstance->adminApiKeysCreate($admin_api_keys_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->adminApiKeysCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **admin_api_keys_create_request** | [**\JeedomOpenAI\Model\AdminApiKeysCreateRequest**](../Model/AdminApiKeysCreateRequest.md)|  |

### Return type

[**\JeedomOpenAI\Model\AdminApiKey**](../Model/AdminApiKey.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminApiKeysDelete()`

```php
adminApiKeysDelete($key_id): \JeedomOpenAI\Model\AdminApiKeysDelete200Response
```

Delete an organization admin API key

Delete the specified admin API key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiKeyAuth
$config = JeedomOpenAI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new JeedomOpenAI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$key_id = 'key_id_example'; // string

try {
    $result = $apiInstance->adminApiKeysDelete($key_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->adminApiKeysDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key_id** | **string**|  |

### Return type

[**\JeedomOpenAI\Model\AdminApiKeysDelete200Response**](../Model/AdminApiKeysDelete200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminApiKeysGet()`

```php
adminApiKeysGet($key_id): \JeedomOpenAI\Model\AdminApiKey
```

Retrieve a single organization API key

Get details for a specific organization API key by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiKeyAuth
$config = JeedomOpenAI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new JeedomOpenAI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$key_id = 'key_id_example'; // string

try {
    $result = $apiInstance->adminApiKeysGet($key_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->adminApiKeysGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key_id** | **string**|  |

### Return type

[**\JeedomOpenAI\Model\AdminApiKey**](../Model/AdminApiKey.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminApiKeysList()`

```php
adminApiKeysList($after, $order, $limit): \JeedomOpenAI\Model\ApiKeyList
```

List organization API keys

Retrieve a paginated list of organization admin API keys.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiKeyAuth
$config = JeedomOpenAI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new JeedomOpenAI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$after = 'after_example'; // string
$order = 'asc'; // string
$limit = 20; // int

try {
    $result = $apiInstance->adminApiKeysList($after, $order, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->adminApiKeysList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **after** | **string**|  | [optional]
 **order** | **string**|  | [optional] [default to &#39;asc&#39;]
 **limit** | **int**|  | [optional] [default to 20]

### Return type

[**\JeedomOpenAI\Model\ApiKeyList**](../Model/ApiKeyList.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
