# # RealtimeServerEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event_id** | **string** | The unique ID of the server event. |
**type** | **string** | The event type, must be &#x60;conversation.created&#x60;. |
**conversation** | [**\JeedomOpenAI\Model\RealtimeServerEventConversationCreatedConversation**](RealtimeServerEventConversationCreatedConversation.md) |  |
**previous_item_id** | **string** | The ID of the preceding item after which the new item will be inserted. |
**item** | [**\JeedomOpenAI\Model\RealtimeConversationItem**](RealtimeConversationItem.md) |  |
**item_id** | **string** | The ID of the item. |
**content_index** | **int** | The index of the content part in the item&#39;s content array. |
**transcript** | **string** | The final transcript of the audio. |
**logprobs** | [**\JeedomOpenAI\Model\LogProbProperties[]**](LogProbProperties.md) | The log probabilities of the transcription. | [optional]
**delta** | **string** | The text delta. |
**error** | [**\JeedomOpenAI\Model\RealtimeServerEventErrorError**](RealtimeServerEventErrorError.md) |  |
**audio_end_ms** | **int** | Milliseconds since the session started when speech stopped. This will  correspond to the end of audio sent to the model, and thus includes the  &#x60;min_silence_duration_ms&#x60; configured in the Session. |
**audio_start_ms** | **int** | Milliseconds from the start of all audio written to the buffer during the  session when speech was first detected. This will correspond to the  beginning of audio sent to the model, and thus includes the  &#x60;prefix_padding_ms&#x60; configured in the Session. |
**rate_limits** | [**\JeedomOpenAI\Model\RealtimeServerEventRateLimitsUpdatedRateLimitsInner[]**](RealtimeServerEventRateLimitsUpdatedRateLimitsInner.md) | List of rate limit information. |
**response_id** | **string** | The ID of the response. |
**output_index** | **int** | The index of the output item in the response. |
**part** | [**\JeedomOpenAI\Model\RealtimeServerEventResponseContentPartDonePart**](RealtimeServerEventResponseContentPartDonePart.md) |  |
**response** | [**\JeedomOpenAI\Model\RealtimeResponse**](RealtimeResponse.md) |  |
**call_id** | **string** | The ID of the function call. |
**arguments** | **string** | The final arguments as a JSON string. |
**text** | **string** | The final text content. |
**session** | [**\JeedomOpenAI\Model\RealtimeTranscriptionSessionCreateResponse**](RealtimeTranscriptionSessionCreateResponse.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
