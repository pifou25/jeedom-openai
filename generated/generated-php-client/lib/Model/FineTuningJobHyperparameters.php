<?php
/**
 * FineTuningJobHyperparameters
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
 * FineTuningJobHyperparameters Class Doc Comment
 *
 * @category Class
 * @description The hyperparameters used for the fine-tuning job. This value will only be returned when running &#x60;supervised&#x60; jobs.
 * @package  JeedomOpenAI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FineTuningJobHyperparameters implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FineTuningJob_hyperparameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'batch_size' => '\JeedomOpenAI\Model\CreateFineTuningJobRequestHyperparametersBatchSize',
        'learning_rate_multiplier' => '\JeedomOpenAI\Model\CreateFineTuningJobRequestHyperparametersLearningRateMultiplier',
        'n_epochs' => '\JeedomOpenAI\Model\CreateFineTuningJobRequestHyperparametersNEpochs'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'batch_size' => null,
        'learning_rate_multiplier' => null,
        'n_epochs' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'batch_size' => false,
        'learning_rate_multiplier' => false,
        'n_epochs' => false
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
        'batch_size' => 'batch_size',
        'learning_rate_multiplier' => 'learning_rate_multiplier',
        'n_epochs' => 'n_epochs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'batch_size' => 'setBatchSize',
        'learning_rate_multiplier' => 'setLearningRateMultiplier',
        'n_epochs' => 'setNEpochs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'batch_size' => 'getBatchSize',
        'learning_rate_multiplier' => 'getLearningRateMultiplier',
        'n_epochs' => 'getNEpochs'
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
        $this->setIfExists('batch_size', $data ?? [], null);
        $this->setIfExists('learning_rate_multiplier', $data ?? [], null);
        $this->setIfExists('n_epochs', $data ?? [], null);
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
     * Gets batch_size
     *
     * @return \JeedomOpenAI\Model\CreateFineTuningJobRequestHyperparametersBatchSize|null
     */
    public function getBatchSize()
    {
        return $this->container['batch_size'];
    }

    /**
     * Sets batch_size
     *
     * @param \JeedomOpenAI\Model\CreateFineTuningJobRequestHyperparametersBatchSize|null $batch_size batch_size
     *
     * @return self
     */
    public function setBatchSize($batch_size)
    {
        if (is_null($batch_size)) {
            throw new \InvalidArgumentException('non-nullable batch_size cannot be null');
        }
        $this->container['batch_size'] = $batch_size;

        return $this;
    }

    /**
     * Gets learning_rate_multiplier
     *
     * @return \JeedomOpenAI\Model\CreateFineTuningJobRequestHyperparametersLearningRateMultiplier|null
     */
    public function getLearningRateMultiplier()
    {
        return $this->container['learning_rate_multiplier'];
    }

    /**
     * Sets learning_rate_multiplier
     *
     * @param \JeedomOpenAI\Model\CreateFineTuningJobRequestHyperparametersLearningRateMultiplier|null $learning_rate_multiplier learning_rate_multiplier
     *
     * @return self
     */
    public function setLearningRateMultiplier($learning_rate_multiplier)
    {
        if (is_null($learning_rate_multiplier)) {
            throw new \InvalidArgumentException('non-nullable learning_rate_multiplier cannot be null');
        }
        $this->container['learning_rate_multiplier'] = $learning_rate_multiplier;

        return $this;
    }

    /**
     * Gets n_epochs
     *
     * @return \JeedomOpenAI\Model\CreateFineTuningJobRequestHyperparametersNEpochs|null
     */
    public function getNEpochs()
    {
        return $this->container['n_epochs'];
    }

    /**
     * Sets n_epochs
     *
     * @param \JeedomOpenAI\Model\CreateFineTuningJobRequestHyperparametersNEpochs|null $n_epochs n_epochs
     *
     * @return self
     */
    public function setNEpochs($n_epochs)
    {
        if (is_null($n_epochs)) {
            throw new \InvalidArgumentException('non-nullable n_epochs cannot be null');
        }
        $this->container['n_epochs'] = $n_epochs;

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


