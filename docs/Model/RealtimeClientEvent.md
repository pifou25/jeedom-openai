# # RealtimeClientEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event_id** | **string** | Optional client-generated ID used to identify this event. | [optional]
**type** | **string** | The event type, must be &#x60;conversation.item.create&#x60;. |
**previous_item_id** | **string** | The ID of the preceding item after which the new item will be inserted.  If not set, the new item will be appended to the end of the conversation. If set to &#x60;root&#x60;, the new item will be added to the beginning of the conversation. If set to an existing ID, it allows an item to be inserted mid-conversation. If the ID cannot be found, an error will be returned and the item will not be added. | [optional]
**item** | [**\JeedomOpenAI\Model\RealtimeConversationItem**](RealtimeConversationItem.md) |  |
**item_id** | **string** | The ID of the assistant message item to truncate. Only assistant message  items can be truncated. |
**content_index** | **int** | The index of the content part to truncate. Set this to 0. |
**audio_end_ms** | **int** | Inclusive duration up to which audio is truncated, in milliseconds. If  the audio_end_ms is greater than the actual audio duration, the server  will respond with an error. |
**audio** | **string** | Base64-encoded audio bytes. This must be in the format specified by the  &#x60;input_audio_format&#x60; field in the session configuration. |
**response_id** | **string** | A specific response ID to cancel - if not provided, will cancel an  in-progress response in the default conversation. | [optional]
**response** | [**\JeedomOpenAI\Model\RealtimeResponseCreateParams**](RealtimeResponseCreateParams.md) |  | [optional]
**session** | [**\JeedomOpenAI\Model\RealtimeTranscriptionSessionCreateRequest**](RealtimeTranscriptionSessionCreateRequest.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
