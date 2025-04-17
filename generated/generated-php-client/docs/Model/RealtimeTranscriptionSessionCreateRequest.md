# # RealtimeTranscriptionSessionCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**modalities** | **string[]** | The set of modalities the model can respond with. To disable audio, set this to [\&quot;text\&quot;]. | [optional]
**input_audio_format** | **string** | The format of input audio. Options are &#x60;pcm16&#x60;, &#x60;g711_ulaw&#x60;, or &#x60;g711_alaw&#x60;. For &#x60;pcm16&#x60;, input audio must be 16-bit PCM at a 24kHz sample rate,  single channel (mono), and little-endian byte order. | [optional] [default to 'pcm16']
**input_audio_transcription** | [**\JeedomOpenAI\Model\RealtimeTranscriptionSessionCreateRequestInputAudioTranscription**](RealtimeTranscriptionSessionCreateRequestInputAudioTranscription.md) |  | [optional]
**turn_detection** | [**\JeedomOpenAI\Model\RealtimeTranscriptionSessionCreateRequestTurnDetection**](RealtimeTranscriptionSessionCreateRequestTurnDetection.md) |  | [optional]
**input_audio_noise_reduction** | [**\JeedomOpenAI\Model\RealtimeSessionInputAudioNoiseReduction**](RealtimeSessionInputAudioNoiseReduction.md) |  | [optional]
**include** | **string[]** | The set of items to include in the transcription. Current available items are: - &#x60;item.input_audio_transcription.logprobs&#x60; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
