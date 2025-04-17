# # ComputerToolCallOutput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of the computer tool call output. Always &#x60;computer_call_output&#x60;. | [default to 'computer_call_output']
**id** | **string** | The ID of the computer tool call output. | [optional]
**call_id** | **string** | The ID of the computer tool call that produced the output. |
**acknowledged_safety_checks** | [**\JeedomOpenAI\Model\ComputerToolCallSafetyCheck[]**](ComputerToolCallSafetyCheck.md) | The safety checks reported by the API that have been acknowledged by the  developer. | [optional]
**output** | [**\JeedomOpenAI\Model\ComputerScreenshotImage**](ComputerScreenshotImage.md) |  |
**status** | **string** | The status of the message input. One of &#x60;in_progress&#x60;, &#x60;completed&#x60;, or &#x60;incomplete&#x60;. Populated when input items are returned via API. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
