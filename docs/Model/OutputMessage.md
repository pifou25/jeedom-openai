# # OutputMessage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique ID of the output message. |
**type** | **string** | The type of the output message. Always &#x60;message&#x60;. |
**role** | **string** | The role of the output message. Always &#x60;assistant&#x60;. |
**content** | [**\JeedomOpenAI\Model\OutputContent[]**](OutputContent.md) | The content of the output message. |
**status** | **string** | The status of the message input. One of &#x60;in_progress&#x60;, &#x60;completed&#x60;, or &#x60;incomplete&#x60;. Populated when input items are returned via API. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
