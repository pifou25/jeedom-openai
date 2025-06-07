# JeedomOpenAI\UsersApi

All URIs are relative to https://api.openai.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteUser()**](UsersApi.md#deleteUser) | **DELETE** /organization/users/{user_id} | Deletes a user from the organization.
[**listUsers()**](UsersApi.md#listUsers) | **GET** /organization/users | Lists all of the users in the organization.
[**modifyUser()**](UsersApi.md#modifyUser) | **POST** /organization/users/{user_id} | Modifies a user&#39;s role in the organization.
[**retrieveUser()**](UsersApi.md#retrieveUser) | **GET** /organization/users/{user_id} | Retrieves a user by their identifier.


## `deleteUser()`

```php
deleteUser($user_id): \JeedomOpenAI\Model\UserDeleteResponse
```

Deletes a user from the organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiKeyAuth
$config = JeedomOpenAI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new JeedomOpenAI\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | The ID of the user.

try {
    $result = $apiInstance->deleteUser($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->deleteUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The ID of the user. |

### Return type

[**\JeedomOpenAI\Model\UserDeleteResponse**](../Model/UserDeleteResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listUsers()`

```php
listUsers($limit, $after, $emails): \JeedomOpenAI\Model\UserListResponse
```

Lists all of the users in the organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiKeyAuth
$config = JeedomOpenAI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new JeedomOpenAI\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$limit = 20; // int | A limit on the number of objects to be returned. Limit can range between 1 and 100, and the default is 20.
$after = 'after_example'; // string | A cursor for use in pagination. `after` is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with obj_foo, your subsequent call can include after=obj_foo in order to fetch the next page of the list.
$emails = array('emails_example'); // string[] | Filter by the email address of users.

try {
    $result = $apiInstance->listUsers($limit, $after, $emails);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->listUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| A limit on the number of objects to be returned. Limit can range between 1 and 100, and the default is 20. | [optional] [default to 20]
 **after** | **string**| A cursor for use in pagination. &#x60;after&#x60; is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with obj_foo, your subsequent call can include after&#x3D;obj_foo in order to fetch the next page of the list. | [optional]
 **emails** | [**string[]**](../Model/string.md)| Filter by the email address of users. | [optional]

### Return type

[**\JeedomOpenAI\Model\UserListResponse**](../Model/UserListResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modifyUser()`

```php
modifyUser($user_id, $user_role_update_request): \JeedomOpenAI\Model\User
```

Modifies a user's role in the organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiKeyAuth
$config = JeedomOpenAI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new JeedomOpenAI\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | The ID of the user.
$user_role_update_request = new \JeedomOpenAI\Model\UserRoleUpdateRequest(); // \JeedomOpenAI\Model\UserRoleUpdateRequest | The new user role to modify. This must be one of `owner` or `member`.

try {
    $result = $apiInstance->modifyUser($user_id, $user_role_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->modifyUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The ID of the user. |
 **user_role_update_request** | [**\JeedomOpenAI\Model\UserRoleUpdateRequest**](../Model/UserRoleUpdateRequest.md)| The new user role to modify. This must be one of &#x60;owner&#x60; or &#x60;member&#x60;. |

### Return type

[**\JeedomOpenAI\Model\User**](../Model/User.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveUser()`

```php
retrieveUser($user_id): \JeedomOpenAI\Model\User
```

Retrieves a user by their identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiKeyAuth
$config = JeedomOpenAI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new JeedomOpenAI\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | The ID of the user.

try {
    $result = $apiInstance->retrieveUser($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->retrieveUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The ID of the user. |

### Return type

[**\JeedomOpenAI\Model\User**](../Model/User.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
