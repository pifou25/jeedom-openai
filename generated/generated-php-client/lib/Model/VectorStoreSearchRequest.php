<?php
/**
 * VectorStoreSearchRequest
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
 * VectorStoreSearchRequest Class Doc Comment
 *
 * @category Class
 * @package  JeedomOpenAI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class VectorStoreSearchRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'VectorStoreSearchRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'query' => '\JeedomOpenAI\Model\VectorStoreSearchRequestQuery',
        'rewrite_query' => 'bool',
        'max_num_results' => 'int',
        'filters' => '\JeedomOpenAI\Model\FileSearchToolFilters',
        'ranking_options' => '\JeedomOpenAI\Model\VectorStoreSearchRequestRankingOptions'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'query' => null,
        'rewrite_query' => null,
        'max_num_results' => null,
        'filters' => null,
        'ranking_options' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'query' => false,
        'rewrite_query' => false,
        'max_num_results' => false,
        'filters' => false,
        'ranking_options' => false
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
        'query' => 'query',
        'rewrite_query' => 'rewrite_query',
        'max_num_results' => 'max_num_results',
        'filters' => 'filters',
        'ranking_options' => 'ranking_options'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'query' => 'setQuery',
        'rewrite_query' => 'setRewriteQuery',
        'max_num_results' => 'setMaxNumResults',
        'filters' => 'setFilters',
        'ranking_options' => 'setRankingOptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'query' => 'getQuery',
        'rewrite_query' => 'getRewriteQuery',
        'max_num_results' => 'getMaxNumResults',
        'filters' => 'getFilters',
        'ranking_options' => 'getRankingOptions'
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
        $this->setIfExists('query', $data ?? [], null);
        $this->setIfExists('rewrite_query', $data ?? [], false);
        $this->setIfExists('max_num_results', $data ?? [], 10);
        $this->setIfExists('filters', $data ?? [], null);
        $this->setIfExists('ranking_options', $data ?? [], null);
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

        if ($this->container['query'] === null) {
            $invalidProperties[] = "'query' can't be null";
        }
        if (!is_null($this->container['max_num_results']) && ($this->container['max_num_results'] > 50)) {
            $invalidProperties[] = "invalid value for 'max_num_results', must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['max_num_results']) && ($this->container['max_num_results'] < 1)) {
            $invalidProperties[] = "invalid value for 'max_num_results', must be bigger than or equal to 1.";
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
     * Gets query
     *
     * @return \JeedomOpenAI\Model\VectorStoreSearchRequestQuery
     */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
     * Sets query
     *
     * @param \JeedomOpenAI\Model\VectorStoreSearchRequestQuery $query query
     *
     * @return self
     */
    public function setQuery($query)
    {
        if (is_null($query)) {
            throw new \InvalidArgumentException('non-nullable query cannot be null');
        }
        $this->container['query'] = $query;

        return $this;
    }

    /**
     * Gets rewrite_query
     *
     * @return bool|null
     */
    public function getRewriteQuery()
    {
        return $this->container['rewrite_query'];
    }

    /**
     * Sets rewrite_query
     *
     * @param bool|null $rewrite_query Whether to rewrite the natural language query for vector search.
     *
     * @return self
     */
    public function setRewriteQuery($rewrite_query)
    {
        if (is_null($rewrite_query)) {
            throw new \InvalidArgumentException('non-nullable rewrite_query cannot be null');
        }
        $this->container['rewrite_query'] = $rewrite_query;

        return $this;
    }

    /**
     * Gets max_num_results
     *
     * @return int|null
     */
    public function getMaxNumResults()
    {
        return $this->container['max_num_results'];
    }

    /**
     * Sets max_num_results
     *
     * @param int|null $max_num_results The maximum number of results to return. This number should be between 1 and 50 inclusive.
     *
     * @return self
     */
    public function setMaxNumResults($max_num_results)
    {
        if (is_null($max_num_results)) {
            throw new \InvalidArgumentException('non-nullable max_num_results cannot be null');
        }

        if (($max_num_results > 50)) {
            throw new \InvalidArgumentException('invalid value for $max_num_results when calling VectorStoreSearchRequest., must be smaller than or equal to 50.');
        }
        if (($max_num_results < 1)) {
            throw new \InvalidArgumentException('invalid value for $max_num_results when calling VectorStoreSearchRequest., must be bigger than or equal to 1.');
        }

        $this->container['max_num_results'] = $max_num_results;

        return $this;
    }

    /**
     * Gets filters
     *
     * @return \JeedomOpenAI\Model\FileSearchToolFilters|null
     */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
     * Sets filters
     *
     * @param \JeedomOpenAI\Model\FileSearchToolFilters|null $filters filters
     *
     * @return self
     */
    public function setFilters($filters)
    {
        if (is_null($filters)) {
            throw new \InvalidArgumentException('non-nullable filters cannot be null');
        }
        $this->container['filters'] = $filters;

        return $this;
    }

    /**
     * Gets ranking_options
     *
     * @return \JeedomOpenAI\Model\VectorStoreSearchRequestRankingOptions|null
     */
    public function getRankingOptions()
    {
        return $this->container['ranking_options'];
    }

    /**
     * Sets ranking_options
     *
     * @param \JeedomOpenAI\Model\VectorStoreSearchRequestRankingOptions|null $ranking_options ranking_options
     *
     * @return self
     */
    public function setRankingOptions($ranking_options)
    {
        if (is_null($ranking_options)) {
            throw new \InvalidArgumentException('non-nullable ranking_options cannot be null');
        }
        $this->container['ranking_options'] = $ranking_options;

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


