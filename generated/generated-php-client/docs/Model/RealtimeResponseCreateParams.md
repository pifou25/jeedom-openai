# # RealtimeResponseCreateParams

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**modalities** | **string[]** | The set of modalities the model can respond with. To disable audio, set this to [\&quot;text\&quot;]. | [optional]
**instructions** | **string** | The default system instructions (i.e. system message) prepended to model  calls. This field allows the client to guide the model on desired  responses. The model can be instructed on response content and format,  (e.g. \&quot;be extremely succinct\&quot;, \&quot;act friendly\&quot;, \&quot;here are examples of good  responses\&quot;) and on audio behavior (e.g. \&quot;talk quickly\&quot;, \&quot;inject emotion  into your voice\&quot;, \&quot;laugh frequently\&quot;). The instructions are not guaranteed  to be followed by the model, but they provide guidance to the model on the  desired behavior.  Note that the server sets default instructions which will be used if this  field is not set and are visible in the &#x60;session.created&#x60; event at the  start of the session. | [optional]
**voice** | [**\JeedomOpenAI\Model\VoiceIdsShared**](VoiceIdsShared.md) |  | [optional]
**output_audio_format** | **string** | The format of output audio. Options are &#x60;pcm16&#x60;, &#x60;g711_ulaw&#x60;, or &#x60;g711_alaw&#x60;. | [optional]
**tools** | [**\JeedomOpenAI\Model\RealtimeResponseCreateParamsToolsInner[]**](RealtimeResponseCreateParamsToolsInner.md) | Tools (functions) available to the model. | [optional]
**tool_choice** | **string** | How the model chooses tools. Options are &#x60;auto&#x60;, &#x60;none&#x60;, &#x60;required&#x60;, or  specify a function, like &#x60;{\&quot;type\&quot;: \&quot;function\&quot;, \&quot;function\&quot;: {\&quot;name\&quot;: \&quot;my_function\&quot;}}&#x60;. | [optional]
**temperature** | **float** | Sampling temperature for the model, limited to [0.6, 1.2]. Defaults to 0.8. | [optional]
**max_response_output_tokens** | [**\JeedomOpenAI\Model\RealtimeResponseCreateParamsMaxResponseOutputTokens**](RealtimeResponseCreateParamsMaxResponseOutputTokens.md) |  | [optional]
**conversation** | [**\JeedomOpenAI\Model\RealtimeResponseCreateParamsConversation**](RealtimeResponseCreateParamsConversation.md) |  | [optional]
**metadata** | **array<string,string>** | Set of 16 key-value pairs that can be attached to an object. This can be useful for storing additional information about the object in a structured format, and querying for objects via API or the dashboard.   Keys are strings with a maximum length of 64 characters. Values are strings with a maximum length of 512 characters. | [optional]
**input** | [**\JeedomOpenAI\Model\RealtimeConversationItemWithReference[]**](RealtimeConversationItemWithReference.md) | Input items to include in the prompt for the model. Using this field creates a new context for this Response instead of using the default conversation. An empty array &#x60;[]&#x60; will clear the context for this Response. Note that this can include references to items from the default conversation. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
