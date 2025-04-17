# # ComputerToolCall

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of the computer call. Always &#x60;computer_call&#x60;. | [default to 'computer_call']
**id** | **string** | The unique ID of the computer call. |
**call_id** | **string** | An identifier used when responding to the tool call with output. |
**action** | [**\JeedomOpenAI\Model\ComputerAction**](ComputerAction.md) |  |
**pending_safety_checks** | [**\JeedomOpenAI\Model\ComputerToolCallSafetyCheck[]**](ComputerToolCallSafetyCheck.md) | The pending safety checks for the computer call. |
**status** | **string** | The status of the item. One of &#x60;in_progress&#x60;, &#x60;completed&#x60;, or &#x60;incomplete&#x60;. Populated when items are returned via API. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
