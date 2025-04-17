# # CreateSpeechRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**model** | [**\JeedomOpenAI\Model\CreateSpeechRequestModel**](CreateSpeechRequestModel.md) |  |
**input** | **string** | The text to generate audio for. The maximum length is 4096 characters. |
**instructions** | **string** | Control the voice of your generated audio with additional instructions. Does not work with &#x60;tts-1&#x60; or &#x60;tts-1-hd&#x60;. | [optional]
**voice** | [**\JeedomOpenAI\Model\VoiceIdsShared**](VoiceIdsShared.md) |  |
**response_format** | **string** | The format to audio in. Supported formats are &#x60;mp3&#x60;, &#x60;opus&#x60;, &#x60;aac&#x60;, &#x60;flac&#x60;, &#x60;wav&#x60;, and &#x60;pcm&#x60;. | [optional] [default to 'mp3']
**speed** | **float** | The speed of the generated audio. Select a value from &#x60;0.25&#x60; to &#x60;4.0&#x60;. &#x60;1.0&#x60; is the default. | [optional] [default to 1]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
