# # CreateTranscription200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**text** | **string** | The transcribed text. |
**logprobs** | [**\JeedomOpenAI\Model\LogProbProperties[]**](LogProbProperties.md) | The log probabilities of the tokens in the transcription. Only returned with the models &#x60;gpt-4o-transcribe&#x60; and &#x60;gpt-4o-mini-transcribe&#x60; if &#x60;logprobs&#x60; is added to the &#x60;include&#x60; array. | [optional]
**language** | **string** | The language of the input audio. |
**duration** | **float** | The duration of the input audio. |
**words** | [**\JeedomOpenAI\Model\TranscriptionWord[]**](TranscriptionWord.md) | Extracted words and their corresponding timestamps. | [optional]
**segments** | [**\JeedomOpenAI\Model\TranscriptionSegment[]**](TranscriptionSegment.md) | Segments of the transcribed text and their corresponding details. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
