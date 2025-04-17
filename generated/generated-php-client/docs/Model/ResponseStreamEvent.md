# # ResponseStreamEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of the event. Always &#x60;response.audio.delta&#x60;. |
**delta** | **string** | The text delta that was added. |
**output_index** | **int** | The index of the output item that the web search call is associated with. |
**code** | **string** | The error code. |
**code_interpreter_call** | [**\JeedomOpenAI\Model\CodeInterpreterToolCall**](CodeInterpreterToolCall.md) |  |
**response** | [**\JeedomOpenAI\Model\Response**](Response.md) |  |
**item_id** | **string** | Unique ID for the output item associated with the web search call. |
**content_index** | **int** | The index of the content part that the text content is finalized. |
**part** | [**\JeedomOpenAI\Model\OutputContent**](OutputContent.md) |  |
**message** | **string** | The error message. |
**param** | **string** | The error parameter. |
**arguments** | **string** | The function-call arguments. |
**item** | [**\JeedomOpenAI\Model\OutputItem**](OutputItem.md) |  |
**refusal** | **string** | The refusal text that is finalized. |
**annotation_index** | **int** | The index of the annotation that was added. |
**annotation** | [**\JeedomOpenAI\Model\Annotation**](Annotation.md) |  |
**text** | **string** | The text content that is finalized. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
