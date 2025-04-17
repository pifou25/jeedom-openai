<?php
/**
 * FineTuningJobCheckpointMetrics
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
 * FineTuningJobCheckpointMetrics Class Doc Comment
 *
 * @category Class
 * @description Metrics at the step number during the fine-tuning job.
 * @package  JeedomOpenAI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FineTuningJobCheckpointMetrics implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FineTuningJobCheckpoint_metrics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'step' => 'float',
        'train_loss' => 'float',
        'train_mean_token_accuracy' => 'float',
        'valid_loss' => 'float',
        'valid_mean_token_accuracy' => 'float',
        'full_valid_loss' => 'float',
        'full_valid_mean_token_accuracy' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'step' => null,
        'train_loss' => null,
        'train_mean_token_accuracy' => null,
        'valid_loss' => null,
        'valid_mean_token_accuracy' => null,
        'full_valid_loss' => null,
        'full_valid_mean_token_accuracy' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'step' => false,
        'train_loss' => false,
        'train_mean_token_accuracy' => false,
        'valid_loss' => false,
        'valid_mean_token_accuracy' => false,
        'full_valid_loss' => false,
        'full_valid_mean_token_accuracy' => false
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
        'step' => 'step',
        'train_loss' => 'train_loss',
        'train_mean_token_accuracy' => 'train_mean_token_accuracy',
        'valid_loss' => 'valid_loss',
        'valid_mean_token_accuracy' => 'valid_mean_token_accuracy',
        'full_valid_loss' => 'full_valid_loss',
        'full_valid_mean_token_accuracy' => 'full_valid_mean_token_accuracy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'step' => 'setStep',
        'train_loss' => 'setTrainLoss',
        'train_mean_token_accuracy' => 'setTrainMeanTokenAccuracy',
        'valid_loss' => 'setValidLoss',
        'valid_mean_token_accuracy' => 'setValidMeanTokenAccuracy',
        'full_valid_loss' => 'setFullValidLoss',
        'full_valid_mean_token_accuracy' => 'setFullValidMeanTokenAccuracy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'step' => 'getStep',
        'train_loss' => 'getTrainLoss',
        'train_mean_token_accuracy' => 'getTrainMeanTokenAccuracy',
        'valid_loss' => 'getValidLoss',
        'valid_mean_token_accuracy' => 'getValidMeanTokenAccuracy',
        'full_valid_loss' => 'getFullValidLoss',
        'full_valid_mean_token_accuracy' => 'getFullValidMeanTokenAccuracy'
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
        $this->setIfExists('step', $data ?? [], null);
        $this->setIfExists('train_loss', $data ?? [], null);
        $this->setIfExists('train_mean_token_accuracy', $data ?? [], null);
        $this->setIfExists('valid_loss', $data ?? [], null);
        $this->setIfExists('valid_mean_token_accuracy', $data ?? [], null);
        $this->setIfExists('full_valid_loss', $data ?? [], null);
        $this->setIfExists('full_valid_mean_token_accuracy', $data ?? [], null);
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
     * Gets step
     *
     * @return float|null
     */
    public function getStep()
    {
        return $this->container['step'];
    }

    /**
     * Sets step
     *
     * @param float|null $step step
     *
     * @return self
     */
    public function setStep($step)
    {
        if (is_null($step)) {
            throw new \InvalidArgumentException('non-nullable step cannot be null');
        }
        $this->container['step'] = $step;

        return $this;
    }

    /**
     * Gets train_loss
     *
     * @return float|null
     */
    public function getTrainLoss()
    {
        return $this->container['train_loss'];
    }

    /**
     * Sets train_loss
     *
     * @param float|null $train_loss train_loss
     *
     * @return self
     */
    public function setTrainLoss($train_loss)
    {
        if (is_null($train_loss)) {
            throw new \InvalidArgumentException('non-nullable train_loss cannot be null');
        }
        $this->container['train_loss'] = $train_loss;

        return $this;
    }

    /**
     * Gets train_mean_token_accuracy
     *
     * @return float|null
     */
    public function getTrainMeanTokenAccuracy()
    {
        return $this->container['train_mean_token_accuracy'];
    }

    /**
     * Sets train_mean_token_accuracy
     *
     * @param float|null $train_mean_token_accuracy train_mean_token_accuracy
     *
     * @return self
     */
    public function setTrainMeanTokenAccuracy($train_mean_token_accuracy)
    {
        if (is_null($train_mean_token_accuracy)) {
            throw new \InvalidArgumentException('non-nullable train_mean_token_accuracy cannot be null');
        }
        $this->container['train_mean_token_accuracy'] = $train_mean_token_accuracy;

        return $this;
    }

    /**
     * Gets valid_loss
     *
     * @return float|null
     */
    public function getValidLoss()
    {
        return $this->container['valid_loss'];
    }

    /**
     * Sets valid_loss
     *
     * @param float|null $valid_loss valid_loss
     *
     * @return self
     */
    public function setValidLoss($valid_loss)
    {
        if (is_null($valid_loss)) {
            throw new \InvalidArgumentException('non-nullable valid_loss cannot be null');
        }
        $this->container['valid_loss'] = $valid_loss;

        return $this;
    }

    /**
     * Gets valid_mean_token_accuracy
     *
     * @return float|null
     */
    public function getValidMeanTokenAccuracy()
    {
        return $this->container['valid_mean_token_accuracy'];
    }

    /**
     * Sets valid_mean_token_accuracy
     *
     * @param float|null $valid_mean_token_accuracy valid_mean_token_accuracy
     *
     * @return self
     */
    public function setValidMeanTokenAccuracy($valid_mean_token_accuracy)
    {
        if (is_null($valid_mean_token_accuracy)) {
            throw new \InvalidArgumentException('non-nullable valid_mean_token_accuracy cannot be null');
        }
        $this->container['valid_mean_token_accuracy'] = $valid_mean_token_accuracy;

        return $this;
    }

    /**
     * Gets full_valid_loss
     *
     * @return float|null
     */
    public function getFullValidLoss()
    {
        return $this->container['full_valid_loss'];
    }

    /**
     * Sets full_valid_loss
     *
     * @param float|null $full_valid_loss full_valid_loss
     *
     * @return self
     */
    public function setFullValidLoss($full_valid_loss)
    {
        if (is_null($full_valid_loss)) {
            throw new \InvalidArgumentException('non-nullable full_valid_loss cannot be null');
        }
        $this->container['full_valid_loss'] = $full_valid_loss;

        return $this;
    }

    /**
     * Gets full_valid_mean_token_accuracy
     *
     * @return float|null
     */
    public function getFullValidMeanTokenAccuracy()
    {
        return $this->container['full_valid_mean_token_accuracy'];
    }

    /**
     * Sets full_valid_mean_token_accuracy
     *
     * @param float|null $full_valid_mean_token_accuracy full_valid_mean_token_accuracy
     *
     * @return self
     */
    public function setFullValidMeanTokenAccuracy($full_valid_mean_token_accuracy)
    {
        if (is_null($full_valid_mean_token_accuracy)) {
            throw new \InvalidArgumentException('non-nullable full_valid_mean_token_accuracy cannot be null');
        }
        $this->container['full_valid_mean_token_accuracy'] = $full_valid_mean_token_accuracy;

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


