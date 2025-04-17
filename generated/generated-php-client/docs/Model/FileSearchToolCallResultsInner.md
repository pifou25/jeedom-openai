# # FileSearchToolCallResultsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**file_id** | **string** | The unique ID of the file. | [optional]
**text** | **string** | The text that was retrieved from the file. | [optional]
**filename** | **string** | The name of the file. | [optional]
**attributes** | [**array<string,\JeedomOpenAI\Model\VectorStoreFileAttributesValue>**](VectorStoreFileAttributesValue.md) | Set of 16 key-value pairs that can be attached to an object. This can be  useful for storing additional information about the object in a structured  format, and querying for objects via API or the dashboard. Keys are strings  with a maximum length of 64 characters. Values are strings with a maximum  length of 512 characters, booleans, or numbers. | [optional]
**score** | **float** | The relevance score of the file - a value between 0 and 1. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
