# # RunStepObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The identifier of the run step, which can be referenced in API endpoints. |
**object** | **string** | The object type, which is always &#x60;thread.run.step&#x60;. |
**created_at** | **int** | The Unix timestamp (in seconds) for when the run step was created. |
**assistant_id** | **string** | The ID of the [assistant](/docs/api-reference/assistants) associated with the run step. |
**thread_id** | **string** | The ID of the [thread](/docs/api-reference/threads) that was run. |
**run_id** | **string** | The ID of the [run](/docs/api-reference/runs) that this run step is a part of. |
**type** | **string** | The type of run step, which can be either &#x60;message_creation&#x60; or &#x60;tool_calls&#x60;. |
**status** | **string** | The status of the run step, which can be either &#x60;in_progress&#x60;, &#x60;cancelled&#x60;, &#x60;failed&#x60;, &#x60;completed&#x60;, or &#x60;expired&#x60;. |
**step_details** | [**\JeedomOpenAI\Model\RunStepObjectStepDetails**](RunStepObjectStepDetails.md) |  |
**last_error** | [**\JeedomOpenAI\Model\RunStepObjectLastError**](RunStepObjectLastError.md) |  |
**expired_at** | **int** | The Unix timestamp (in seconds) for when the run step expired. A step is considered expired if the parent run is expired. |
**cancelled_at** | **int** | The Unix timestamp (in seconds) for when the run step was cancelled. |
**failed_at** | **int** | The Unix timestamp (in seconds) for when the run step failed. |
**completed_at** | **int** | The Unix timestamp (in seconds) for when the run step completed. |
**metadata** | **array<string,string>** | Set of 16 key-value pairs that can be attached to an object. This can be useful for storing additional information about the object in a structured format, and querying for objects via API or the dashboard.   Keys are strings with a maximum length of 64 characters. Values are strings with a maximum length of 512 characters. |
**usage** | [**\JeedomOpenAI\Model\RunStepCompletionUsage**](RunStepCompletionUsage.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
