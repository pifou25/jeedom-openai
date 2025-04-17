# # ResponseProperties

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**previous_response_id** | **string** | The unique ID of the previous response to the model. Use this to create multi-turn conversations. Learn more about  [conversation state](/docs/guides/conversation-state). | [optional]
**model** | [**\JeedomOpenAI\Model\ModelIdsResponses**](ModelIdsResponses.md) |  | [optional]
**reasoning** | [**\JeedomOpenAI\Model\Reasoning**](Reasoning.md) |  | [optional]
**max_output_tokens** | **int** | An upper bound for the number of tokens that can be generated for a response, including visible output tokens and [reasoning tokens](/docs/guides/reasoning). | [optional]
**instructions** | **string** | Inserts a system (or developer) message as the first item in the model&#39;s context.  When using along with &#x60;previous_response_id&#x60;, the instructions from a previous response will be not be carried over to the next response. This makes it simple to swap out system (or developer) messages in new responses. | [optional]
**text** | [**\JeedomOpenAI\Model\ResponsePropertiesText**](ResponsePropertiesText.md) |  | [optional]
**tools** | [**\JeedomOpenAI\Model\Tool[]**](Tool.md) | An array of tools the model may call while generating a response. You  can specify which tool to use by setting the &#x60;tool_choice&#x60; parameter.  The two categories of tools you can provide the model are:  - **Built-in tools**: Tools that are provided by OpenAI that extend the   model&#39;s capabilities, like [web search](/docs/guides/tools-web-search)   or [file search](/docs/guides/tools-file-search). Learn more about   [built-in tools](/docs/guides/tools). - **Function calls (custom tools)**: Functions that are defined by you,   enabling the model to call your own code. Learn more about   [function calling](/docs/guides/function-calling). | [optional]
**tool_choice** | [**\JeedomOpenAI\Model\ResponsePropertiesToolChoice**](ResponsePropertiesToolChoice.md) |  | [optional]
**truncation** | **string** | The truncation strategy to use for the model response. - &#x60;auto&#x60;: If the context of this response and previous ones exceeds   the model&#39;s context window size, the model will truncate the    response to fit the context window by dropping input items in the   middle of the conversation.  - &#x60;disabled&#x60; (default): If a model response will exceed the context window    size for a model, the request will fail with a 400 error. | [optional] [default to 'disabled']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
