# # VectorStoreSearchRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**query** | [**\JeedomOpenAI\Model\VectorStoreSearchRequestQuery**](VectorStoreSearchRequestQuery.md) |  |
**rewrite_query** | **bool** | Whether to rewrite the natural language query for vector search. | [optional] [default to false]
**max_num_results** | **int** | The maximum number of results to return. This number should be between 1 and 50 inclusive. | [optional] [default to 10]
**filters** | [**\JeedomOpenAI\Model\FileSearchToolFilters**](FileSearchToolFilters.md) |  | [optional]
**ranking_options** | [**\JeedomOpenAI\Model\VectorStoreSearchRequestRankingOptions**](VectorStoreSearchRequestRankingOptions.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
