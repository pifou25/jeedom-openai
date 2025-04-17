# # RealtimeConversationItemWithReference

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | For an item of type (&#x60;message&#x60; | &#x60;function_call&#x60; | &#x60;function_call_output&#x60;) this field allows the client to assign the unique ID of the item. It is not required because the server will generate one if not provided.  For an item of type &#x60;item_reference&#x60;, this field is required and is a reference to any item that has previously existed in the conversation. | [optional]
**type** | **string** | The type of the item (&#x60;message&#x60;, &#x60;function_call&#x60;, &#x60;function_call_output&#x60;, &#x60;item_reference&#x60;). | [optional]
**object** | **string** | Identifier for the API object being returned - always &#x60;realtime.item&#x60;. | [optional]
**status** | **string** | The status of the item (&#x60;completed&#x60;, &#x60;incomplete&#x60;). These have no effect  on the conversation, but are accepted for consistency with the  &#x60;conversation.item.created&#x60; event. | [optional]
**role** | **string** | The role of the message sender (&#x60;user&#x60;, &#x60;assistant&#x60;, &#x60;system&#x60;), only  applicable for &#x60;message&#x60; items. | [optional]
**content** | [**\JeedomOpenAI\Model\RealtimeConversationItemContentInner[]**](RealtimeConversationItemContentInner.md) | The content of the message, applicable for &#x60;message&#x60; items.  - Message items of role &#x60;system&#x60; support only &#x60;input_text&#x60; content - Message items of role &#x60;user&#x60; support &#x60;input_text&#x60; and &#x60;input_audio&#x60;    content - Message items of role &#x60;assistant&#x60; support &#x60;text&#x60; content. | [optional]
**call_id** | **string** | The ID of the function call (for &#x60;function_call&#x60; and  &#x60;function_call_output&#x60; items). If passed on a &#x60;function_call_output&#x60;  item, the server will check that a &#x60;function_call&#x60; item with the same  ID exists in the conversation history. | [optional]
**name** | **string** | The name of the function being called (for &#x60;function_call&#x60; items). | [optional]
**arguments** | **string** | The arguments of the function call (for &#x60;function_call&#x60; items). | [optional]
**output** | **string** | The output of the function call (for &#x60;function_call_output&#x60; items). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
