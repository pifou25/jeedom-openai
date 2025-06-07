# JeedomOpenAI\VectorStoresApi

All URIs are relative to https://api.openai.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelVectorStoreFileBatch()**](VectorStoresApi.md#cancelVectorStoreFileBatch) | **POST** /vector_stores/{vector_store_id}/file_batches/{batch_id}/cancel | Cancel a vector store file batch. This attempts to cancel the processing of files in this batch as soon as possible.
[**createVectorStore()**](VectorStoresApi.md#createVectorStore) | **POST** /vector_stores | Create a vector store.
[**createVectorStoreFile()**](VectorStoresApi.md#createVectorStoreFile) | **POST** /vector_stores/{vector_store_id}/files | Create a vector store file by attaching a [File](/docs/api-reference/files) to a [vector store](/docs/api-reference/vector-stores/object).
[**createVectorStoreFileBatch()**](VectorStoresApi.md#createVectorStoreFileBatch) | **POST** /vector_stores/{vector_store_id}/file_batches | Create a vector store file batch.
[**deleteVectorStore()**](VectorStoresApi.md#deleteVectorStore) | **DELETE** /vector_stores/{vector_store_id} | Delete a vector store.
[**deleteVectorStoreFile()**](VectorStoresApi.md#deleteVectorStoreFile) | **DELETE** /vector_stores/{vector_store_id}/files/{file_id} | Delete a vector store file. This will remove the file from the vector store but the file itself will not be deleted. To delete the file, use the [delete file](/docs/api-reference/files/delete) endpoint.
[**getVectorStore()**](VectorStoresApi.md#getVectorStore) | **GET** /vector_stores/{vector_store_id} | Retrieves a vector store.
[**getVectorStoreFile()**](VectorStoresApi.md#getVectorStoreFile) | **GET** /vector_stores/{vector_store_id}/files/{file_id} | Retrieves a vector store file.
[**getVectorStoreFileBatch()**](VectorStoresApi.md#getVectorStoreFileBatch) | **GET** /vector_stores/{vector_store_id}/file_batches/{batch_id} | Retrieves a vector store file batch.
[**listFilesInVectorStoreBatch()**](VectorStoresApi.md#listFilesInVectorStoreBatch) | **GET** /vector_stores/{vector_store_id}/file_batches/{batch_id}/files | Returns a list of vector store files in a batch.
[**listVectorStoreFiles()**](VectorStoresApi.md#listVectorStoreFiles) | **GET** /vector_stores/{vector_store_id}/files | Returns a list of vector store files.
[**listVectorStores()**](VectorStoresApi.md#listVectorStores) | **GET** /vector_stores | Returns a list of vector stores.
[**modifyVectorStore()**](VectorStoresApi.md#modifyVectorStore) | **POST** /vector_stores/{vector_store_id} | Modifies a vector store.
[**retrieveVectorStoreFileContent()**](VectorStoresApi.md#retrieveVectorStoreFileContent) | **GET** /vector_stores/{vector_store_id}/files/{file_id}/content | Retrieve the parsed contents of a vector store file.
[**searchVectorStore()**](VectorStoresApi.md#searchVectorStore) | **POST** /vector_stores/{vector_store_id}/search | Search a vector store for relevant chunks based on a query and file attributes filter.
[**updateVectorStoreFileAttributes()**](VectorStoresApi.md#updateVectorStoreFileAttributes) | **POST** /vector_stores/{vector_store_id}/files/{file_id} | Update attributes on a vector store file.


## `cancelVectorStoreFileBatch()`

```php
cancelVectorStoreFileBatch($vector_store_id, $batch_id): \JeedomOpenAI\Model\VectorStoreFileBatchObject
```

Cancel a vector store file batch. This attempts to cancel the processing of files in this batch as soon as possible.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiKeyAuth
$config = JeedomOpenAI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new JeedomOpenAI\Api\VectorStoresApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$vector_store_id = 'vector_store_id_example'; // string | The ID of the vector store that the file batch belongs to.
$batch_id = 'batch_id_example'; // string | The ID of the file batch to cancel.

try {
    $result = $apiInstance->cancelVectorStoreFileBatch($vector_store_id, $batch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VectorStoresApi->cancelVectorStoreFileBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vector_store_id** | **string**| The ID of the vector store that the file batch belongs to. |
 **batch_id** | **string**| The ID of the file batch to cancel. |

### Return type

[**\JeedomOpenAI\Model\VectorStoreFileBatchObject**](../Model/VectorStoreFileBatchObject.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createVectorStore()`

```php
createVectorStore($create_vector_store_request): \JeedomOpenAI\Model\VectorStoreObject
```

Create a vector store.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiKeyAuth
$config = JeedomOpenAI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new JeedomOpenAI\Api\VectorStoresApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$create_vector_store_request = new \JeedomOpenAI\Model\CreateVectorStoreRequest(); // \JeedomOpenAI\Model\CreateVectorStoreRequest

try {
    $result = $apiInstance->createVectorStore($create_vector_store_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VectorStoresApi->createVectorStore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_vector_store_request** | [**\JeedomOpenAI\Model\CreateVectorStoreRequest**](../Model/CreateVectorStoreRequest.md)|  |

### Return type

[**\JeedomOpenAI\Model\VectorStoreObject**](../Model/VectorStoreObject.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createVectorStoreFile()`

```php
createVectorStoreFile($vector_store_id, $create_vector_store_file_request): \JeedomOpenAI\Model\VectorStoreFileObject
```

Create a vector store file by attaching a [File](/docs/api-reference/files) to a [vector store](/docs/api-reference/vector-stores/object).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiKeyAuth
$config = JeedomOpenAI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new JeedomOpenAI\Api\VectorStoresApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$vector_store_id = vs_abc123; // string | The ID of the vector store for which to create a File.
$create_vector_store_file_request = new \JeedomOpenAI\Model\CreateVectorStoreFileRequest(); // \JeedomOpenAI\Model\CreateVectorStoreFileRequest

try {
    $result = $apiInstance->createVectorStoreFile($vector_store_id, $create_vector_store_file_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VectorStoresApi->createVectorStoreFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vector_store_id** | **string**| The ID of the vector store for which to create a File. |
 **create_vector_store_file_request** | [**\JeedomOpenAI\Model\CreateVectorStoreFileRequest**](../Model/CreateVectorStoreFileRequest.md)|  |

### Return type

[**\JeedomOpenAI\Model\VectorStoreFileObject**](../Model/VectorStoreFileObject.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createVectorStoreFileBatch()`

```php
createVectorStoreFileBatch($vector_store_id, $create_vector_store_file_batch_request): \JeedomOpenAI\Model\VectorStoreFileBatchObject
```

Create a vector store file batch.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiKeyAuth
$config = JeedomOpenAI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new JeedomOpenAI\Api\VectorStoresApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$vector_store_id = vs_abc123; // string | The ID of the vector store for which to create a File Batch.
$create_vector_store_file_batch_request = new \JeedomOpenAI\Model\CreateVectorStoreFileBatchRequest(); // \JeedomOpenAI\Model\CreateVectorStoreFileBatchRequest

try {
    $result = $apiInstance->createVectorStoreFileBatch($vector_store_id, $create_vector_store_file_batch_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VectorStoresApi->createVectorStoreFileBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vector_store_id** | **string**| The ID of the vector store for which to create a File Batch. |
 **create_vector_store_file_batch_request** | [**\JeedomOpenAI\Model\CreateVectorStoreFileBatchRequest**](../Model/CreateVectorStoreFileBatchRequest.md)|  |

### Return type

[**\JeedomOpenAI\Model\VectorStoreFileBatchObject**](../Model/VectorStoreFileBatchObject.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteVectorStore()`

```php
deleteVectorStore($vector_store_id): \JeedomOpenAI\Model\DeleteVectorStoreResponse
```

Delete a vector store.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiKeyAuth
$config = JeedomOpenAI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new JeedomOpenAI\Api\VectorStoresApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$vector_store_id = 'vector_store_id_example'; // string | The ID of the vector store to delete.

try {
    $result = $apiInstance->deleteVectorStore($vector_store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VectorStoresApi->deleteVectorStore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vector_store_id** | **string**| The ID of the vector store to delete. |

### Return type

[**\JeedomOpenAI\Model\DeleteVectorStoreResponse**](../Model/DeleteVectorStoreResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteVectorStoreFile()`

```php
deleteVectorStoreFile($vector_store_id, $file_id): \JeedomOpenAI\Model\DeleteVectorStoreFileResponse
```

Delete a vector store file. This will remove the file from the vector store but the file itself will not be deleted. To delete the file, use the [delete file](/docs/api-reference/files/delete) endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiKeyAuth
$config = JeedomOpenAI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new JeedomOpenAI\Api\VectorStoresApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$vector_store_id = 'vector_store_id_example'; // string | The ID of the vector store that the file belongs to.
$file_id = 'file_id_example'; // string | The ID of the file to delete.

try {
    $result = $apiInstance->deleteVectorStoreFile($vector_store_id, $file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VectorStoresApi->deleteVectorStoreFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vector_store_id** | **string**| The ID of the vector store that the file belongs to. |
 **file_id** | **string**| The ID of the file to delete. |

### Return type

[**\JeedomOpenAI\Model\DeleteVectorStoreFileResponse**](../Model/DeleteVectorStoreFileResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVectorStore()`

```php
getVectorStore($vector_store_id): \JeedomOpenAI\Model\VectorStoreObject
```

Retrieves a vector store.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiKeyAuth
$config = JeedomOpenAI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new JeedomOpenAI\Api\VectorStoresApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$vector_store_id = 'vector_store_id_example'; // string | The ID of the vector store to retrieve.

try {
    $result = $apiInstance->getVectorStore($vector_store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VectorStoresApi->getVectorStore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vector_store_id** | **string**| The ID of the vector store to retrieve. |

### Return type

[**\JeedomOpenAI\Model\VectorStoreObject**](../Model/VectorStoreObject.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVectorStoreFile()`

```php
getVectorStoreFile($vector_store_id, $file_id): \JeedomOpenAI\Model\VectorStoreFileObject
```

Retrieves a vector store file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiKeyAuth
$config = JeedomOpenAI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new JeedomOpenAI\Api\VectorStoresApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$vector_store_id = vs_abc123; // string | The ID of the vector store that the file belongs to.
$file_id = file-abc123; // string | The ID of the file being retrieved.

try {
    $result = $apiInstance->getVectorStoreFile($vector_store_id, $file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VectorStoresApi->getVectorStoreFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vector_store_id** | **string**| The ID of the vector store that the file belongs to. |
 **file_id** | **string**| The ID of the file being retrieved. |

### Return type

[**\JeedomOpenAI\Model\VectorStoreFileObject**](../Model/VectorStoreFileObject.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVectorStoreFileBatch()`

```php
getVectorStoreFileBatch($vector_store_id, $batch_id): \JeedomOpenAI\Model\VectorStoreFileBatchObject
```

Retrieves a vector store file batch.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiKeyAuth
$config = JeedomOpenAI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new JeedomOpenAI\Api\VectorStoresApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$vector_store_id = vs_abc123; // string | The ID of the vector store that the file batch belongs to.
$batch_id = vsfb_abc123; // string | The ID of the file batch being retrieved.

try {
    $result = $apiInstance->getVectorStoreFileBatch($vector_store_id, $batch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VectorStoresApi->getVectorStoreFileBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vector_store_id** | **string**| The ID of the vector store that the file batch belongs to. |
 **batch_id** | **string**| The ID of the file batch being retrieved. |

### Return type

[**\JeedomOpenAI\Model\VectorStoreFileBatchObject**](../Model/VectorStoreFileBatchObject.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listFilesInVectorStoreBatch()`

```php
listFilesInVectorStoreBatch($vector_store_id, $batch_id, $limit, $order, $after, $before, $filter): \JeedomOpenAI\Model\ListVectorStoreFilesResponse
```

Returns a list of vector store files in a batch.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiKeyAuth
$config = JeedomOpenAI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new JeedomOpenAI\Api\VectorStoresApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$vector_store_id = 'vector_store_id_example'; // string | The ID of the vector store that the files belong to.
$batch_id = 'batch_id_example'; // string | The ID of the file batch that the files belong to.
$limit = 20; // int | A limit on the number of objects to be returned. Limit can range between 1 and 100, and the default is 20.
$order = 'desc'; // string | Sort order by the `created_at` timestamp of the objects. `asc` for ascending order and `desc` for descending order.
$after = 'after_example'; // string | A cursor for use in pagination. `after` is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with obj_foo, your subsequent call can include after=obj_foo in order to fetch the next page of the list.
$before = 'before_example'; // string | A cursor for use in pagination. `before` is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, starting with obj_foo, your subsequent call can include before=obj_foo in order to fetch the previous page of the list.
$filter = 'filter_example'; // string | Filter by file status. One of `in_progress`, `completed`, `failed`, `cancelled`.

try {
    $result = $apiInstance->listFilesInVectorStoreBatch($vector_store_id, $batch_id, $limit, $order, $after, $before, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VectorStoresApi->listFilesInVectorStoreBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vector_store_id** | **string**| The ID of the vector store that the files belong to. |
 **batch_id** | **string**| The ID of the file batch that the files belong to. |
 **limit** | **int**| A limit on the number of objects to be returned. Limit can range between 1 and 100, and the default is 20. | [optional] [default to 20]
 **order** | **string**| Sort order by the &#x60;created_at&#x60; timestamp of the objects. &#x60;asc&#x60; for ascending order and &#x60;desc&#x60; for descending order. | [optional] [default to &#39;desc&#39;]
 **after** | **string**| A cursor for use in pagination. &#x60;after&#x60; is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with obj_foo, your subsequent call can include after&#x3D;obj_foo in order to fetch the next page of the list. | [optional]
 **before** | **string**| A cursor for use in pagination. &#x60;before&#x60; is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, starting with obj_foo, your subsequent call can include before&#x3D;obj_foo in order to fetch the previous page of the list. | [optional]
 **filter** | **string**| Filter by file status. One of &#x60;in_progress&#x60;, &#x60;completed&#x60;, &#x60;failed&#x60;, &#x60;cancelled&#x60;. | [optional]

### Return type

[**\JeedomOpenAI\Model\ListVectorStoreFilesResponse**](../Model/ListVectorStoreFilesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listVectorStoreFiles()`

```php
listVectorStoreFiles($vector_store_id, $limit, $order, $after, $before, $filter): \JeedomOpenAI\Model\ListVectorStoreFilesResponse
```

Returns a list of vector store files.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiKeyAuth
$config = JeedomOpenAI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new JeedomOpenAI\Api\VectorStoresApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$vector_store_id = 'vector_store_id_example'; // string | The ID of the vector store that the files belong to.
$limit = 20; // int | A limit on the number of objects to be returned. Limit can range between 1 and 100, and the default is 20.
$order = 'desc'; // string | Sort order by the `created_at` timestamp of the objects. `asc` for ascending order and `desc` for descending order.
$after = 'after_example'; // string | A cursor for use in pagination. `after` is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with obj_foo, your subsequent call can include after=obj_foo in order to fetch the next page of the list.
$before = 'before_example'; // string | A cursor for use in pagination. `before` is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, starting with obj_foo, your subsequent call can include before=obj_foo in order to fetch the previous page of the list.
$filter = 'filter_example'; // string | Filter by file status. One of `in_progress`, `completed`, `failed`, `cancelled`.

try {
    $result = $apiInstance->listVectorStoreFiles($vector_store_id, $limit, $order, $after, $before, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VectorStoresApi->listVectorStoreFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vector_store_id** | **string**| The ID of the vector store that the files belong to. |
 **limit** | **int**| A limit on the number of objects to be returned. Limit can range between 1 and 100, and the default is 20. | [optional] [default to 20]
 **order** | **string**| Sort order by the &#x60;created_at&#x60; timestamp of the objects. &#x60;asc&#x60; for ascending order and &#x60;desc&#x60; for descending order. | [optional] [default to &#39;desc&#39;]
 **after** | **string**| A cursor for use in pagination. &#x60;after&#x60; is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with obj_foo, your subsequent call can include after&#x3D;obj_foo in order to fetch the next page of the list. | [optional]
 **before** | **string**| A cursor for use in pagination. &#x60;before&#x60; is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, starting with obj_foo, your subsequent call can include before&#x3D;obj_foo in order to fetch the previous page of the list. | [optional]
 **filter** | **string**| Filter by file status. One of &#x60;in_progress&#x60;, &#x60;completed&#x60;, &#x60;failed&#x60;, &#x60;cancelled&#x60;. | [optional]

### Return type

[**\JeedomOpenAI\Model\ListVectorStoreFilesResponse**](../Model/ListVectorStoreFilesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listVectorStores()`

```php
listVectorStores($limit, $order, $after, $before): \JeedomOpenAI\Model\ListVectorStoresResponse
```

Returns a list of vector stores.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiKeyAuth
$config = JeedomOpenAI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new JeedomOpenAI\Api\VectorStoresApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$limit = 20; // int | A limit on the number of objects to be returned. Limit can range between 1 and 100, and the default is 20.
$order = 'desc'; // string | Sort order by the `created_at` timestamp of the objects. `asc` for ascending order and `desc` for descending order.
$after = 'after_example'; // string | A cursor for use in pagination. `after` is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with obj_foo, your subsequent call can include after=obj_foo in order to fetch the next page of the list.
$before = 'before_example'; // string | A cursor for use in pagination. `before` is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, starting with obj_foo, your subsequent call can include before=obj_foo in order to fetch the previous page of the list.

try {
    $result = $apiInstance->listVectorStores($limit, $order, $after, $before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VectorStoresApi->listVectorStores: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| A limit on the number of objects to be returned. Limit can range between 1 and 100, and the default is 20. | [optional] [default to 20]
 **order** | **string**| Sort order by the &#x60;created_at&#x60; timestamp of the objects. &#x60;asc&#x60; for ascending order and &#x60;desc&#x60; for descending order. | [optional] [default to &#39;desc&#39;]
 **after** | **string**| A cursor for use in pagination. &#x60;after&#x60; is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with obj_foo, your subsequent call can include after&#x3D;obj_foo in order to fetch the next page of the list. | [optional]
 **before** | **string**| A cursor for use in pagination. &#x60;before&#x60; is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, starting with obj_foo, your subsequent call can include before&#x3D;obj_foo in order to fetch the previous page of the list. | [optional]

### Return type

[**\JeedomOpenAI\Model\ListVectorStoresResponse**](../Model/ListVectorStoresResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modifyVectorStore()`

```php
modifyVectorStore($vector_store_id, $update_vector_store_request): \JeedomOpenAI\Model\VectorStoreObject
```

Modifies a vector store.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiKeyAuth
$config = JeedomOpenAI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new JeedomOpenAI\Api\VectorStoresApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$vector_store_id = 'vector_store_id_example'; // string | The ID of the vector store to modify.
$update_vector_store_request = new \JeedomOpenAI\Model\UpdateVectorStoreRequest(); // \JeedomOpenAI\Model\UpdateVectorStoreRequest

try {
    $result = $apiInstance->modifyVectorStore($vector_store_id, $update_vector_store_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VectorStoresApi->modifyVectorStore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vector_store_id** | **string**| The ID of the vector store to modify. |
 **update_vector_store_request** | [**\JeedomOpenAI\Model\UpdateVectorStoreRequest**](../Model/UpdateVectorStoreRequest.md)|  |

### Return type

[**\JeedomOpenAI\Model\VectorStoreObject**](../Model/VectorStoreObject.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveVectorStoreFileContent()`

```php
retrieveVectorStoreFileContent($vector_store_id, $file_id): \JeedomOpenAI\Model\VectorStoreFileContentResponse
```

Retrieve the parsed contents of a vector store file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiKeyAuth
$config = JeedomOpenAI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new JeedomOpenAI\Api\VectorStoresApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$vector_store_id = vs_abc123; // string | The ID of the vector store.
$file_id = file-abc123; // string | The ID of the file within the vector store.

try {
    $result = $apiInstance->retrieveVectorStoreFileContent($vector_store_id, $file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VectorStoresApi->retrieveVectorStoreFileContent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vector_store_id** | **string**| The ID of the vector store. |
 **file_id** | **string**| The ID of the file within the vector store. |

### Return type

[**\JeedomOpenAI\Model\VectorStoreFileContentResponse**](../Model/VectorStoreFileContentResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchVectorStore()`

```php
searchVectorStore($vector_store_id, $vector_store_search_request): \JeedomOpenAI\Model\VectorStoreSearchResultsPage
```

Search a vector store for relevant chunks based on a query and file attributes filter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiKeyAuth
$config = JeedomOpenAI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new JeedomOpenAI\Api\VectorStoresApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$vector_store_id = vs_abc123; // string | The ID of the vector store to search.
$vector_store_search_request = new \JeedomOpenAI\Model\VectorStoreSearchRequest(); // \JeedomOpenAI\Model\VectorStoreSearchRequest

try {
    $result = $apiInstance->searchVectorStore($vector_store_id, $vector_store_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VectorStoresApi->searchVectorStore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vector_store_id** | **string**| The ID of the vector store to search. |
 **vector_store_search_request** | [**\JeedomOpenAI\Model\VectorStoreSearchRequest**](../Model/VectorStoreSearchRequest.md)|  |

### Return type

[**\JeedomOpenAI\Model\VectorStoreSearchResultsPage**](../Model/VectorStoreSearchResultsPage.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateVectorStoreFileAttributes()`

```php
updateVectorStoreFileAttributes($vector_store_id, $file_id, $update_vector_store_file_attributes_request): \JeedomOpenAI\Model\VectorStoreFileObject
```

Update attributes on a vector store file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiKeyAuth
$config = JeedomOpenAI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new JeedomOpenAI\Api\VectorStoresApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$vector_store_id = vs_abc123; // string | The ID of the vector store the file belongs to.
$file_id = file-abc123; // string | The ID of the file to update attributes.
$update_vector_store_file_attributes_request = new \JeedomOpenAI\Model\UpdateVectorStoreFileAttributesRequest(); // \JeedomOpenAI\Model\UpdateVectorStoreFileAttributesRequest

try {
    $result = $apiInstance->updateVectorStoreFileAttributes($vector_store_id, $file_id, $update_vector_store_file_attributes_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VectorStoresApi->updateVectorStoreFileAttributes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vector_store_id** | **string**| The ID of the vector store the file belongs to. |
 **file_id** | **string**| The ID of the file to update attributes. |
 **update_vector_store_file_attributes_request** | [**\JeedomOpenAI\Model\UpdateVectorStoreFileAttributesRequest**](../Model/UpdateVectorStoreFileAttributesRequest.md)|  |

### Return type

[**\JeedomOpenAI\Model\VectorStoreFileObject**](../Model/VectorStoreFileObject.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
