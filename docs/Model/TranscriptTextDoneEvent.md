# # TranscriptTextDoneEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of the event. Always &#x60;transcript.text.done&#x60;. |
**text** | **string** | The text that was transcribed. |
**logprobs** | [**\JeedomOpenAI\Model\LogProbProperties[]**](LogProbProperties.md) | The log probabilities of the individual tokens in the transcription. Only included if you [create a transcription](/docs/api-reference/audio/create-transcription) with the &#x60;include[]&#x60; parameter set to &#x60;logprobs&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
