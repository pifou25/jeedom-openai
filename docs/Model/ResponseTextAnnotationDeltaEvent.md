# # ResponseTextAnnotationDeltaEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of the event. Always &#x60;response.output_text.annotation.added&#x60;. |
**item_id** | **string** | The ID of the output item that the text annotation was added to. |
**output_index** | **int** | The index of the output item that the text annotation was added to. |
**content_index** | **int** | The index of the content part that the text annotation was added to. |
**annotation_index** | **int** | The index of the annotation that was added. |
**annotation** | [**\JeedomOpenAI\Model\Annotation**](Annotation.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
