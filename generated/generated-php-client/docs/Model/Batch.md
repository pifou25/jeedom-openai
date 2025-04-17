# # Batch

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**object** | **string** | The object type, which is always &#x60;batch&#x60;. |
**endpoint** | **string** | The OpenAI API endpoint used by the batch. |
**errors** | [**\JeedomOpenAI\Model\BatchErrors**](BatchErrors.md) |  | [optional]
**input_file_id** | **string** | The ID of the input file for the batch. |
**completion_window** | **string** | The time frame within which the batch should be processed. |
**status** | **string** | The current status of the batch. |
**output_file_id** | **string** | The ID of the file containing the outputs of successfully executed requests. | [optional]
**error_file_id** | **string** | The ID of the file containing the outputs of requests with errors. | [optional]
**created_at** | **int** | The Unix timestamp (in seconds) for when the batch was created. |
**in_progress_at** | **int** | The Unix timestamp (in seconds) for when the batch started processing. | [optional]
**expires_at** | **int** | The Unix timestamp (in seconds) for when the batch will expire. | [optional]
**finalizing_at** | **int** | The Unix timestamp (in seconds) for when the batch started finalizing. | [optional]
**completed_at** | **int** | The Unix timestamp (in seconds) for when the batch was completed. | [optional]
**failed_at** | **int** | The Unix timestamp (in seconds) for when the batch failed. | [optional]
**expired_at** | **int** | The Unix timestamp (in seconds) for when the batch expired. | [optional]
**cancelling_at** | **int** | The Unix timestamp (in seconds) for when the batch started cancelling. | [optional]
**cancelled_at** | **int** | The Unix timestamp (in seconds) for when the batch was cancelled. | [optional]
**request_counts** | [**\JeedomOpenAI\Model\BatchRequestCounts**](BatchRequestCounts.md) |  | [optional]
**metadata** | **array<string,string>** | Set of 16 key-value pairs that can be attached to an object. This can be useful for storing additional information about the object in a structured format, and querying for objects via API or the dashboard.   Keys are strings with a maximum length of 64 characters. Values are strings with a maximum length of 512 characters. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
