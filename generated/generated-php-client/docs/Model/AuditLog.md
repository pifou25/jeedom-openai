# # AuditLog

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of this log. |
**type** | [**\JeedomOpenAI\Model\AuditLogEventType**](AuditLogEventType.md) |  |
**effective_at** | **int** | The Unix timestamp (in seconds) of the event. |
**project** | [**\JeedomOpenAI\Model\AuditLogProject**](AuditLogProject.md) |  | [optional]
**actor** | [**\JeedomOpenAI\Model\AuditLogActor**](AuditLogActor.md) |  |
**api_key_created** | [**\JeedomOpenAI\Model\AuditLogApiKeyCreated**](AuditLogApiKeyCreated.md) |  | [optional]
**api_key_updated** | [**\JeedomOpenAI\Model\AuditLogApiKeyUpdated**](AuditLogApiKeyUpdated.md) |  | [optional]
**api_key_deleted** | [**\JeedomOpenAI\Model\AuditLogApiKeyDeleted**](AuditLogApiKeyDeleted.md) |  | [optional]
**invite_sent** | [**\JeedomOpenAI\Model\AuditLogInviteSent**](AuditLogInviteSent.md) |  | [optional]
**invite_accepted** | [**\JeedomOpenAI\Model\AuditLogInviteAccepted**](AuditLogInviteAccepted.md) |  | [optional]
**invite_deleted** | [**\JeedomOpenAI\Model\AuditLogInviteAccepted**](AuditLogInviteAccepted.md) |  | [optional]
**login_failed** | [**\JeedomOpenAI\Model\AuditLogLoginFailed**](AuditLogLoginFailed.md) |  | [optional]
**logout_failed** | [**\JeedomOpenAI\Model\AuditLogLoginFailed**](AuditLogLoginFailed.md) |  | [optional]
**organization_updated** | [**\JeedomOpenAI\Model\AuditLogOrganizationUpdated**](AuditLogOrganizationUpdated.md) |  | [optional]
**project_created** | [**\JeedomOpenAI\Model\AuditLogProjectCreated**](AuditLogProjectCreated.md) |  | [optional]
**project_updated** | [**\JeedomOpenAI\Model\AuditLogProjectUpdated**](AuditLogProjectUpdated.md) |  | [optional]
**project_archived** | [**\JeedomOpenAI\Model\AuditLogProjectArchived**](AuditLogProjectArchived.md) |  | [optional]
**rate_limit_updated** | [**\JeedomOpenAI\Model\AuditLogRateLimitUpdated**](AuditLogRateLimitUpdated.md) |  | [optional]
**rate_limit_deleted** | [**\JeedomOpenAI\Model\AuditLogRateLimitDeleted**](AuditLogRateLimitDeleted.md) |  | [optional]
**service_account_created** | [**\JeedomOpenAI\Model\AuditLogServiceAccountCreated**](AuditLogServiceAccountCreated.md) |  | [optional]
**service_account_updated** | [**\JeedomOpenAI\Model\AuditLogServiceAccountUpdated**](AuditLogServiceAccountUpdated.md) |  | [optional]
**service_account_deleted** | [**\JeedomOpenAI\Model\AuditLogServiceAccountDeleted**](AuditLogServiceAccountDeleted.md) |  | [optional]
**user_added** | [**\JeedomOpenAI\Model\AuditLogUserAdded**](AuditLogUserAdded.md) |  | [optional]
**user_updated** | [**\JeedomOpenAI\Model\AuditLogUserUpdated**](AuditLogUserUpdated.md) |  | [optional]
**user_deleted** | [**\JeedomOpenAI\Model\AuditLogUserDeleted**](AuditLogUserDeleted.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
