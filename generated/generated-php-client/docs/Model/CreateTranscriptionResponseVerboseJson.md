# # CreateTranscriptionResponseVerboseJson

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**language** | **string** | The language of the input audio. |
**duration** | **float** | The duration of the input audio. |
**text** | **string** | The transcribed text. |
**words** | [**\JeedomOpenAI\Model\TranscriptionWord[]**](TranscriptionWord.md) | Extracted words and their corresponding timestamps. | [optional]
**segments** | [**\JeedomOpenAI\Model\TranscriptionSegment[]**](TranscriptionSegment.md) | Segments of the transcribed text and their corresponding details. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
