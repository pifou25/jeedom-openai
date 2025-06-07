# # VectorStoreObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The identifier, which can be referenced in API endpoints. |
**object** | **string** | The object type, which is always &#x60;vector_store&#x60;. |
**created_at** | **int** | The Unix timestamp (in seconds) for when the vector store was created. |
**name** | **string** | The name of the vector store. |
**usage_bytes** | **int** | The total number of bytes used by the files in the vector store. |
**file_counts** | [**\JeedomOpenAI\Model\VectorStoreObjectFileCounts**](VectorStoreObjectFileCounts.md) |  |
**status** | **string** | The status of the vector store, which can be either &#x60;expired&#x60;, &#x60;in_progress&#x60;, or &#x60;completed&#x60;. A status of &#x60;completed&#x60; indicates that the vector store is ready for use. |
**expires_after** | [**\JeedomOpenAI\Model\VectorStoreExpirationAfter**](VectorStoreExpirationAfter.md) |  | [optional]
**expires_at** | **int** | The Unix timestamp (in seconds) for when the vector store will expire. | [optional]
**last_active_at** | **int** | The Unix timestamp (in seconds) for when the vector store was last active. |
**metadata** | **array<string,string>** | Set of 16 key-value pairs that can be attached to an object. This can be useful for storing additional information about the object in a structured format, and querying for objects via API or the dashboard.   Keys are strings with a maximum length of 64 characters. Values are strings with a maximum length of 512 characters. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
