# # ComputerAction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Specifies the event type. For a click action, this property is  always set to &#x60;click&#x60;. | [default to 'click']
**button** | **string** | Indicates which mouse button was pressed during the click. One of &#x60;left&#x60;, &#x60;right&#x60;, &#x60;wheel&#x60;, &#x60;back&#x60;, or &#x60;forward&#x60;. |
**x** | **int** | The x-coordinate where the scroll occurred. |
**y** | **int** | The y-coordinate where the scroll occurred. |
**path** | [**\JeedomOpenAI\Model\Coordinate[]**](Coordinate.md) | An array of coordinates representing the path of the drag action. Coordinates will appear as an array of objects, eg &#x60;&#x60;&#x60; [   { x: 100, y: 200 },   { x: 200, y: 300 } ] &#x60;&#x60;&#x60; |
**keys** | **string[]** | The combination of keys the model is requesting to be pressed. This is an array of strings, each representing a key. |
**scroll_x** | **int** | The horizontal scroll distance. |
**scroll_y** | **int** | The vertical scroll distance. |
**text** | **string** | The text to type. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
