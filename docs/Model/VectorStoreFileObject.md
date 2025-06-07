# # VectorStoreFileObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The identifier, which can be referenced in API endpoints. |
**object** | **string** | The object type, which is always &#x60;vector_store.file&#x60;. |
**usage_bytes** | **int** | The total vector store usage in bytes. Note that this may be different from the original file size. |
**created_at** | **int** | The Unix timestamp (in seconds) for when the vector store file was created. |
**vector_store_id** | **string** | The ID of the [vector store](/docs/api-reference/vector-stores/object) that the [File](/docs/api-reference/files) is attached to. |
**status** | **string** | The status of the vector store file, which can be either &#x60;in_progress&#x60;, &#x60;completed&#x60;, &#x60;cancelled&#x60;, or &#x60;failed&#x60;. The status &#x60;completed&#x60; indicates that the vector store file is ready for use. |
**last_error** | [**\JeedomOpenAI\Model\VectorStoreFileObjectLastError**](VectorStoreFileObjectLastError.md) |  |
**chunking_strategy** | [**\JeedomOpenAI\Model\VectorStoreFileObjectChunkingStrategy**](VectorStoreFileObjectChunkingStrategy.md) |  | [optional]
**attributes** | [**array<string,\JeedomOpenAI\Model\VectorStoreFileAttributesValue>**](VectorStoreFileAttributesValue.md) | Set of 16 key-value pairs that can be attached to an object. This can be  useful for storing additional information about the object in a structured  format, and querying for objects via API or the dashboard. Keys are strings  with a maximum length of 64 characters. Values are strings with a maximum  length of 512 characters, booleans, or numbers. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
