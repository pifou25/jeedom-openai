# # FileSearchTool

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of the file search tool. Always &#x60;file_search&#x60;. |
**vector_store_ids** | **string[]** | The IDs of the vector stores to search. |
**max_num_results** | **int** | The maximum number of results to return. This number should be between 1  and 50 inclusive. | [optional]
**filters** | [**\JeedomOpenAI\Model\FileSearchToolFilters**](FileSearchToolFilters.md) |  | [optional]
**ranking_options** | [**\JeedomOpenAI\Model\FileSearchToolRankingOptions**](FileSearchToolRankingOptions.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
