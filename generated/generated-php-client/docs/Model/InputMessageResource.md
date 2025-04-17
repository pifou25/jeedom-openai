# # InputMessageResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of the message input. Always set to &#x60;message&#x60;. | [optional]
**role** | **string** | The role of the message input. One of &#x60;user&#x60;, &#x60;system&#x60;, or &#x60;developer&#x60;. |
**status** | **string** | The status of item. One of &#x60;in_progress&#x60;, &#x60;completed&#x60;, or &#x60;incomplete&#x60;. Populated when items are returned via API. | [optional]
**content** | [**\JeedomOpenAI\Model\InputContent[]**](InputContent.md) | A list of one or many input items to the model, containing different content  types. |
**id** | **string** | The unique ID of the message input. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
