<?php
/**
 * RealtimeServerEventResponseContentPartDone
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
 * RealtimeServerEventResponseContentPartDone Class Doc Comment
 *
 * @category Class
 * @description Returned when a content part is done streaming in an assistant message item. Also emitted when a Response is interrupted, incomplete, or cancelled.
 * @package  JeedomOpenAI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RealtimeServerEventResponseContentPartDone implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RealtimeServerEventResponseContentPartDone';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'event_id' => 'string',
        'type' => 'string',
        'response_id' => 'string',
        'item_id' => 'string',
        'output_index' => 'int',
        'content_index' => 'int',
        'part' => '\JeedomOpenAI\Model\RealtimeServerEventResponseContentPartDonePart'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'event_id' => null,
        'type' => null,
        'response_id' => null,
        'item_id' => null,
        'output_index' => null,
        'content_index' => null,
        'part' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'event_id' => false,
        'type' => false,
        'response_id' => false,
        'item_id' => false,
        'output_index' => false,
        'content_index' => false,
        'part' => false
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
        'event_id' => 'event_id',
        'type' => 'type',
        'response_id' => 'response_id',
        'item_id' => 'item_id',
        'output_index' => 'output_index',
        'content_index' => 'content_index',
        'part' => 'part'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'event_id' => 'setEventId',
        'type' => 'setType',
        'response_id' => 'setResponseId',
        'item_id' => 'setItemId',
        'output_index' => 'setOutputIndex',
        'content_index' => 'setContentIndex',
        'part' => 'setPart'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'event_id' => 'getEventId',
        'type' => 'getType',
        'response_id' => 'getResponseId',
        'item_id' => 'getItemId',
        'output_index' => 'getOutputIndex',
        'content_index' => 'getContentIndex',
        'part' => 'getPart'
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

    public const TYPE_RESPONSE_CONTENT_PART_DONE = 'response.content_part.done';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_RESPONSE_CONTENT_PART_DONE,
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
        $this->setIfExists('event_id', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('response_id', $data ?? [], null);
        $this->setIfExists('item_id', $data ?? [], null);
        $this->setIfExists('output_index', $data ?? [], null);
        $this->setIfExists('content_index', $data ?? [], null);
        $this->setIfExists('part', $data ?? [], null);
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

        if ($this->container['event_id'] === null) {
            $invalidProperties[] = "'event_id' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['response_id'] === null) {
            $invalidProperties[] = "'response_id' can't be null";
        }
        if ($this->container['item_id'] === null) {
            $invalidProperties[] = "'item_id' can't be null";
        }
        if ($this->container['output_index'] === null) {
            $invalidProperties[] = "'output_index' can't be null";
        }
        if ($this->container['content_index'] === null) {
            $invalidProperties[] = "'content_index' can't be null";
        }
        if ($this->container['part'] === null) {
            $invalidProperties[] = "'part' can't be null";
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
     * Gets event_id
     *
     * @return string
     */
    public function getEventId()
    {
        return $this->container['event_id'];
    }

    /**
     * Sets event_id
     *
     * @param string $event_id The unique ID of the server event.
     *
     * @return self
     */
    public function setEventId($event_id)
    {
        if (is_null($event_id)) {
            throw new \InvalidArgumentException('non-nullable event_id cannot be null');
        }
        $this->container['event_id'] = $event_id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type The event type, must be `response.content_part.done`.
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets response_id
     *
     * @return string
     */
    public function getResponseId()
    {
        return $this->container['response_id'];
    }

    /**
     * Sets response_id
     *
     * @param string $response_id The ID of the response.
     *
     * @return self
     */
    public function setResponseId($response_id)
    {
        if (is_null($response_id)) {
            throw new \InvalidArgumentException('non-nullable response_id cannot be null');
        }
        $this->container['response_id'] = $response_id;

        return $this;
    }

    /**
     * Gets item_id
     *
     * @return string
     */
    public function getItemId()
    {
        return $this->container['item_id'];
    }

    /**
     * Sets item_id
     *
     * @param string $item_id The ID of the item.
     *
     * @return self
     */
    public function setItemId($item_id)
    {
        if (is_null($item_id)) {
            throw new \InvalidArgumentException('non-nullable item_id cannot be null');
        }
        $this->container['item_id'] = $item_id;

        return $this;
    }

    /**
     * Gets output_index
     *
     * @return int
     */
    public function getOutputIndex()
    {
        return $this->container['output_index'];
    }

    /**
     * Sets output_index
     *
     * @param int $output_index The index of the output item in the response.
     *
     * @return self
     */
    public function setOutputIndex($output_index)
    {
        if (is_null($output_index)) {
            throw new \InvalidArgumentException('non-nullable output_index cannot be null');
        }
        $this->container['output_index'] = $output_index;

        return $this;
    }

    /**
     * Gets content_index
     *
     * @return int
     */
    public function getContentIndex()
    {
        return $this->container['content_index'];
    }

    /**
     * Sets content_index
     *
     * @param int $content_index The index of the content part in the item's content array.
     *
     * @return self
     */
    public function setContentIndex($content_index)
    {
        if (is_null($content_index)) {
            throw new \InvalidArgumentException('non-nullable content_index cannot be null');
        }
        $this->container['content_index'] = $content_index;

        return $this;
    }

    /**
     * Gets part
     *
     * @return \JeedomOpenAI\Model\RealtimeServerEventResponseContentPartDonePart
     */
    public function getPart()
    {
        return $this->container['part'];
    }

    /**
     * Sets part
     *
     * @param \JeedomOpenAI\Model\RealtimeServerEventResponseContentPartDonePart $part part
     *
     * @return self
     */
    public function setPart($part)
    {
        if (is_null($part)) {
            throw new \InvalidArgumentException('non-nullable part cannot be null');
        }
        $this->container['part'] = $part;

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


