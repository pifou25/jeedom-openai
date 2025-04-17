<?php
/**
 * UsageCompletionsResult
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
 * UsageCompletionsResult Class Doc Comment
 *
 * @category Class
 * @description The aggregated completions usage details of the specific time bucket.
 * @package  JeedomOpenAI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UsageCompletionsResult implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UsageCompletionsResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'object' => 'string',
        'input_tokens' => 'int',
        'input_cached_tokens' => 'int',
        'output_tokens' => 'int',
        'input_audio_tokens' => 'int',
        'output_audio_tokens' => 'int',
        'num_model_requests' => 'int',
        'project_id' => 'string',
        'user_id' => 'string',
        'api_key_id' => 'string',
        'model' => 'string',
        'batch' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'object' => null,
        'input_tokens' => null,
        'input_cached_tokens' => null,
        'output_tokens' => null,
        'input_audio_tokens' => null,
        'output_audio_tokens' => null,
        'num_model_requests' => null,
        'project_id' => null,
        'user_id' => null,
        'api_key_id' => null,
        'model' => null,
        'batch' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'object' => false,
        'input_tokens' => false,
        'input_cached_tokens' => false,
        'output_tokens' => false,
        'input_audio_tokens' => false,
        'output_audio_tokens' => false,
        'num_model_requests' => false,
        'project_id' => true,
        'user_id' => true,
        'api_key_id' => true,
        'model' => true,
        'batch' => true
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
        'object' => 'object',
        'input_tokens' => 'input_tokens',
        'input_cached_tokens' => 'input_cached_tokens',
        'output_tokens' => 'output_tokens',
        'input_audio_tokens' => 'input_audio_tokens',
        'output_audio_tokens' => 'output_audio_tokens',
        'num_model_requests' => 'num_model_requests',
        'project_id' => 'project_id',
        'user_id' => 'user_id',
        'api_key_id' => 'api_key_id',
        'model' => 'model',
        'batch' => 'batch'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'object' => 'setObject',
        'input_tokens' => 'setInputTokens',
        'input_cached_tokens' => 'setInputCachedTokens',
        'output_tokens' => 'setOutputTokens',
        'input_audio_tokens' => 'setInputAudioTokens',
        'output_audio_tokens' => 'setOutputAudioTokens',
        'num_model_requests' => 'setNumModelRequests',
        'project_id' => 'setProjectId',
        'user_id' => 'setUserId',
        'api_key_id' => 'setApiKeyId',
        'model' => 'setModel',
        'batch' => 'setBatch'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'object' => 'getObject',
        'input_tokens' => 'getInputTokens',
        'input_cached_tokens' => 'getInputCachedTokens',
        'output_tokens' => 'getOutputTokens',
        'input_audio_tokens' => 'getInputAudioTokens',
        'output_audio_tokens' => 'getOutputAudioTokens',
        'num_model_requests' => 'getNumModelRequests',
        'project_id' => 'getProjectId',
        'user_id' => 'getUserId',
        'api_key_id' => 'getApiKeyId',
        'model' => 'getModel',
        'batch' => 'getBatch'
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

    public const OBJECT_ORGANIZATION_USAGE_COMPLETIONS_RESULT = 'organization.usage.completions.result';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getObjectAllowableValues()
    {
        return [
            self::OBJECT_ORGANIZATION_USAGE_COMPLETIONS_RESULT,
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
        $this->setIfExists('object', $data ?? [], null);
        $this->setIfExists('input_tokens', $data ?? [], null);
        $this->setIfExists('input_cached_tokens', $data ?? [], null);
        $this->setIfExists('output_tokens', $data ?? [], null);
        $this->setIfExists('input_audio_tokens', $data ?? [], null);
        $this->setIfExists('output_audio_tokens', $data ?? [], null);
        $this->setIfExists('num_model_requests', $data ?? [], null);
        $this->setIfExists('project_id', $data ?? [], null);
        $this->setIfExists('user_id', $data ?? [], null);
        $this->setIfExists('api_key_id', $data ?? [], null);
        $this->setIfExists('model', $data ?? [], null);
        $this->setIfExists('batch', $data ?? [], null);
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

        if ($this->container['input_tokens'] === null) {
            $invalidProperties[] = "'input_tokens' can't be null";
        }
        if ($this->container['output_tokens'] === null) {
            $invalidProperties[] = "'output_tokens' can't be null";
        }
        if ($this->container['num_model_requests'] === null) {
            $invalidProperties[] = "'num_model_requests' can't be null";
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
     * @param string $object object
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
     * Gets input_tokens
     *
     * @return int
     */
    public function getInputTokens()
    {
        return $this->container['input_tokens'];
    }

    /**
     * Sets input_tokens
     *
     * @param int $input_tokens The aggregated number of text input tokens used, including cached tokens. For customers subscribe to scale tier, this includes scale tier tokens.
     *
     * @return self
     */
    public function setInputTokens($input_tokens)
    {
        if (is_null($input_tokens)) {
            throw new \InvalidArgumentException('non-nullable input_tokens cannot be null');
        }
        $this->container['input_tokens'] = $input_tokens;

        return $this;
    }

    /**
     * Gets input_cached_tokens
     *
     * @return int|null
     */
    public function getInputCachedTokens()
    {
        return $this->container['input_cached_tokens'];
    }

    /**
     * Sets input_cached_tokens
     *
     * @param int|null $input_cached_tokens The aggregated number of text input tokens that has been cached from previous requests. For customers subscribe to scale tier, this includes scale tier tokens.
     *
     * @return self
     */
    public function setInputCachedTokens($input_cached_tokens)
    {
        if (is_null($input_cached_tokens)) {
            throw new \InvalidArgumentException('non-nullable input_cached_tokens cannot be null');
        }
        $this->container['input_cached_tokens'] = $input_cached_tokens;

        return $this;
    }

    /**
     * Gets output_tokens
     *
     * @return int
     */
    public function getOutputTokens()
    {
        return $this->container['output_tokens'];
    }

    /**
     * Sets output_tokens
     *
     * @param int $output_tokens The aggregated number of text output tokens used. For customers subscribe to scale tier, this includes scale tier tokens.
     *
     * @return self
     */
    public function setOutputTokens($output_tokens)
    {
        if (is_null($output_tokens)) {
            throw new \InvalidArgumentException('non-nullable output_tokens cannot be null');
        }
        $this->container['output_tokens'] = $output_tokens;

        return $this;
    }

    /**
     * Gets input_audio_tokens
     *
     * @return int|null
     */
    public function getInputAudioTokens()
    {
        return $this->container['input_audio_tokens'];
    }

    /**
     * Sets input_audio_tokens
     *
     * @param int|null $input_audio_tokens The aggregated number of audio input tokens used, including cached tokens.
     *
     * @return self
     */
    public function setInputAudioTokens($input_audio_tokens)
    {
        if (is_null($input_audio_tokens)) {
            throw new \InvalidArgumentException('non-nullable input_audio_tokens cannot be null');
        }
        $this->container['input_audio_tokens'] = $input_audio_tokens;

        return $this;
    }

    /**
     * Gets output_audio_tokens
     *
     * @return int|null
     */
    public function getOutputAudioTokens()
    {
        return $this->container['output_audio_tokens'];
    }

    /**
     * Sets output_audio_tokens
     *
     * @param int|null $output_audio_tokens The aggregated number of audio output tokens used.
     *
     * @return self
     */
    public function setOutputAudioTokens($output_audio_tokens)
    {
        if (is_null($output_audio_tokens)) {
            throw new \InvalidArgumentException('non-nullable output_audio_tokens cannot be null');
        }
        $this->container['output_audio_tokens'] = $output_audio_tokens;

        return $this;
    }

    /**
     * Gets num_model_requests
     *
     * @return int
     */
    public function getNumModelRequests()
    {
        return $this->container['num_model_requests'];
    }

    /**
     * Sets num_model_requests
     *
     * @param int $num_model_requests The count of requests made to the model.
     *
     * @return self
     */
    public function setNumModelRequests($num_model_requests)
    {
        if (is_null($num_model_requests)) {
            throw new \InvalidArgumentException('non-nullable num_model_requests cannot be null');
        }
        $this->container['num_model_requests'] = $num_model_requests;

        return $this;
    }

    /**
     * Gets project_id
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->container['project_id'];
    }

    /**
     * Sets project_id
     *
     * @param string|null $project_id When `group_by=project_id`, this field provides the project ID of the grouped usage result.
     *
     * @return self
     */
    public function setProjectId($project_id)
    {
        if (is_null($project_id)) {
            array_push($this->openAPINullablesSetToNull, 'project_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('project_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['project_id'] = $project_id;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return string|null
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string|null $user_id When `group_by=user_id`, this field provides the user ID of the grouped usage result.
     *
     * @return self
     */
    public function setUserId($user_id)
    {
        if (is_null($user_id)) {
            array_push($this->openAPINullablesSetToNull, 'user_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('user_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets api_key_id
     *
     * @return string|null
     */
    public function getApiKeyId()
    {
        return $this->container['api_key_id'];
    }

    /**
     * Sets api_key_id
     *
     * @param string|null $api_key_id When `group_by=api_key_id`, this field provides the API key ID of the grouped usage result.
     *
     * @return self
     */
    public function setApiKeyId($api_key_id)
    {
        if (is_null($api_key_id)) {
            array_push($this->openAPINullablesSetToNull, 'api_key_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('api_key_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['api_key_id'] = $api_key_id;

        return $this;
    }

    /**
     * Gets model
     *
     * @return string|null
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param string|null $model When `group_by=model`, this field provides the model name of the grouped usage result.
     *
     * @return self
     */
    public function setModel($model)
    {
        if (is_null($model)) {
            array_push($this->openAPINullablesSetToNull, 'model');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('model', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets batch
     *
     * @return bool|null
     */
    public function getBatch()
    {
        return $this->container['batch'];
    }

    /**
     * Sets batch
     *
     * @param bool|null $batch When `group_by=batch`, this field tells whether the grouped usage result is batch or not.
     *
     * @return self
     */
    public function setBatch($batch)
    {
        if (is_null($batch)) {
            array_push($this->openAPINullablesSetToNull, 'batch');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('batch', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['batch'] = $batch;

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


