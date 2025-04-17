<?php
/**
 * FineTuningJob
 *
 * PHP version 8.1
 *
 * @category Class
 * @package  JeedomOpenAI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * OpenAI API
 *
 * The OpenAI REST API. Please see https://platform.openai.com/docs/api-reference for more details.
 *
 * The version of the OpenAPI document: 2.3.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.13.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace JeedomOpenAI\Model;

use \ArrayAccess;
use \JeedomOpenAI\ObjectSerializer;

/**
 * FineTuningJob Class Doc Comment
 *
 * @category Class
 * @description The &#x60;fine_tuning.job&#x60; object represents a fine-tuning job that has been created through the API.
 * @package  JeedomOpenAI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FineTuningJob implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FineTuningJob';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'created_at' => 'int',
        'error' => '\JeedomOpenAI\Model\FineTuningJobError',
        'fine_tuned_model' => 'string',
        'finished_at' => 'int',
        'hyperparameters' => '\JeedomOpenAI\Model\FineTuningJobHyperparameters',
        'model' => 'string',
        'object' => 'string',
        'organization_id' => 'string',
        'result_files' => 'string[]',
        'status' => 'string',
        'trained_tokens' => 'int',
        'training_file' => 'string',
        'validation_file' => 'string',
        'integrations' => '\JeedomOpenAI\Model\FineTuningJobIntegrationsInner[]',
        'seed' => 'int',
        'estimated_finish' => 'int',
        'method' => '\JeedomOpenAI\Model\FineTuneMethod',
        'metadata' => 'array<string,string>'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'created_at' => null,
        'error' => null,
        'fine_tuned_model' => null,
        'finished_at' => null,
        'hyperparameters' => null,
        'model' => null,
        'object' => null,
        'organization_id' => null,
        'result_files' => null,
        'status' => null,
        'trained_tokens' => null,
        'training_file' => null,
        'validation_file' => null,
        'integrations' => null,
        'seed' => null,
        'estimated_finish' => null,
        'method' => null,
        'metadata' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'created_at' => false,
        'error' => true,
        'fine_tuned_model' => true,
        'finished_at' => true,
        'hyperparameters' => false,
        'model' => false,
        'object' => false,
        'organization_id' => false,
        'result_files' => false,
        'status' => false,
        'trained_tokens' => true,
        'training_file' => false,
        'validation_file' => true,
        'integrations' => true,
        'seed' => false,
        'estimated_finish' => true,
        'method' => false,
        'metadata' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'created_at' => 'created_at',
        'error' => 'error',
        'fine_tuned_model' => 'fine_tuned_model',
        'finished_at' => 'finished_at',
        'hyperparameters' => 'hyperparameters',
        'model' => 'model',
        'object' => 'object',
        'organization_id' => 'organization_id',
        'result_files' => 'result_files',
        'status' => 'status',
        'trained_tokens' => 'trained_tokens',
        'training_file' => 'training_file',
        'validation_file' => 'validation_file',
        'integrations' => 'integrations',
        'seed' => 'seed',
        'estimated_finish' => 'estimated_finish',
        'method' => 'method',
        'metadata' => 'metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created_at' => 'setCreatedAt',
        'error' => 'setError',
        'fine_tuned_model' => 'setFineTunedModel',
        'finished_at' => 'setFinishedAt',
        'hyperparameters' => 'setHyperparameters',
        'model' => 'setModel',
        'object' => 'setObject',
        'organization_id' => 'setOrganizationId',
        'result_files' => 'setResultFiles',
        'status' => 'setStatus',
        'trained_tokens' => 'setTrainedTokens',
        'training_file' => 'setTrainingFile',
        'validation_file' => 'setValidationFile',
        'integrations' => 'setIntegrations',
        'seed' => 'setSeed',
        'estimated_finish' => 'setEstimatedFinish',
        'method' => 'setMethod',
        'metadata' => 'setMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created_at' => 'getCreatedAt',
        'error' => 'getError',
        'fine_tuned_model' => 'getFineTunedModel',
        'finished_at' => 'getFinishedAt',
        'hyperparameters' => 'getHyperparameters',
        'model' => 'getModel',
        'object' => 'getObject',
        'organization_id' => 'getOrganizationId',
        'result_files' => 'getResultFiles',
        'status' => 'getStatus',
        'trained_tokens' => 'getTrainedTokens',
        'training_file' => 'getTrainingFile',
        'validation_file' => 'getValidationFile',
        'integrations' => 'getIntegrations',
        'seed' => 'getSeed',
        'estimated_finish' => 'getEstimatedFinish',
        'method' => 'getMethod',
        'metadata' => 'getMetadata'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const OBJECT_FINE_TUNING_JOB = 'fine_tuning.job';
    public const STATUS_VALIDATING_FILES = 'validating_files';
    public const STATUS_QUEUED = 'queued';
    public const STATUS_RUNNING = 'running';
    public const STATUS_SUCCEEDED = 'succeeded';
    public const STATUS_FAILED = 'failed';
    public const STATUS_CANCELLED = 'cancelled';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getObjectAllowableValues()
    {
        return [
            self::OBJECT_FINE_TUNING_JOB,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_VALIDATING_FILES,
            self::STATUS_QUEUED,
            self::STATUS_RUNNING,
            self::STATUS_SUCCEEDED,
            self::STATUS_FAILED,
            self::STATUS_CANCELLED,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('error', $data ?? [], null);
        $this->setIfExists('fine_tuned_model', $data ?? [], null);
        $this->setIfExists('finished_at', $data ?? [], null);
        $this->setIfExists('hyperparameters', $data ?? [], null);
        $this->setIfExists('model', $data ?? [], null);
        $this->setIfExists('object', $data ?? [], null);
        $this->setIfExists('organization_id', $data ?? [], null);
        $this->setIfExists('result_files', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('trained_tokens', $data ?? [], null);
        $this->setIfExists('training_file', $data ?? [], null);
        $this->setIfExists('validation_file', $data ?? [], null);
        $this->setIfExists('integrations', $data ?? [], null);
        $this->setIfExists('seed', $data ?? [], null);
        $this->setIfExists('estimated_finish', $data ?? [], null);
        $this->setIfExists('method', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['error'] === null) {
            $invalidProperties[] = "'error' can't be null";
        }
        if ($this->container['fine_tuned_model'] === null) {
            $invalidProperties[] = "'fine_tuned_model' can't be null";
        }
        if ($this->container['finished_at'] === null) {
            $invalidProperties[] = "'finished_at' can't be null";
        }
        if ($this->container['hyperparameters'] === null) {
            $invalidProperties[] = "'hyperparameters' can't be null";
        }
        if ($this->container['model'] === null) {
            $invalidProperties[] = "'model' can't be null";
        }
        if ($this->container['object'] === null) {
            $invalidProperties[] = "'object' can't be null";
        }
        $allowedValues = $this->getObjectAllowableValues();
        if (!is_null($this->container['object']) && !in_array($this->container['object'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'object', must be one of '%s'",
                $this->container['object'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['organization_id'] === null) {
            $invalidProperties[] = "'organization_id' can't be null";
        }
        if ($this->container['result_files'] === null) {
            $invalidProperties[] = "'result_files' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['trained_tokens'] === null) {
            $invalidProperties[] = "'trained_tokens' can't be null";
        }
        if ($this->container['training_file'] === null) {
            $invalidProperties[] = "'training_file' can't be null";
        }
        if ($this->container['validation_file'] === null) {
            $invalidProperties[] = "'validation_file' can't be null";
        }
        if (!is_null($this->container['integrations']) && (count($this->container['integrations']) > 5)) {
            $invalidProperties[] = "invalid value for 'integrations', number of items must be less than or equal to 5.";
        }

        if ($this->container['seed'] === null) {
            $invalidProperties[] = "'seed' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id The object identifier, which can be referenced in the API endpoints.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return int
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param int $created_at The Unix timestamp (in seconds) for when the fine-tuning job was created.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets error
     *
     * @return \JeedomOpenAI\Model\FineTuningJobError
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param \JeedomOpenAI\Model\FineTuningJobError $error error
     *
     * @return self
     */
    public function setError($error)
    {
        if (is_null($error)) {
            array_push($this->openAPINullablesSetToNull, 'error');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('error', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['error'] = $error;

        return $this;
    }

    /**
     * Gets fine_tuned_model
     *
     * @return string
     */
    public function getFineTunedModel()
    {
        return $this->container['fine_tuned_model'];
    }

    /**
     * Sets fine_tuned_model
     *
     * @param string $fine_tuned_model The name of the fine-tuned model that is being created. The value will be null if the fine-tuning job is still running.
     *
     * @return self
     */
    public function setFineTunedModel($fine_tuned_model)
    {
        if (is_null($fine_tuned_model)) {
            array_push($this->openAPINullablesSetToNull, 'fine_tuned_model');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('fine_tuned_model', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['fine_tuned_model'] = $fine_tuned_model;

        return $this;
    }

    /**
     * Gets finished_at
     *
     * @return int
     */
    public function getFinishedAt()
    {
        return $this->container['finished_at'];
    }

    /**
     * Sets finished_at
     *
     * @param int $finished_at The Unix timestamp (in seconds) for when the fine-tuning job was finished. The value will be null if the fine-tuning job is still running.
     *
     * @return self
     */
    public function setFinishedAt($finished_at)
    {
        if (is_null($finished_at)) {
            array_push($this->openAPINullablesSetToNull, 'finished_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('finished_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['finished_at'] = $finished_at;

        return $this;
    }

    /**
     * Gets hyperparameters
     *
     * @return \JeedomOpenAI\Model\FineTuningJobHyperparameters
     */
    public function getHyperparameters()
    {
        return $this->container['hyperparameters'];
    }

    /**
     * Sets hyperparameters
     *
     * @param \JeedomOpenAI\Model\FineTuningJobHyperparameters $hyperparameters hyperparameters
     *
     * @return self
     */
    public function setHyperparameters($hyperparameters)
    {
        if (is_null($hyperparameters)) {
            throw new \InvalidArgumentException('non-nullable hyperparameters cannot be null');
        }
        $this->container['hyperparameters'] = $hyperparameters;

        return $this;
    }

    /**
     * Gets model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param string $model The base model that is being fine-tuned.
     *
     * @return self
     */
    public function setModel($model)
    {
        if (is_null($model)) {
            throw new \InvalidArgumentException('non-nullable model cannot be null');
        }
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets object
     *
     * @return string
     */
    public function getObject()
    {
        return $this->container['object'];
    }

    /**
     * Sets object
     *
     * @param string $object The object type, which is always \"fine_tuning.job\".
     *
     * @return self
     */
    public function setObject($object)
    {
        if (is_null($object)) {
            throw new \InvalidArgumentException('non-nullable object cannot be null');
        }
        $allowedValues = $this->getObjectAllowableValues();
        if (!in_array($object, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'object', must be one of '%s'",
                    $object,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['object'] = $object;

        return $this;
    }

    /**
     * Gets organization_id
     *
     * @return string
     */
    public function getOrganizationId()
    {
        return $this->container['organization_id'];
    }

    /**
     * Sets organization_id
     *
     * @param string $organization_id The organization that owns the fine-tuning job.
     *
     * @return self
     */
    public function setOrganizationId($organization_id)
    {
        if (is_null($organization_id)) {
            throw new \InvalidArgumentException('non-nullable organization_id cannot be null');
        }
        $this->container['organization_id'] = $organization_id;

        return $this;
    }

    /**
     * Gets result_files
     *
     * @return string[]
     */
    public function getResultFiles()
    {
        return $this->container['result_files'];
    }

    /**
     * Sets result_files
     *
     * @param string[] $result_files The compiled results file ID(s) for the fine-tuning job. You can retrieve the results with the [Files API](/docs/api-reference/files/retrieve-contents).
     *
     * @return self
     */
    public function setResultFiles($result_files)
    {
        if (is_null($result_files)) {
            throw new \InvalidArgumentException('non-nullable result_files cannot be null');
        }
        $this->container['result_files'] = $result_files;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status The current status of the fine-tuning job, which can be either `validating_files`, `queued`, `running`, `succeeded`, `failed`, or `cancelled`.
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets trained_tokens
     *
     * @return int
     */
    public function getTrainedTokens()
    {
        return $this->container['trained_tokens'];
    }

    /**
     * Sets trained_tokens
     *
     * @param int $trained_tokens The total number of billable tokens processed by this fine-tuning job. The value will be null if the fine-tuning job is still running.
     *
     * @return self
     */
    public function setTrainedTokens($trained_tokens)
    {
        if (is_null($trained_tokens)) {
            array_push($this->openAPINullablesSetToNull, 'trained_tokens');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('trained_tokens', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['trained_tokens'] = $trained_tokens;

        return $this;
    }

    /**
     * Gets training_file
     *
     * @return string
     */
    public function getTrainingFile()
    {
        return $this->container['training_file'];
    }

    /**
     * Sets training_file
     *
     * @param string $training_file The file ID used for training. You can retrieve the training data with the [Files API](/docs/api-reference/files/retrieve-contents).
     *
     * @return self
     */
    public function setTrainingFile($training_file)
    {
        if (is_null($training_file)) {
            throw new \InvalidArgumentException('non-nullable training_file cannot be null');
        }
        $this->container['training_file'] = $training_file;

        return $this;
    }

    /**
     * Gets validation_file
     *
     * @return string
     */
    public function getValidationFile()
    {
        return $this->container['validation_file'];
    }

    /**
     * Sets validation_file
     *
     * @param string $validation_file The file ID used for validation. You can retrieve the validation results with the [Files API](/docs/api-reference/files/retrieve-contents).
     *
     * @return self
     */
    public function setValidationFile($validation_file)
    {
        if (is_null($validation_file)) {
            array_push($this->openAPINullablesSetToNull, 'validation_file');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('validation_file', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['validation_file'] = $validation_file;

        return $this;
    }

    /**
     * Gets integrations
     *
     * @return \JeedomOpenAI\Model\FineTuningJobIntegrationsInner[]|null
     */
    public function getIntegrations()
    {
        return $this->container['integrations'];
    }

    /**
     * Sets integrations
     *
     * @param \JeedomOpenAI\Model\FineTuningJobIntegrationsInner[]|null $integrations A list of integrations to enable for this fine-tuning job.
     *
     * @return self
     */
    public function setIntegrations($integrations)
    {
        if (is_null($integrations)) {
            array_push($this->openAPINullablesSetToNull, 'integrations');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('integrations', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($integrations) && (count($integrations) > 5)) {
            throw new \InvalidArgumentException('invalid value for $integrations when calling FineTuningJob., number of items must be less than or equal to 5.');
        }
        $this->container['integrations'] = $integrations;

        return $this;
    }

    /**
     * Gets seed
     *
     * @return int
     */
    public function getSeed()
    {
        return $this->container['seed'];
    }

    /**
     * Sets seed
     *
     * @param int $seed The seed used for the fine-tuning job.
     *
     * @return self
     */
    public function setSeed($seed)
    {
        if (is_null($seed)) {
            throw new \InvalidArgumentException('non-nullable seed cannot be null');
        }
        $this->container['seed'] = $seed;

        return $this;
    }

    /**
     * Gets estimated_finish
     *
     * @return int|null
     */
    public function getEstimatedFinish()
    {
        return $this->container['estimated_finish'];
    }

    /**
     * Sets estimated_finish
     *
     * @param int|null $estimated_finish The Unix timestamp (in seconds) for when the fine-tuning job is estimated to finish. The value will be null if the fine-tuning job is not running.
     *
     * @return self
     */
    public function setEstimatedFinish($estimated_finish)
    {
        if (is_null($estimated_finish)) {
            array_push($this->openAPINullablesSetToNull, 'estimated_finish');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('estimated_finish', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['estimated_finish'] = $estimated_finish;

        return $this;
    }

    /**
     * Gets method
     *
     * @return \JeedomOpenAI\Model\FineTuneMethod|null
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     *
     * @param \JeedomOpenAI\Model\FineTuneMethod|null $method method
     *
     * @return self
     */
    public function setMethod($method)
    {
        if (is_null($method)) {
            throw new \InvalidArgumentException('non-nullable method cannot be null');
        }
        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return array<string,string>|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param array<string,string>|null $metadata Set of 16 key-value pairs that can be attached to an object. This can be useful for storing additional information about the object in a structured format, and querying for objects via API or the dashboard.   Keys are strings with a maximum length of 64 characters. Values are strings with a maximum length of 512 characters.
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        if (is_null($metadata)) {
            array_push($this->openAPINullablesSetToNull, 'metadata');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('metadata', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['metadata'] = $metadata;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


