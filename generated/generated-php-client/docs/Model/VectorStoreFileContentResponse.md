# # VectorStoreFileContentResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | The object type, which is always &#x60;vector_store.file_content.page&#x60; |
**data** | [**\JeedomOpenAI\Model\VectorStoreFileContentResponseDataInner[]**](VectorStoreFileContentResponseDataInner.md) | Parsed content of the file. |
**has_more** | **bool** | Indicates if there are more content pages to fetch. |
**next_page** | **string** | The token for the next page, if any. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
