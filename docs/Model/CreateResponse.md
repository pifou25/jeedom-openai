# # CreateResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**metadata** | **array<string,string>** | Set of 16 key-value pairs that can be attached to an object. This can be useful for storing additional information about the object in a structured format, and querying for objects via API or the dashboard.   Keys are strings with a maximum length of 64 characters. Values are strings with a maximum length of 512 characters. | [optional]
**temperature** | **float** | What sampling temperature to use, between 0 and 2. Higher values like 0.8 will make the output more random, while lower values like 0.2 will make it more focused and deterministic. We generally recommend altering this or &#x60;top_p&#x60; but not both. | [optional] [default to 1]
**top_p** | **float** | An alternative to sampling with temperature, called nucleus sampling, where the model considers the results of the tokens with top_p probability mass. So 0.1 means only the tokens comprising the top 10% probability mass are considered.  We generally recommend altering this or &#x60;temperature&#x60; but not both. | [optional] [default to 1]
**user** | **string** | A unique identifier representing your end-user, which can help OpenAI to monitor and detect abuse. [Learn more](/docs/guides/safety-best-practices#end-user-ids). | [optional]
**previous_response_id** | **string** | The unique ID of the previous response to the model. Use this to create multi-turn conversations. Learn more about  [conversation state](/docs/guides/conversation-state). | [optional]
**model** | [**\JeedomOpenAI\Model\ModelIdsResponses**](ModelIdsResponses.md) |  |
**reasoning** | [**\JeedomOpenAI\Model\Reasoning**](Reasoning.md) |  | [optional]
**max_output_tokens** | **int** | An upper bound for the number of tokens that can be generated for a response, including visible output tokens and [reasoning tokens](/docs/guides/reasoning). | [optional]
**instructions** | **string** | Inserts a system (or developer) message as the first item in the model&#39;s context.  When using along with &#x60;previous_response_id&#x60;, the instructions from a previous response will be not be carried over to the next response. This makes it simple to swap out system (or developer) messages in new responses. | [optional]
**text** | [**\JeedomOpenAI\Model\ResponsePropertiesText**](ResponsePropertiesText.md) |  | [optional]
**tools** | [**\JeedomOpenAI\Model\Tool[]**](Tool.md) | An array of tools the model may call while generating a response. You  can specify which tool to use by setting the &#x60;tool_choice&#x60; parameter.  The two categories of tools you can provide the model are:  - **Built-in tools**: Tools that are provided by OpenAI that extend the   model&#39;s capabilities, like [web search](/docs/guides/tools-web-search)   or [file search](/docs/guides/tools-file-search). Learn more about   [built-in tools](/docs/guides/tools). - **Function calls (custom tools)**: Functions that are defined by you,   enabling the model to call your own code. Learn more about   [function calling](/docs/guides/function-calling). | [optional]
**tool_choice** | [**\JeedomOpenAI\Model\ResponsePropertiesToolChoice**](ResponsePropertiesToolChoice.md) |  | [optional]
**truncation** | **string** | The truncation strategy to use for the model response. - &#x60;auto&#x60;: If the context of this response and previous ones exceeds   the model&#39;s context window size, the model will truncate the    response to fit the context window by dropping input items in the   middle of the conversation.  - &#x60;disabled&#x60; (default): If a model response will exceed the context window    size for a model, the request will fail with a 400 error. | [optional] [default to 'disabled']
**input** | [**\JeedomOpenAI\Model\CreateResponseAllOfInput**](CreateResponseAllOfInput.md) |  |
**include** | [**\JeedomOpenAI\Model\Includable[]**](Includable.md) | Specify additional output data to include in the model response. Currently supported values are: - &#x60;file_search_call.results&#x60;: Include the search results of   the file search tool call. - &#x60;message.input_image.image_url&#x60;: Include image urls from the input message. - &#x60;computer_call_output.output.image_url&#x60;: Include image urls from the computer call output. | [optional]
**parallel_tool_calls** | **bool** | Whether to allow the model to run tool calls in parallel. | [optional] [default to true]
**store** | **bool** | Whether to store the generated model response for later retrieval via API. | [optional] [default to true]
**stream** | **bool** | If set to true, the model response data will be streamed to the client as it is generated using [server-sent events](https://developer.mozilla.org/en-US/docs/Web/API/Server-sent_events/Using_server-sent_events#Event_stream_format). See the [Streaming section below](/docs/api-reference/responses-streaming) for more information. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
