# # RealtimeTranscriptionSessionCreateResponseInputAudioTranscription

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**model** | **string** | The model to use for transcription. Can be &#x60;gpt-4o-transcribe&#x60;, &#x60;gpt-4o-mini-transcribe&#x60;, or &#x60;whisper-1&#x60;. | [optional]
**language** | **string** | The language of the input audio. Supplying the input language in [ISO-639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) (e.g. &#x60;en&#x60;) format will improve accuracy and latency. | [optional]
**prompt** | **string** | An optional text to guide the model&#39;s style or continue a previous audio segment. The [prompt](/docs/guides/speech-to-text#prompting) should match the audio language. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
