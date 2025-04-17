# # RealtimeTranscriptionSessionCreateResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**client_secret** | [**\JeedomOpenAI\Model\RealtimeTranscriptionSessionCreateResponseClientSecret**](RealtimeTranscriptionSessionCreateResponseClientSecret.md) |  |
**modalities** | **string[]** | The set of modalities the model can respond with. To disable audio, set this to [\&quot;text\&quot;]. | [optional]
**input_audio_format** | **string** | The format of input audio. Options are &#x60;pcm16&#x60;, &#x60;g711_ulaw&#x60;, or &#x60;g711_alaw&#x60;. | [optional]
**input_audio_transcription** | [**\JeedomOpenAI\Model\RealtimeTranscriptionSessionCreateResponseInputAudioTranscription**](RealtimeTranscriptionSessionCreateResponseInputAudioTranscription.md) |  | [optional]
**turn_detection** | [**\JeedomOpenAI\Model\RealtimeSessionCreateResponseTurnDetection**](RealtimeSessionCreateResponseTurnDetection.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
