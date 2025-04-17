# # RealtimeSessionInputAudioTranscription

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**model** | **string** | The model to use for transcription, current options are &#x60;gpt-4o-transcribe&#x60;, &#x60;gpt-4o-mini-transcribe&#x60;, and &#x60;whisper-1&#x60;. | [optional]
**language** | **string** | The language of the input audio. Supplying the input language in [ISO-639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) (e.g. &#x60;en&#x60;) format will improve accuracy and latency. | [optional]
**prompt** | **string** | An optional text to guide the model&#39;s style or continue a previous audio segment. For &#x60;whisper-1&#x60;, the [prompt is a list of keywords](/docs/guides/speech-to-text#prompting). For &#x60;gpt-4o-transcribe&#x60; models, the prompt is a free text string, for example \&quot;expect words related to technology\&quot;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
