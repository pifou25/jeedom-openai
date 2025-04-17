# # RealtimeTranscriptionSessionCreateRequestTurnDetection

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of turn detection. | [optional] [default to 'server_vad']
**eagerness** | **string** | Used only for &#x60;semantic_vad&#x60; mode. The eagerness of the model to respond. &#x60;low&#x60; will wait longer for the user to continue speaking, &#x60;high&#x60; will respond more quickly. &#x60;auto&#x60; is the default and is equivalent to &#x60;medium&#x60;. | [optional] [default to 'auto']
**threshold** | **float** | Used only for &#x60;server_vad&#x60; mode. Activation threshold for VAD (0.0 to 1.0), this defaults to 0.5. A  higher threshold will require louder audio to activate the model, and  thus might perform better in noisy environments. | [optional]
**prefix_padding_ms** | **int** | Used only for &#x60;server_vad&#x60; mode. Amount of audio to include before the VAD detected speech (in  milliseconds). Defaults to 300ms. | [optional]
**silence_duration_ms** | **int** | Used only for &#x60;server_vad&#x60; mode. Duration of silence to detect speech stop (in milliseconds). Defaults  to 500ms. With shorter values the model will respond more quickly,  but may jump in on short pauses from the user. | [optional]
**create_response** | **bool** | Whether or not to automatically generate a response when a VAD stop event occurs. Not available for transcription sessions. | [optional] [default to true]
**interrupt_response** | **bool** | Whether or not to automatically interrupt any ongoing response with output to the default conversation (i.e. &#x60;conversation&#x60; of &#x60;auto&#x60;) when a VAD start event occurs. Not available for transcription sessions. | [optional] [default to true]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
