# # Upload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The Upload unique identifier, which can be referenced in API endpoints. |
**created_at** | **int** | The Unix timestamp (in seconds) for when the Upload was created. |
**filename** | **string** | The name of the file to be uploaded. |
**bytes** | **int** | The intended number of bytes to be uploaded. |
**purpose** | **string** | The intended purpose of the file. [Please refer here](/docs/api-reference/files/object#files/object-purpose) for acceptable values. |
**status** | **string** | The status of the Upload. |
**expires_at** | **int** | The Unix timestamp (in seconds) for when the Upload will expire. |
**object** | **string** | The object type, which is always \&quot;upload\&quot;. | [optional]
**file** | [**\JeedomOpenAI\Model\UploadFile**](UploadFile.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
