# # FileSearchToolCall

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique ID of the file search tool call. |
**type** | **string** | The type of the file search tool call. Always &#x60;file_search_call&#x60;. |
**status** | **string** | The status of the file search tool call. One of &#x60;in_progress&#x60;,  &#x60;searching&#x60;, &#x60;incomplete&#x60; or &#x60;failed&#x60;, |
**queries** | **string[]** | The queries used to search for files. |
**results** | [**\JeedomOpenAI\Model\FileSearchToolCallResultsInner[]**](FileSearchToolCallResultsInner.md) | The results of the file search tool call. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
