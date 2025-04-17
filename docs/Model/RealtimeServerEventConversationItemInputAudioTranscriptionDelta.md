# # RealtimeServerEventConversationItemInputAudioTranscriptionDelta

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event_id** | **string** | The unique ID of the server event. |
**type** | **string** | The event type, must be &#x60;conversation.item.input_audio_transcription.delta&#x60;. |
**item_id** | **string** | The ID of the item. |
**content_index** | **int** | The index of the content part in the item&#39;s content array. | [optional]
**delta** | **string** | The text delta. | [optional]
**logprobs** | [**\JeedomOpenAI\Model\LogProbProperties[]**](LogProbProperties.md) | The log probabilities of the transcription. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
