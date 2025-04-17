# # OutputItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the reasoning content. |
**type** | **string** | The type of the output message. Always &#x60;message&#x60;. |
**role** | **string** | The role of the output message. Always &#x60;assistant&#x60;. |
**content** | [**\JeedomOpenAI\Model\OutputContent[]**](OutputContent.md) | The content of the output message. |
**status** | **string** | The status of the item. One of &#x60;in_progress&#x60;, &#x60;completed&#x60;, or &#x60;incomplete&#x60;. Populated when items are returned via API. |
**queries** | **string[]** | The queries used to search for files. |
**results** | [**\JeedomOpenAI\Model\FileSearchToolCallResultsInner[]**](FileSearchToolCallResultsInner.md) | The results of the file search tool call. | [optional]
**call_id** | **string** | An identifier used when responding to the tool call with output. |
**name** | **string** | The name of the function to run. |
**arguments** | **string** | A JSON string of the arguments to pass to the function. |
**action** | [**\JeedomOpenAI\Model\ComputerAction**](ComputerAction.md) |  |
**pending_safety_checks** | [**\JeedomOpenAI\Model\ComputerToolCallSafetyCheck[]**](ComputerToolCallSafetyCheck.md) | The pending safety checks for the computer call. |
**summary** | [**\JeedomOpenAI\Model\ReasoningItemSummaryInner[]**](ReasoningItemSummaryInner.md) | Reasoning text contents. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
