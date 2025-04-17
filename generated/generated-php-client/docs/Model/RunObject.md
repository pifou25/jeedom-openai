# # RunObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The identifier, which can be referenced in API endpoints. |
**object** | **string** | The object type, which is always &#x60;thread.run&#x60;. |
**created_at** | **int** | The Unix timestamp (in seconds) for when the run was created. |
**thread_id** | **string** | The ID of the [thread](/docs/api-reference/threads) that was executed on as a part of this run. |
**assistant_id** | **string** | The ID of the [assistant](/docs/api-reference/assistants) used for execution of this run. |
**status** | **string** | The status of the run, which can be either &#x60;queued&#x60;, &#x60;in_progress&#x60;, &#x60;requires_action&#x60;, &#x60;cancelling&#x60;, &#x60;cancelled&#x60;, &#x60;failed&#x60;, &#x60;completed&#x60;, &#x60;incomplete&#x60;, or &#x60;expired&#x60;. |
**required_action** | [**\JeedomOpenAI\Model\RunObjectRequiredAction**](RunObjectRequiredAction.md) |  |
**last_error** | [**\JeedomOpenAI\Model\RunObjectLastError**](RunObjectLastError.md) |  |
**expires_at** | **int** | The Unix timestamp (in seconds) for when the run will expire. |
**started_at** | **int** | The Unix timestamp (in seconds) for when the run was started. |
**cancelled_at** | **int** | The Unix timestamp (in seconds) for when the run was cancelled. |
**failed_at** | **int** | The Unix timestamp (in seconds) for when the run failed. |
**completed_at** | **int** | The Unix timestamp (in seconds) for when the run was completed. |
**incomplete_details** | [**\JeedomOpenAI\Model\RunObjectIncompleteDetails**](RunObjectIncompleteDetails.md) |  |
**model** | **string** | The model that the [assistant](/docs/api-reference/assistants) used for this run. |
**instructions** | **string** | The instructions that the [assistant](/docs/api-reference/assistants) used for this run. |
**tools** | [**\JeedomOpenAI\Model\AssistantObjectToolsInner[]**](AssistantObjectToolsInner.md) | The list of tools that the [assistant](/docs/api-reference/assistants) used for this run. |
**metadata** | **array<string,string>** | Set of 16 key-value pairs that can be attached to an object. This can be useful for storing additional information about the object in a structured format, and querying for objects via API or the dashboard.   Keys are strings with a maximum length of 64 characters. Values are strings with a maximum length of 512 characters. |
**usage** | [**\JeedomOpenAI\Model\RunCompletionUsage**](RunCompletionUsage.md) |  |
**temperature** | **float** | The sampling temperature used for this run. If not set, defaults to 1. | [optional]
**top_p** | **float** | The nucleus sampling value used for this run. If not set, defaults to 1. | [optional]
**max_prompt_tokens** | **int** | The maximum number of prompt tokens specified to have been used over the course of the run. |
**max_completion_tokens** | **int** | The maximum number of completion tokens specified to have been used over the course of the run. |
**truncation_strategy** | [**\JeedomOpenAI\Model\CreateRunRequestTruncationStrategy**](CreateRunRequestTruncationStrategy.md) |  |
**tool_choice** | [**\JeedomOpenAI\Model\CreateRunRequestToolChoice**](CreateRunRequestToolChoice.md) |  |
**parallel_tool_calls** | **bool** | Whether to enable [parallel function calling](/docs/guides/function-calling#configuring-parallel-function-calling) during tool use. | [default to true]
**response_format** | [**\JeedomOpenAI\Model\AssistantsApiResponseFormatOption**](AssistantsApiResponseFormatOption.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
