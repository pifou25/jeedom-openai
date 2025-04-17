# # MessageObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The identifier, which can be referenced in API endpoints. |
**object** | **string** | The object type, which is always &#x60;thread.message&#x60;. |
**created_at** | **int** | The Unix timestamp (in seconds) for when the message was created. |
**thread_id** | **string** | The [thread](/docs/api-reference/threads) ID that this message belongs to. |
**status** | **string** | The status of the message, which can be either &#x60;in_progress&#x60;, &#x60;incomplete&#x60;, or &#x60;completed&#x60;. |
**incomplete_details** | [**\JeedomOpenAI\Model\MessageObjectIncompleteDetails**](MessageObjectIncompleteDetails.md) |  |
**completed_at** | **int** | The Unix timestamp (in seconds) for when the message was completed. |
**incomplete_at** | **int** | The Unix timestamp (in seconds) for when the message was marked as incomplete. |
**role** | **string** | The entity that produced the message. One of &#x60;user&#x60; or &#x60;assistant&#x60;. |
**content** | [**\JeedomOpenAI\Model\MessageObjectContentInner[]**](MessageObjectContentInner.md) | The content of the message in array of text and/or images. |
**assistant_id** | **string** | If applicable, the ID of the [assistant](/docs/api-reference/assistants) that authored this message. |
**run_id** | **string** | The ID of the [run](/docs/api-reference/runs) associated with the creation of this message. Value is &#x60;null&#x60; when messages are created manually using the create message or create thread endpoints. |
**attachments** | [**\JeedomOpenAI\Model\CreateMessageRequestAttachmentsInner[]**](CreateMessageRequestAttachmentsInner.md) | A list of files attached to the message, and the tools they were added to. |
**metadata** | **array<string,string>** | Set of 16 key-value pairs that can be attached to an object. This can be useful for storing additional information about the object in a structured format, and querying for objects via API or the dashboard.   Keys are strings with a maximum length of 64 characters. Values are strings with a maximum length of 512 characters. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
