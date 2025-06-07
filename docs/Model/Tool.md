# # Tool

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of the file search tool. Always &#x60;file_search&#x60;. |
**vector_store_ids** | **string[]** | The IDs of the vector stores to search. |
**max_num_results** | **int** | The maximum number of results to return. This number should be between 1  and 50 inclusive. | [optional]
**filters** | [**\JeedomOpenAI\Model\FileSearchToolFilters**](FileSearchToolFilters.md) |  | [optional]
**ranking_options** | [**\JeedomOpenAI\Model\FileSearchToolRankingOptions**](FileSearchToolRankingOptions.md) |  | [optional]
**name** | **string** | The name of the function to call. |
**description** | **string** | A description of the function. Used by the model to determine whether or not to call the function. | [optional]
**parameters** | **array<string,mixed>** | A JSON schema object describing the parameters of the function. |
**strict** | **bool** | Whether to enforce strict parameter validation. Default &#x60;true&#x60;. |
**display_width** | **float** | The width of the computer display. |
**display_height** | **float** | The height of the computer display. |
**environment** | **string** | The type of computer environment to control. |
**user_location** | [**\JeedomOpenAI\Model\WebSearchToolUserLocation**](WebSearchToolUserLocation.md) |  | [optional]
**search_context_size** | [**\JeedomOpenAI\Model\WebSearchContextSize**](WebSearchContextSize.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
