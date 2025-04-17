# JeedomOpenAI\AudioApi

All URIs are relative to https://api.openai.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSpeech()**](AudioApi.md#createSpeech) | **POST** /audio/speech | Generates audio from the input text.
[**createTranscription()**](AudioApi.md#createTranscription) | **POST** /audio/transcriptions | Transcribes audio into the input language.
[**createTranslation()**](AudioApi.md#createTranslation) | **POST** /audio/translations | Translates audio into English.


## `createSpeech()`

```php
createSpeech($create_speech_request): \SplFileObject
```

Generates audio from the input text.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiKeyAuth
$config = JeedomOpenAI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new JeedomOpenAI\Api\AudioApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$create_speech_request = new \JeedomOpenAI\Model\CreateSpeechRequest(); // \JeedomOpenAI\Model\CreateSpeechRequest

try {
    $result = $apiInstance->createSpeech($create_speech_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudioApi->createSpeech: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_speech_request** | [**\JeedomOpenAI\Model\CreateSpeechRequest**](../Model/CreateSpeechRequest.md)|  |

### Return type

**\SplFileObject**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTranscription()`

```php
createTranscription($file, $model, $language, $prompt, $response_format, $temperature, $include, $timestamp_granularities, $stream): \JeedomOpenAI\Model\CreateTranscription200Response
```

Transcribes audio into the input language.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiKeyAuth
$config = JeedomOpenAI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new JeedomOpenAI\Api\AudioApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$file = '/path/to/file.txt'; // \SplFileObject | The audio file object (not file name) to transcribe, in one of these formats: flac, mp3, mp4, mpeg, mpga, m4a, ogg, wav, or webm.
$model = new \JeedomOpenAI\Model\CreateTranscriptionRequestModel(); // \JeedomOpenAI\Model\CreateTranscriptionRequestModel
$language = 'language_example'; // string | The language of the input audio. Supplying the input language in [ISO-639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) (e.g. `en`) format will improve accuracy and latency.
$prompt = 'prompt_example'; // string | An optional text to guide the model's style or continue a previous audio segment. The [prompt](/docs/guides/speech-to-text#prompting) should match the audio language.
$response_format = new \JeedomOpenAI\Model\AudioResponseFormat(); // \JeedomOpenAI\Model\AudioResponseFormat
$temperature = 0; // float | The sampling temperature, between 0 and 1. Higher values like 0.8 will make the output more random, while lower values like 0.2 will make it more focused and deterministic. If set to 0, the model will use [log probability](https://en.wikipedia.org/wiki/Log_probability) to automatically increase the temperature until certain thresholds are hit.
$include = array(new \JeedomOpenAI\Model\\JeedomOpenAI\Model\TranscriptionInclude()); // \JeedomOpenAI\Model\TranscriptionInclude[] | Additional information to include in the transcription response.  `logprobs` will return the log probabilities of the tokens in the  response to understand the model's confidence in the transcription.  `logprobs` only works with response_format set to `json` and only with  the models `gpt-4o-transcribe` and `gpt-4o-mini-transcribe`.
$timestamp_granularities = array('timestamp_granularities_example'); // string[] | The timestamp granularities to populate for this transcription. `response_format` must be set `verbose_json` to use timestamp granularities. Either or both of these options are supported: `word`, or `segment`. Note: There is no additional latency for segment timestamps, but generating word timestamps incurs additional latency.
$stream = false; // bool | If set to true, the model response data will be streamed to the client as it is generated using [server-sent events](https://developer.mozilla.org/en-US/docs/Web/API/Server-sent_events/Using_server-sent_events#Event_stream_format).  See the [Streaming section of the Speech-to-Text guide](/docs/guides/speech-to-text?lang=curl#streaming-transcriptions) for more information.  Note: Streaming is not supported for the `whisper-1` model and will be ignored.

try {
    $result = $apiInstance->createTranscription($file, $model, $language, $prompt, $response_format, $temperature, $include, $timestamp_granularities, $stream);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudioApi->createTranscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject****\SplFileObject**| The audio file object (not file name) to transcribe, in one of these formats: flac, mp3, mp4, mpeg, mpga, m4a, ogg, wav, or webm. |
 **model** | [**\JeedomOpenAI\Model\CreateTranscriptionRequestModel**](../Model/CreateTranscriptionRequestModel.md)|  |
 **language** | **string**| The language of the input audio. Supplying the input language in [ISO-639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) (e.g. &#x60;en&#x60;) format will improve accuracy and latency. | [optional]
 **prompt** | **string**| An optional text to guide the model&#39;s style or continue a previous audio segment. The [prompt](/docs/guides/speech-to-text#prompting) should match the audio language. | [optional]
 **response_format** | [**\JeedomOpenAI\Model\AudioResponseFormat**](../Model/AudioResponseFormat.md)|  | [optional]
 **temperature** | **float**| The sampling temperature, between 0 and 1. Higher values like 0.8 will make the output more random, while lower values like 0.2 will make it more focused and deterministic. If set to 0, the model will use [log probability](https://en.wikipedia.org/wiki/Log_probability) to automatically increase the temperature until certain thresholds are hit. | [optional] [default to 0]
 **include** | [**\JeedomOpenAI\Model\TranscriptionInclude[]**](../Model/\JeedomOpenAI\Model\TranscriptionInclude.md)| Additional information to include in the transcription response.  &#x60;logprobs&#x60; will return the log probabilities of the tokens in the  response to understand the model&#39;s confidence in the transcription.  &#x60;logprobs&#x60; only works with response_format set to &#x60;json&#x60; and only with  the models &#x60;gpt-4o-transcribe&#x60; and &#x60;gpt-4o-mini-transcribe&#x60;. | [optional]
 **timestamp_granularities** | [**string[]**](../Model/string.md)| The timestamp granularities to populate for this transcription. &#x60;response_format&#x60; must be set &#x60;verbose_json&#x60; to use timestamp granularities. Either or both of these options are supported: &#x60;word&#x60;, or &#x60;segment&#x60;. Note: There is no additional latency for segment timestamps, but generating word timestamps incurs additional latency. | [optional]
 **stream** | **bool**| If set to true, the model response data will be streamed to the client as it is generated using [server-sent events](https://developer.mozilla.org/en-US/docs/Web/API/Server-sent_events/Using_server-sent_events#Event_stream_format).  See the [Streaming section of the Speech-to-Text guide](/docs/guides/speech-to-text?lang&#x3D;curl#streaming-transcriptions) for more information.  Note: Streaming is not supported for the &#x60;whisper-1&#x60; model and will be ignored. | [optional] [default to false]

### Return type

[**\JeedomOpenAI\Model\CreateTranscription200Response**](../Model/CreateTranscription200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`, `text/event-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTranslation()`

```php
createTranslation($file, $model, $prompt, $response_format, $temperature): \JeedomOpenAI\Model\CreateTranslation200Response
```

Translates audio into English.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: ApiKeyAuth
$config = JeedomOpenAI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new JeedomOpenAI\Api\AudioApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$file = '/path/to/file.txt'; // \SplFileObject | The audio file object (not file name) translate, in one of these formats: flac, mp3, mp4, mpeg, mpga, m4a, ogg, wav, or webm.
$model = new \JeedomOpenAI\Model\CreateTranslationRequestModel(); // \JeedomOpenAI\Model\CreateTranslationRequestModel
$prompt = 'prompt_example'; // string | An optional text to guide the model's style or continue a previous audio segment. The [prompt](/docs/guides/speech-to-text#prompting) should be in English.
$response_format = 'json'; // string | The format of the output, in one of these options: `json`, `text`, `srt`, `verbose_json`, or `vtt`.
$temperature = 0; // float | The sampling temperature, between 0 and 1. Higher values like 0.8 will make the output more random, while lower values like 0.2 will make it more focused and deterministic. If set to 0, the model will use [log probability](https://en.wikipedia.org/wiki/Log_probability) to automatically increase the temperature until certain thresholds are hit.

try {
    $result = $apiInstance->createTranslation($file, $model, $prompt, $response_format, $temperature);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudioApi->createTranslation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject****\SplFileObject**| The audio file object (not file name) translate, in one of these formats: flac, mp3, mp4, mpeg, mpga, m4a, ogg, wav, or webm. |
 **model** | [**\JeedomOpenAI\Model\CreateTranslationRequestModel**](../Model/CreateTranslationRequestModel.md)|  |
 **prompt** | **string**| An optional text to guide the model&#39;s style or continue a previous audio segment. The [prompt](/docs/guides/speech-to-text#prompting) should be in English. | [optional]
 **response_format** | **string**| The format of the output, in one of these options: &#x60;json&#x60;, &#x60;text&#x60;, &#x60;srt&#x60;, &#x60;verbose_json&#x60;, or &#x60;vtt&#x60;. | [optional] [default to &#39;json&#39;]
 **temperature** | **float**| The sampling temperature, between 0 and 1. Higher values like 0.8 will make the output more random, while lower values like 0.2 will make it more focused and deterministic. If set to 0, the model will use [log probability](https://en.wikipedia.org/wiki/Log_probability) to automatically increase the temperature until certain thresholds are hit. | [optional] [default to 0]

### Return type

[**\JeedomOpenAI\Model\CreateTranslation200Response**](../Model/CreateTranslation200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
