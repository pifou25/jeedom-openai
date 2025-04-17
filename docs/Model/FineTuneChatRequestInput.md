# # FineTuneChatRequestInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**messages** | [**\JeedomOpenAI\Model\FineTuneChatRequestInputMessagesInner[]**](FineTuneChatRequestInputMessagesInner.md) |  | [optional]
**tools** | [**\JeedomOpenAI\Model\ChatCompletionTool[]**](ChatCompletionTool.md) | A list of tools the model may generate JSON inputs for. | [optional]
**parallel_tool_calls** | **bool** | Whether to enable [parallel function calling](/docs/guides/function-calling#configuring-parallel-function-calling) during tool use. | [optional] [default to true]
**functions** | [**\JeedomOpenAI\Model\ChatCompletionFunctions[]**](ChatCompletionFunctions.md) | A list of functions the model may generate JSON inputs for. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
