<?php
/**
 * ModifyAssistantRequest
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
 * ModifyAssistantRequest Class Doc Comment
 *
 * @category Class
 * @package  JeedomOpenAI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ModifyAssistantRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ModifyAssistantRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'model' => '\JeedomOpenAI\Model\ModifyAssistantRequestModel',
        'reasoning_effort' => '\JeedomOpenAI\Model\ReasoningEffort',
        'name' => 'string',
        'description' => 'string',
        'instructions' => 'string',
        'tools' => '\JeedomOpenAI\Model\AssistantObjectToolsInner[]',
        'tool_resources' => '\JeedomOpenAI\Model\ModifyAssistantRequestToolResources',
        'metadata' => 'array<string,string>',
        'temperature' => 'float',
        'top_p' => 'float',
        'response_format' => '\JeedomOpenAI\Model\AssistantsApiResponseFormatOption'
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
        'reasoning_effort' => null,
        'name' => null,
        'description' => null,
        'instructions' => null,
        'tools' => null,
        'tool_resources' => null,
        'metadata' => null,
        'temperature' => null,
        'top_p' => null,
        'response_format' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'model' => false,
        'reasoning_effort' => true,
        'name' => true,
        'description' => true,
        'instructions' => true,
        'tools' => false,
        'tool_resources' => true,
        'metadata' => true,
        'temperature' => true,
        'top_p' => true,
        'response_format' => false
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
        'reasoning_effort' => 'reasoning_effort',
        'name' => 'name',
        'description' => 'description',
        'instructions' => 'instructions',
        'tools' => 'tools',
        'tool_resources' => 'tool_resources',
        'metadata' => 'metadata',
        'temperature' => 'temperature',
        'top_p' => 'top_p',
        'response_format' => 'response_format'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'model' => 'setModel',
        'reasoning_effort' => 'setReasoningEffort',
        'name' => 'setName',
        'description' => 'setDescription',
        'instructions' => 'setInstructions',
        'tools' => 'setTools',
        'tool_resources' => 'setToolResources',
        'metadata' => 'setMetadata',
        'temperature' => 'setTemperature',
        'top_p' => 'setTopP',
        'response_format' => 'setResponseFormat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'model' => 'getModel',
        'reasoning_effort' => 'getReasoningEffort',
        'name' => 'getName',
        'description' => 'getDescription',
        'instructions' => 'getInstructions',
        'tools' => 'getTools',
        'tool_resources' => 'getToolResources',
        'metadata' => 'getMetadata',
        'temperature' => 'getTemperature',
        'top_p' => 'getTopP',
        'response_format' => 'getResponseFormat'
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
        $this->setIfExists('model', $data ?? [], null);
        $this->setIfExists('reasoning_effort', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('instructions', $data ?? [], null);
        $this->setIfExists('tools', $data ?? [], null);
        $this->setIfExists('tool_resources', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('temperature', $data ?? [], 1);
        $this->setIfExists('top_p', $data ?? [], 1);
        $this->setIfExists('response_format', $data ?? [], null);
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

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 256)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 512)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 512.";
        }

        if (!is_null($this->container['instructions']) && (mb_strlen($this->container['instructions']) > 256000)) {
            $invalidProperties[] = "invalid value for 'instructions', the character length must be smaller than or equal to 256000.";
        }

        if (!is_null($this->container['tools']) && (count($this->container['tools']) > 128)) {
            $invalidProperties[] = "invalid value for 'tools', number of items must be less than or equal to 128.";
        }

        if (!is_null($this->container['temperature']) && ($this->container['temperature'] > 2)) {
            $invalidProperties[] = "invalid value for 'temperature', must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['temperature']) && ($this->container['temperature'] < 0)) {
            $invalidProperties[] = "invalid value for 'temperature', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['top_p']) && ($this->container['top_p'] > 1)) {
            $invalidProperties[] = "invalid value for 'top_p', must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['top_p']) && ($this->container['top_p'] < 0)) {
            $invalidProperties[] = "invalid value for 'top_p', must be bigger than or equal to 0.";
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
     * @return \JeedomOpenAI\Model\ModifyAssistantRequestModel|null
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param \JeedomOpenAI\Model\ModifyAssistantRequestModel|null $model model
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
     * Gets reasoning_effort
     *
     * @return \JeedomOpenAI\Model\ReasoningEffort|null
     */
    public function getReasoningEffort()
    {
        return $this->container['reasoning_effort'];
    }

    /**
     * Sets reasoning_effort
     *
     * @param \JeedomOpenAI\Model\ReasoningEffort|null $reasoning_effort reasoning_effort
     *
     * @return self
     */
    public function setReasoningEffort($reasoning_effort)
    {
        if (is_null($reasoning_effort)) {
            array_push($this->openAPINullablesSetToNull, 'reasoning_effort');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('reasoning_effort', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['reasoning_effort'] = $reasoning_effort;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The name of the assistant. The maximum length is 256 characters.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            array_push($this->openAPINullablesSetToNull, 'name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($name) && (mb_strlen($name) > 256)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ModifyAssistantRequest., must be smaller than or equal to 256.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description The description of the assistant. The maximum length is 512 characters.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            array_push($this->openAPINullablesSetToNull, 'description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($description) && (mb_strlen($description) > 512)) {
            throw new \InvalidArgumentException('invalid length for $description when calling ModifyAssistantRequest., must be smaller than or equal to 512.');
        }

        $this->container['description'] = $description;

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
     * @param string|null $instructions The system instructions that the assistant uses. The maximum length is 256,000 characters.
     *
     * @return self
     */
    public function setInstructions($instructions)
    {
        if (is_null($instructions)) {
            array_push($this->openAPINullablesSetToNull, 'instructions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('instructions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($instructions) && (mb_strlen($instructions) > 256000)) {
            throw new \InvalidArgumentException('invalid length for $instructions when calling ModifyAssistantRequest., must be smaller than or equal to 256000.');
        }

        $this->container['instructions'] = $instructions;

        return $this;
    }

    /**
     * Gets tools
     *
     * @return \JeedomOpenAI\Model\AssistantObjectToolsInner[]|null
     */
    public function getTools()
    {
        return $this->container['tools'];
    }

    /**
     * Sets tools
     *
     * @param \JeedomOpenAI\Model\AssistantObjectToolsInner[]|null $tools A list of tool enabled on the assistant. There can be a maximum of 128 tools per assistant. Tools can be of types `code_interpreter`, `file_search`, or `function`.
     *
     * @return self
     */
    public function setTools($tools)
    {
        if (is_null($tools)) {
            throw new \InvalidArgumentException('non-nullable tools cannot be null');
        }

        if ((count($tools) > 128)) {
            throw new \InvalidArgumentException('invalid value for $tools when calling ModifyAssistantRequest., number of items must be less than or equal to 128.');
        }
        $this->container['tools'] = $tools;

        return $this;
    }

    /**
     * Gets tool_resources
     *
     * @return \JeedomOpenAI\Model\ModifyAssistantRequestToolResources|null
     */
    public function getToolResources()
    {
        return $this->container['tool_resources'];
    }

    /**
     * Sets tool_resources
     *
     * @param \JeedomOpenAI\Model\ModifyAssistantRequestToolResources|null $tool_resources tool_resources
     *
     * @return self
     */
    public function setToolResources($tool_resources)
    {
        if (is_null($tool_resources)) {
            array_push($this->openAPINullablesSetToNull, 'tool_resources');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tool_resources', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tool_resources'] = $tool_resources;

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
     * Gets temperature
     *
     * @return float|null
     */
    public function getTemperature()
    {
        return $this->container['temperature'];
    }

    /**
     * Sets temperature
     *
     * @param float|null $temperature What sampling temperature to use, between 0 and 2. Higher values like 0.8 will make the output more random, while lower values like 0.2 will make it more focused and deterministic.
     *
     * @return self
     */
    public function setTemperature($temperature)
    {
        if (is_null($temperature)) {
            array_push($this->openAPINullablesSetToNull, 'temperature');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('temperature', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($temperature) && ($temperature > 2)) {
            throw new \InvalidArgumentException('invalid value for $temperature when calling ModifyAssistantRequest., must be smaller than or equal to 2.');
        }
        if (!is_null($temperature) && ($temperature < 0)) {
            throw new \InvalidArgumentException('invalid value for $temperature when calling ModifyAssistantRequest., must be bigger than or equal to 0.');
        }

        $this->container['temperature'] = $temperature;

        return $this;
    }

    /**
     * Gets top_p
     *
     * @return float|null
     */
    public function getTopP()
    {
        return $this->container['top_p'];
    }

    /**
     * Sets top_p
     *
     * @param float|null $top_p An alternative to sampling with temperature, called nucleus sampling, where the model considers the results of the tokens with top_p probability mass. So 0.1 means only the tokens comprising the top 10% probability mass are considered.  We generally recommend altering this or temperature but not both.
     *
     * @return self
     */
    public function setTopP($top_p)
    {
        if (is_null($top_p)) {
            array_push($this->openAPINullablesSetToNull, 'top_p');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('top_p', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($top_p) && ($top_p > 1)) {
            throw new \InvalidArgumentException('invalid value for $top_p when calling ModifyAssistantRequest., must be smaller than or equal to 1.');
        }
        if (!is_null($top_p) && ($top_p < 0)) {
            throw new \InvalidArgumentException('invalid value for $top_p when calling ModifyAssistantRequest., must be bigger than or equal to 0.');
        }

        $this->container['top_p'] = $top_p;

        return $this;
    }

    /**
     * Gets response_format
     *
     * @return \JeedomOpenAI\Model\AssistantsApiResponseFormatOption|null
     */
    public function getResponseFormat()
    {
        return $this->container['response_format'];
    }

    /**
     * Sets response_format
     *
     * @param \JeedomOpenAI\Model\AssistantsApiResponseFormatOption|null $response_format response_format
     *
     * @return self
     */
    public function setResponseFormat($response_format)
    {
        if (is_null($response_format)) {
            throw new \InvalidArgumentException('non-nullable response_format cannot be null');
        }
        $this->container['response_format'] = $response_format;

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


