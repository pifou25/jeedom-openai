# # TranscriptTextDeltaEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of the event. Always &#x60;transcript.text.delta&#x60;. |
**delta** | **string** | The text delta that was additionally transcribed. |
**logprobs** | [**\JeedomOpenAI\Model\LogProbProperties[]**](LogProbProperties.md) | The log probabilities of the delta. Only included if you [create a transcription](/docs/api-reference/audio/create-transcription) with the &#x60;include[]&#x60; parameter set to &#x60;logprobs&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
