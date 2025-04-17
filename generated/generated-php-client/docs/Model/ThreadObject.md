# # ThreadObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The identifier, which can be referenced in API endpoints. |
**object** | **string** | The object type, which is always &#x60;thread&#x60;. |
**created_at** | **int** | The Unix timestamp (in seconds) for when the thread was created. |
**tool_resources** | [**\JeedomOpenAI\Model\ModifyThreadRequestToolResources**](ModifyThreadRequestToolResources.md) |  |
**metadata** | **array<string,string>** | Set of 16 key-value pairs that can be attached to an object. This can be useful for storing additional information about the object in a structured format, and querying for objects via API or the dashboard.   Keys are strings with a maximum length of 64 characters. Values are strings with a maximum length of 512 characters. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
