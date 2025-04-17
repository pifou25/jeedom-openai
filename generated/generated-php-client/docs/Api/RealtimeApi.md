# JeedomOpenAI\RealtimeApi

All URIs are relative to https://api.openai.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRealtimeSession()**](RealtimeApi.md#createRealtimeSession) | **POST** /realtime/sessions | Create an ephemeral API token for use in client-side applications with the Realtime API. Can be configured with the same session parameters as the &#x60;session.update&#x60; client event.  It responds with a session object, plus a &#x60;client_secret&#x60; key which contains a usable ephemeral API token that can be used to authenticate browser clients for the Realtime API.
[**createRealtimeTranscriptionSession()**](RealtimeApi.md#createRealtimeTranscriptionSession) | **POST** /realtime/transcription_sessions | Create an ephemeral API token for use in client-side applications with the Realtime API specifically for realtime transcriptions.  Can be configured with the same session parameters as the &#x60;transcription_session.update&#x60; client event.  It responds with a session object, plus a &#x60;client_secret&#x60; key which contains a usable ephemeral API token that can be used to authenticate browser clients for the Realtime API.


## `createRealtimeSession()`

```php
createRealtimeSession($realtime_session_create_request): \JeedomOpenAI\Model\RealtimeSessionCreateResponse
```

Create an ephemeral API token for use in client-side applications with the Realtime API. Can be configured with the same session parameters as the `session.update` client event.  It responds with a session object, plus a `client_secret` key which contains a usable ephemeral API token that can be used to authenticate browser clients for the Realtime API.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiKeyAuth
$config = JeedomOpenAI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new JeedomOpenAI\Api\RealtimeApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$realtime_session_create_request = new \JeedomOpenAI\Model\RealtimeSessionCreateRequest(); // \JeedomOpenAI\Model\RealtimeSessionCreateRequest | Create an ephemeral API key with the given session configuration.

try {
    $result = $apiInstance->createRealtimeSession($realtime_session_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealtimeApi->createRealtimeSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **realtime_session_create_request** | [**\JeedomOpenAI\Model\RealtimeSessionCreateRequest**](../Model/RealtimeSessionCreateRequest.md)| Create an ephemeral API key with the given session configuration. |

### Return type

[**\JeedomOpenAI\Model\RealtimeSessionCreateResponse**](../Model/RealtimeSessionCreateResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createRealtimeTranscriptionSession()`

```php
createRealtimeTranscriptionSession($realtime_transcription_session_create_request): \JeedomOpenAI\Model\RealtimeTranscriptionSessionCreateResponse
```

Create an ephemeral API token for use in client-side applications with the Realtime API specifically for realtime transcriptions.  Can be configured with the same session parameters as the `transcription_session.update` client event.  It responds with a session object, plus a `client_secret` key which contains a usable ephemeral API token that can be used to authenticate browser clients for the Realtime API.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiKeyAuth
$config = JeedomOpenAI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new JeedomOpenAI\Api\RealtimeApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$realtime_transcription_session_create_request = new \JeedomOpenAI\Model\RealtimeTranscriptionSessionCreateRequest(); // \JeedomOpenAI\Model\RealtimeTranscriptionSessionCreateRequest | Create an ephemeral API key with the given session configuration.

try {
    $result = $apiInstance->createRealtimeTranscriptionSession($realtime_transcription_session_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealtimeApi->createRealtimeTranscriptionSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **realtime_transcription_session_create_request** | [**\JeedomOpenAI\Model\RealtimeTranscriptionSessionCreateRequest**](../Model/RealtimeTranscriptionSessionCreateRequest.md)| Create an ephemeral API key with the given session configuration. |

### Return type

[**\JeedomOpenAI\Model\RealtimeTranscriptionSessionCreateResponse**](../Model/RealtimeTranscriptionSessionCreateResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
