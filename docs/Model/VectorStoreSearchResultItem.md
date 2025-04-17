# # VectorStoreSearchResultItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**file_id** | **string** | The ID of the vector store file. |
**filename** | **string** | The name of the vector store file. |
**score** | **float** | The similarity score for the result. |
**attributes** | [**array<string,\JeedomOpenAI\Model\VectorStoreFileAttributesValue>**](VectorStoreFileAttributesValue.md) | Set of 16 key-value pairs that can be attached to an object. This can be  useful for storing additional information about the object in a structured  format, and querying for objects via API or the dashboard. Keys are strings  with a maximum length of 64 characters. Values are strings with a maximum  length of 512 characters, booleans, or numbers. |
**content** | [**\JeedomOpenAI\Model\VectorStoreSearchResultContentObject[]**](VectorStoreSearchResultContentObject.md) | Content chunks from the file. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
