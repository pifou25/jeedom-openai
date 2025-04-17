# # Content

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of the input item. Always &#x60;input_file&#x60;. |
**text** | **string** | The text output from the model. |
**image_url** | **string** | The URL of the image to be sent to the model. A fully qualified URL or base64 encoded image in a data URL. | [optional]
**file_id** | **string** | The ID of the file to be sent to the model. | [optional]
**detail** | **string** | The detail level of the image to be sent to the model. One of &#x60;high&#x60;, &#x60;low&#x60;, or &#x60;auto&#x60;. Defaults to &#x60;auto&#x60;. | [default to 'auto']
**filename** | **string** | The name of the file to be sent to the model. | [optional]
**file_data** | **string** | The content of the file to be sent to the model. | [optional]
**annotations** | [**\JeedomOpenAI\Model\Annotation[]**](Annotation.md) | The annotations of the text output. |
**refusal** | **string** | The refusal explanationfrom the model. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
