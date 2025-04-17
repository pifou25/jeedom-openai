# # RealtimeSession

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier for the session that looks like &#x60;sess_1234567890abcdef&#x60;. | [optional]
**modalities** | **string[]** | The set of modalities the model can respond with. To disable audio, set this to [\&quot;text\&quot;]. | [optional]
**model** | **string** | The Realtime model used for this session. | [optional]
**instructions** | **string** | The default system instructions (i.e. system message) prepended to model  calls. This field allows the client to guide the model on desired  responses. The model can be instructed on response content and format,  (e.g. \&quot;be extremely succinct\&quot;, \&quot;act friendly\&quot;, \&quot;here are examples of good  responses\&quot;) and on audio behavior (e.g. \&quot;talk quickly\&quot;, \&quot;inject emotion  into your voice\&quot;, \&quot;laugh frequently\&quot;). The instructions are not guaranteed  to be followed by the model, but they provide guidance to the model on the desired behavior.  Note that the server sets default instructions which will be used if this  field is not set and are visible in the &#x60;session.created&#x60; event at the  start of the session. | [optional]
**voice** | [**\JeedomOpenAI\Model\VoiceIdsShared**](VoiceIdsShared.md) |  | [optional]
**input_audio_format** | **string** | The format of input audio. Options are &#x60;pcm16&#x60;, &#x60;g711_ulaw&#x60;, or &#x60;g711_alaw&#x60;. For &#x60;pcm16&#x60;, input audio must be 16-bit PCM at a 24kHz sample rate,  single channel (mono), and little-endian byte order. | [optional] [default to 'pcm16']
**output_audio_format** | **string** | The format of output audio. Options are &#x60;pcm16&#x60;, &#x60;g711_ulaw&#x60;, or &#x60;g711_alaw&#x60;. For &#x60;pcm16&#x60;, output audio is sampled at a rate of 24kHz. | [optional] [default to 'pcm16']
**input_audio_transcription** | [**\JeedomOpenAI\Model\RealtimeSessionInputAudioTranscription**](RealtimeSessionInputAudioTranscription.md) |  | [optional]
**turn_detection** | [**\JeedomOpenAI\Model\RealtimeSessionTurnDetection**](RealtimeSessionTurnDetection.md) |  | [optional]
**input_audio_noise_reduction** | [**\JeedomOpenAI\Model\RealtimeSessionInputAudioNoiseReduction**](RealtimeSessionInputAudioNoiseReduction.md) |  | [optional]
**tools** | [**\JeedomOpenAI\Model\RealtimeResponseCreateParamsToolsInner[]**](RealtimeResponseCreateParamsToolsInner.md) | Tools (functions) available to the model. | [optional]
**tool_choice** | **string** | How the model chooses tools. Options are &#x60;auto&#x60;, &#x60;none&#x60;, &#x60;required&#x60;, or  specify a function. | [optional] [default to 'auto']
**temperature** | **float** | Sampling temperature for the model, limited to [0.6, 1.2]. For audio models a temperature of 0.8 is highly recommended for best performance. | [optional] [default to 0.8]
**max_response_output_tokens** | [**\JeedomOpenAI\Model\RealtimeResponseCreateParamsMaxResponseOutputTokens**](RealtimeResponseCreateParamsMaxResponseOutputTokens.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
