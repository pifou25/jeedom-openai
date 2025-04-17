<?php
/**
 * CreateSpeechRequest
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
 * CreateSpeechRequest Class Doc Comment
 *
 * @category Class
 * @package  JeedomOpenAI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateSpeechRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateSpeechRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'model' => '\JeedomOpenAI\Model\CreateSpeechRequestModel',
        'input' => 'string',
        'instructions' => 'string',
        'voice' => '\JeedomOpenAI\Model\VoiceIdsShared',
        'response_format' => 'string',
        'speed' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'model' => null,
        'input' => null,
        'instructions' => null,
        'voice' => null,
        'response_format' => null,
        'speed' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'model' => false,
        'input' => false,
        'instructions' => false,
        'voice' => false,
        'response_format' => false,
        'speed' => false
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
        'model' => 'model',
        'input' => 'input',
        'instructions' => 'instructions',
        'voice' => 'voice',
        'response_format' => 'response_format',
        'speed' => 'speed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'model' => 'setModel',
        'input' => 'setInput',
        'instructions' => 'setInstructions',
        'voice' => 'setVoice',
        'response_format' => 'setResponseFormat',
        'speed' => 'setSpeed'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'model' => 'getModel',
        'input' => 'getInput',
        'instructions' => 'getInstructions',
        'voice' => 'getVoice',
        'response_format' => 'getResponseFormat',
        'speed' => 'getSpeed'
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

    public const RESPONSE_FORMAT_MP3 = 'mp3';
    public const RESPONSE_FORMAT_OPUS = 'opus';
    public const RESPONSE_FORMAT_AAC = 'aac';
    public const RESPONSE_FORMAT_FLAC = 'flac';
    public const RESPONSE_FORMAT_WAV = 'wav';
    public const RESPONSE_FORMAT_PCM = 'pcm';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getResponseFormatAllowableValues()
    {
        return [
            self::RESPONSE_FORMAT_MP3,
            self::RESPONSE_FORMAT_OPUS,
            self::RESPONSE_FORMAT_AAC,
            self::RESPONSE_FORMAT_FLAC,
            self::RESPONSE_FORMAT_WAV,
            self::RESPONSE_FORMAT_PCM,
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
        $this->setIfExists('model', $data ?? [], null);
        $this->setIfExists('input', $data ?? [], null);
        $this->setIfExists('instructions', $data ?? [], null);
        $this->setIfExists('voice', $data ?? [], null);
        $this->setIfExists('response_format', $data ?? [], 'mp3');
        $this->setIfExists('speed', $data ?? [], 1);
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

        if ($this->container['model'] === null) {
            $invalidProperties[] = "'model' can't be null";
        }
        if ($this->container['input'] === null) {
            $invalidProperties[] = "'input' can't be null";
        }
        if ((mb_strlen($this->container['input']) > 4096)) {
            $invalidProperties[] = "invalid value for 'input', the character length must be smaller than or equal to 4096.";
        }

        if (!is_null($this->container['instructions']) && (mb_strlen($this->container['instructions']) > 4096)) {
            $invalidProperties[] = "invalid value for 'instructions', the character length must be smaller than or equal to 4096.";
        }

        if ($this->container['voice'] === null) {
            $invalidProperties[] = "'voice' can't be null";
        }
        $allowedValues = $this->getResponseFormatAllowableValues();
        if (!is_null($this->container['response_format']) && !in_array($this->container['response_format'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'response_format', must be one of '%s'",
                $this->container['response_format'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['speed']) && ($this->container['speed'] > 4)) {
            $invalidProperties[] = "invalid value for 'speed', must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['speed']) && ($this->container['speed'] < 0.25)) {
            $invalidProperties[] = "invalid value for 'speed', must be bigger than or equal to 0.25.";
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
     * Gets model
     *
     * @return \JeedomOpenAI\Model\CreateSpeechRequestModel
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param \JeedomOpenAI\Model\CreateSpeechRequestModel $model model
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
     * Gets input
     *
     * @return string
     */
    public function getInput()
    {
        return $this->container['input'];
    }

    /**
     * Sets input
     *
     * @param string $input The text to generate audio for. The maximum length is 4096 characters.
     *
     * @return self
     */
    public function setInput($input)
    {
        if (is_null($input)) {
            throw new \InvalidArgumentException('non-nullable input cannot be null');
        }
        if ((mb_strlen($input) > 4096)) {
            throw new \InvalidArgumentException('invalid length for $input when calling CreateSpeechRequest., must be smaller than or equal to 4096.');
        }

        $this->container['input'] = $input;

        return $this;
    }

    /**
     * Gets instructions
     *
     * @return string|null
     */
    public function getInstructions()
    {
        return $this->container['instructions'];
    }

    /**
     * Sets instructions
     *
     * @param string|null $instructions Control the voice of your generated audio with additional instructions. Does not work with `tts-1` or `tts-1-hd`.
     *
     * @return self
     */
    public function setInstructions($instructions)
    {
        if (is_null($instructions)) {
            throw new \InvalidArgumentException('non-nullable instructions cannot be null');
        }
        if ((mb_strlen($instructions) > 4096)) {
            throw new \InvalidArgumentException('invalid length for $instructions when calling CreateSpeechRequest., must be smaller than or equal to 4096.');
        }

        $this->container['instructions'] = $instructions;

        return $this;
    }

    /**
     * Gets voice
     *
     * @return \JeedomOpenAI\Model\VoiceIdsShared
     */
    public function getVoice()
    {
        return $this->container['voice'];
    }

    /**
     * Sets voice
     *
     * @param \JeedomOpenAI\Model\VoiceIdsShared $voice voice
     *
     * @return self
     */
    public function setVoice($voice)
    {
        if (is_null($voice)) {
            throw new \InvalidArgumentException('non-nullable voice cannot be null');
        }
        $this->container['voice'] = $voice;

        return $this;
    }

    /**
     * Gets response_format
     *
     * @return string|null
     */
    public function getResponseFormat()
    {
        return $this->container['response_format'];
    }

    /**
     * Sets response_format
     *
     * @param string|null $response_format The format to audio in. Supported formats are `mp3`, `opus`, `aac`, `flac`, `wav`, and `pcm`.
     *
     * @return self
     */
    public function setResponseFormat($response_format)
    {
        if (is_null($response_format)) {
            throw new \InvalidArgumentException('non-nullable response_format cannot be null');
        }
        $allowedValues = $this->getResponseFormatAllowableValues();
        if (!in_array($response_format, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'response_format', must be one of '%s'",
                    $response_format,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['response_format'] = $response_format;

        return $this;
    }

    /**
     * Gets speed
     *
     * @return float|null
     */
    public function getSpeed()
    {
        return $this->container['speed'];
    }

    /**
     * Sets speed
     *
     * @param float|null $speed The speed of the generated audio. Select a value from `0.25` to `4.0`. `1.0` is the default.
     *
     * @return self
     */
    public function setSpeed($speed)
    {
        if (is_null($speed)) {
            throw new \InvalidArgumentException('non-nullable speed cannot be null');
        }

        if (($speed > 4)) {
            throw new \InvalidArgumentException('invalid value for $speed when calling CreateSpeechRequest., must be smaller than or equal to 4.');
        }
        if (($speed < 0.25)) {
            throw new \InvalidArgumentException('invalid value for $speed when calling CreateSpeechRequest., must be bigger than or equal to 0.25.');
        }

        $this->container['speed'] = $speed;

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


