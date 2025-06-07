# # RealtimeClientEventConversationItemCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event_id** | **string** | Optional client-generated ID used to identify this event. | [optional]
**type** | **string** | The event type, must be &#x60;conversation.item.create&#x60;. |
**previous_item_id** | **string** | The ID of the preceding item after which the new item will be inserted.  If not set, the new item will be appended to the end of the conversation. If set to &#x60;root&#x60;, the new item will be added to the beginning of the conversation. If set to an existing ID, it allows an item to be inserted mid-conversation. If the ID cannot be found, an error will be returned and the item will not be added. | [optional]
**item** | [**\JeedomOpenAI\Model\RealtimeConversationItem**](RealtimeConversationItem.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
