<?php
/**
 * CreateCompletionResponseChoicesInnerLogprobs
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
 * CreateCompletionResponseChoicesInnerLogprobs Class Doc Comment
 *
 * @category Class
 * @package  JeedomOpenAI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateCompletionResponseChoicesInnerLogprobs implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateCompletionResponse_choices_inner_logprobs';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'text_offset' => 'int[]',
        'token_logprobs' => 'float[]',
        'tokens' => 'string[]',
        'top_logprobs' => 'array<string,float>[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'text_offset' => null,
        'token_logprobs' => null,
        'tokens' => null,
        'top_logprobs' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'text_offset' => false,
        'token_logprobs' => false,
        'tokens' => false,
        'top_logprobs' => false
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
        'text_offset' => 'text_offset',
        'token_logprobs' => 'token_logprobs',
        'tokens' => 'tokens',
        'top_logprobs' => 'top_logprobs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'text_offset' => 'setTextOffset',
        'token_logprobs' => 'setTokenLogprobs',
        'tokens' => 'setTokens',
        'top_logprobs' => 'setTopLogprobs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'text_offset' => 'getTextOffset',
        'token_logprobs' => 'getTokenLogprobs',
        'tokens' => 'getTokens',
        'top_logprobs' => 'getTopLogprobs'
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
        $this->setIfExists('text_offset', $data ?? [], null);
        $this->setIfExists('token_logprobs', $data ?? [], null);
        $this->setIfExists('tokens', $data ?? [], null);
        $this->setIfExists('top_logprobs', $data ?? [], null);
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
     * Gets text_offset
     *
     * @return int[]|null
     */
    public function getTextOffset()
    {
        return $this->container['text_offset'];
    }

    /**
     * Sets text_offset
     *
     * @param int[]|null $text_offset text_offset
     *
     * @return self
     */
    public function setTextOffset($text_offset)
    {
        if (is_null($text_offset)) {
            throw new \InvalidArgumentException('non-nullable text_offset cannot be null');
        }
        $this->container['text_offset'] = $text_offset;

        return $this;
    }

    /**
     * Gets token_logprobs
     *
     * @return float[]|null
     */
    public function getTokenLogprobs()
    {
        return $this->container['token_logprobs'];
    }

    /**
     * Sets token_logprobs
     *
     * @param float[]|null $token_logprobs token_logprobs
     *
     * @return self
     */
    public function setTokenLogprobs($token_logprobs)
    {
        if (is_null($token_logprobs)) {
            throw new \InvalidArgumentException('non-nullable token_logprobs cannot be null');
        }
        $this->container['token_logprobs'] = $token_logprobs;

        return $this;
    }

    /**
     * Gets tokens
     *
     * @return string[]|null
     */
    public function getTokens()
    {
        return $this->container['tokens'];
    }

    /**
     * Sets tokens
     *
     * @param string[]|null $tokens tokens
     *
     * @return self
     */
    public function setTokens($tokens)
    {
        if (is_null($tokens)) {
            throw new \InvalidArgumentException('non-nullable tokens cannot be null');
        }
        $this->container['tokens'] = $tokens;

        return $this;
    }

    /**
     * Gets top_logprobs
     *
     * @return array<string,float>[]|null
     */
    public function getTopLogprobs()
    {
        return $this->container['top_logprobs'];
    }

    /**
     * Sets top_logprobs
     *
     * @param array<string,float>[]|null $top_logprobs top_logprobs
     *
     * @return self
     */
    public function setTopLogprobs($top_logprobs)
    {
        if (is_null($top_logprobs)) {
            throw new \InvalidArgumentException('non-nullable top_logprobs cannot be null');
        }
        $this->container['top_logprobs'] = $top_logprobs;

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


