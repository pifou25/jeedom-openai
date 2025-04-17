<?php
/**
 * CreateModerationResponseResultsInnerCategoryAppliedInputTypes
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
 * CreateModerationResponseResultsInnerCategoryAppliedInputTypes Class Doc Comment
 *
 * @category Class
 * @description A list of the categories along with the input type(s) that the score applies to.
 * @package  JeedomOpenAI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateModerationResponseResultsInnerCategoryAppliedInputTypes implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateModerationResponse_results_inner_category_applied_input_types';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'hate' => 'string[]',
        'hate_threatening' => 'string[]',
        'harassment' => 'string[]',
        'harassment_threatening' => 'string[]',
        'illicit' => 'string[]',
        'illicit_violent' => 'string[]',
        'self_harm' => 'string[]',
        'self_harm_intent' => 'string[]',
        'self_harm_instructions' => 'string[]',
        'sexual' => 'string[]',
        'sexual_minors' => 'string[]',
        'violence' => 'string[]',
        'violence_graphic' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'hate' => null,
        'hate_threatening' => null,
        'harassment' => null,
        'harassment_threatening' => null,
        'illicit' => null,
        'illicit_violent' => null,
        'self_harm' => null,
        'self_harm_intent' => null,
        'self_harm_instructions' => null,
        'sexual' => null,
        'sexual_minors' => null,
        'violence' => null,
        'violence_graphic' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'hate' => false,
        'hate_threatening' => false,
        'harassment' => false,
        'harassment_threatening' => false,
        'illicit' => false,
        'illicit_violent' => false,
        'self_harm' => false,
        'self_harm_intent' => false,
        'self_harm_instructions' => false,
        'sexual' => false,
        'sexual_minors' => false,
        'violence' => false,
        'violence_graphic' => false
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
        'hate' => 'hate',
        'hate_threatening' => 'hate/threatening',
        'harassment' => 'harassment',
        'harassment_threatening' => 'harassment/threatening',
        'illicit' => 'illicit',
        'illicit_violent' => 'illicit/violent',
        'self_harm' => 'self-harm',
        'self_harm_intent' => 'self-harm/intent',
        'self_harm_instructions' => 'self-harm/instructions',
        'sexual' => 'sexual',
        'sexual_minors' => 'sexual/minors',
        'violence' => 'violence',
        'violence_graphic' => 'violence/graphic'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'hate' => 'setHate',
        'hate_threatening' => 'setHateThreatening',
        'harassment' => 'setHarassment',
        'harassment_threatening' => 'setHarassmentThreatening',
        'illicit' => 'setIllicit',
        'illicit_violent' => 'setIllicitViolent',
        'self_harm' => 'setSelfHarm',
        'self_harm_intent' => 'setSelfHarmIntent',
        'self_harm_instructions' => 'setSelfHarmInstructions',
        'sexual' => 'setSexual',
        'sexual_minors' => 'setSexualMinors',
        'violence' => 'setViolence',
        'violence_graphic' => 'setViolenceGraphic'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'hate' => 'getHate',
        'hate_threatening' => 'getHateThreatening',
        'harassment' => 'getHarassment',
        'harassment_threatening' => 'getHarassmentThreatening',
        'illicit' => 'getIllicit',
        'illicit_violent' => 'getIllicitViolent',
        'self_harm' => 'getSelfHarm',
        'self_harm_intent' => 'getSelfHarmIntent',
        'self_harm_instructions' => 'getSelfHarmInstructions',
        'sexual' => 'getSexual',
        'sexual_minors' => 'getSexualMinors',
        'violence' => 'getViolence',
        'violence_graphic' => 'getViolenceGraphic'
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

    public const HATE_TEXT = 'text';
    public const HATE_THREATENING_TEXT = 'text';
    public const HARASSMENT_TEXT = 'text';
    public const HARASSMENT_THREATENING_TEXT = 'text';
    public const ILLICIT_TEXT = 'text';
    public const ILLICIT_VIOLENT_TEXT = 'text';
    public const SELF_HARM_TEXT = 'text';
    public const SELF_HARM_IMAGE = 'image';
    public const SELF_HARM_INTENT_TEXT = 'text';
    public const SELF_HARM_INTENT_IMAGE = 'image';
    public const SELF_HARM_INSTRUCTIONS_TEXT = 'text';
    public const SELF_HARM_INSTRUCTIONS_IMAGE = 'image';
    public const SEXUAL_TEXT = 'text';
    public const SEXUAL_IMAGE = 'image';
    public const SEXUAL_MINORS_TEXT = 'text';
    public const VIOLENCE_TEXT = 'text';
    public const VIOLENCE_IMAGE = 'image';
    public const VIOLENCE_GRAPHIC_TEXT = 'text';
    public const VIOLENCE_GRAPHIC_IMAGE = 'image';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHateAllowableValues()
    {
        return [
            self::HATE_TEXT,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHateThreateningAllowableValues()
    {
        return [
            self::HATE_THREATENING_TEXT,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHarassmentAllowableValues()
    {
        return [
            self::HARASSMENT_TEXT,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHarassmentThreateningAllowableValues()
    {
        return [
            self::HARASSMENT_THREATENING_TEXT,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIllicitAllowableValues()
    {
        return [
            self::ILLICIT_TEXT,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIllicitViolentAllowableValues()
    {
        return [
            self::ILLICIT_VIOLENT_TEXT,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSelfHarmAllowableValues()
    {
        return [
            self::SELF_HARM_TEXT,
            self::SELF_HARM_IMAGE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSelfHarmIntentAllowableValues()
    {
        return [
            self::SELF_HARM_INTENT_TEXT,
            self::SELF_HARM_INTENT_IMAGE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSelfHarmInstructionsAllowableValues()
    {
        return [
            self::SELF_HARM_INSTRUCTIONS_TEXT,
            self::SELF_HARM_INSTRUCTIONS_IMAGE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSexualAllowableValues()
    {
        return [
            self::SEXUAL_TEXT,
            self::SEXUAL_IMAGE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSexualMinorsAllowableValues()
    {
        return [
            self::SEXUAL_MINORS_TEXT,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getViolenceAllowableValues()
    {
        return [
            self::VIOLENCE_TEXT,
            self::VIOLENCE_IMAGE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getViolenceGraphicAllowableValues()
    {
        return [
            self::VIOLENCE_GRAPHIC_TEXT,
            self::VIOLENCE_GRAPHIC_IMAGE,
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
        $this->setIfExists('hate', $data ?? [], null);
        $this->setIfExists('hate_threatening', $data ?? [], null);
        $this->setIfExists('harassment', $data ?? [], null);
        $this->setIfExists('harassment_threatening', $data ?? [], null);
        $this->setIfExists('illicit', $data ?? [], null);
        $this->setIfExists('illicit_violent', $data ?? [], null);
        $this->setIfExists('self_harm', $data ?? [], null);
        $this->setIfExists('self_harm_intent', $data ?? [], null);
        $this->setIfExists('self_harm_instructions', $data ?? [], null);
        $this->setIfExists('sexual', $data ?? [], null);
        $this->setIfExists('sexual_minors', $data ?? [], null);
        $this->setIfExists('violence', $data ?? [], null);
        $this->setIfExists('violence_graphic', $data ?? [], null);
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

        if ($this->container['hate'] === null) {
            $invalidProperties[] = "'hate' can't be null";
        }
        if ($this->container['hate_threatening'] === null) {
            $invalidProperties[] = "'hate_threatening' can't be null";
        }
        if ($this->container['harassment'] === null) {
            $invalidProperties[] = "'harassment' can't be null";
        }
        if ($this->container['harassment_threatening'] === null) {
            $invalidProperties[] = "'harassment_threatening' can't be null";
        }
        if ($this->container['illicit'] === null) {
            $invalidProperties[] = "'illicit' can't be null";
        }
        if ($this->container['illicit_violent'] === null) {
            $invalidProperties[] = "'illicit_violent' can't be null";
        }
        if ($this->container['self_harm'] === null) {
            $invalidProperties[] = "'self_harm' can't be null";
        }
        if ($this->container['self_harm_intent'] === null) {
            $invalidProperties[] = "'self_harm_intent' can't be null";
        }
        if ($this->container['self_harm_instructions'] === null) {
            $invalidProperties[] = "'self_harm_instructions' can't be null";
        }
        if ($this->container['sexual'] === null) {
            $invalidProperties[] = "'sexual' can't be null";
        }
        if ($this->container['sexual_minors'] === null) {
            $invalidProperties[] = "'sexual_minors' can't be null";
        }
        if ($this->container['violence'] === null) {
            $invalidProperties[] = "'violence' can't be null";
        }
        if ($this->container['violence_graphic'] === null) {
            $invalidProperties[] = "'violence_graphic' can't be null";
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
     * Gets hate
     *
     * @return string[]
     */
    public function getHate()
    {
        return $this->container['hate'];
    }

    /**
     * Sets hate
     *
     * @param string[] $hate The applied input type(s) for the category 'hate'.
     *
     * @return self
     */
    public function setHate($hate)
    {
        if (is_null($hate)) {
            throw new \InvalidArgumentException('non-nullable hate cannot be null');
        }
        $allowedValues = $this->getHateAllowableValues();
        if (array_diff($hate, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'hate', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['hate'] = $hate;

        return $this;
    }

    /**
     * Gets hate_threatening
     *
     * @return string[]
     */
    public function getHateThreatening()
    {
        return $this->container['hate_threatening'];
    }

    /**
     * Sets hate_threatening
     *
     * @param string[] $hate_threatening The applied input type(s) for the category 'hate/threatening'.
     *
     * @return self
     */
    public function setHateThreatening($hate_threatening)
    {
        if (is_null($hate_threatening)) {
            throw new \InvalidArgumentException('non-nullable hate_threatening cannot be null');
        }
        $allowedValues = $this->getHateThreateningAllowableValues();
        if (array_diff($hate_threatening, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'hate_threatening', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['hate_threatening'] = $hate_threatening;

        return $this;
    }

    /**
     * Gets harassment
     *
     * @return string[]
     */
    public function getHarassment()
    {
        return $this->container['harassment'];
    }

    /**
     * Sets harassment
     *
     * @param string[] $harassment The applied input type(s) for the category 'harassment'.
     *
     * @return self
     */
    public function setHarassment($harassment)
    {
        if (is_null($harassment)) {
            throw new \InvalidArgumentException('non-nullable harassment cannot be null');
        }
        $allowedValues = $this->getHarassmentAllowableValues();
        if (array_diff($harassment, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'harassment', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['harassment'] = $harassment;

        return $this;
    }

    /**
     * Gets harassment_threatening
     *
     * @return string[]
     */
    public function getHarassmentThreatening()
    {
        return $this->container['harassment_threatening'];
    }

    /**
     * Sets harassment_threatening
     *
     * @param string[] $harassment_threatening The applied input type(s) for the category 'harassment/threatening'.
     *
     * @return self
     */
    public function setHarassmentThreatening($harassment_threatening)
    {
        if (is_null($harassment_threatening)) {
            throw new \InvalidArgumentException('non-nullable harassment_threatening cannot be null');
        }
        $allowedValues = $this->getHarassmentThreateningAllowableValues();
        if (array_diff($harassment_threatening, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'harassment_threatening', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['harassment_threatening'] = $harassment_threatening;

        return $this;
    }

    /**
     * Gets illicit
     *
     * @return string[]
     */
    public function getIllicit()
    {
        return $this->container['illicit'];
    }

    /**
     * Sets illicit
     *
     * @param string[] $illicit The applied input type(s) for the category 'illicit'.
     *
     * @return self
     */
    public function setIllicit($illicit)
    {
        if (is_null($illicit)) {
            throw new \InvalidArgumentException('non-nullable illicit cannot be null');
        }
        $allowedValues = $this->getIllicitAllowableValues();
        if (array_diff($illicit, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'illicit', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['illicit'] = $illicit;

        return $this;
    }

    /**
     * Gets illicit_violent
     *
     * @return string[]
     */
    public function getIllicitViolent()
    {
        return $this->container['illicit_violent'];
    }

    /**
     * Sets illicit_violent
     *
     * @param string[] $illicit_violent The applied input type(s) for the category 'illicit/violent'.
     *
     * @return self
     */
    public function setIllicitViolent($illicit_violent)
    {
        if (is_null($illicit_violent)) {
            throw new \InvalidArgumentException('non-nullable illicit_violent cannot be null');
        }
        $allowedValues = $this->getIllicitViolentAllowableValues();
        if (array_diff($illicit_violent, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'illicit_violent', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['illicit_violent'] = $illicit_violent;

        return $this;
    }

    /**
     * Gets self_harm
     *
     * @return string[]
     */
    public function getSelfHarm()
    {
        return $this->container['self_harm'];
    }

    /**
     * Sets self_harm
     *
     * @param string[] $self_harm The applied input type(s) for the category 'self-harm'.
     *
     * @return self
     */
    public function setSelfHarm($self_harm)
    {
        if (is_null($self_harm)) {
            throw new \InvalidArgumentException('non-nullable self_harm cannot be null');
        }
        $allowedValues = $this->getSelfHarmAllowableValues();
        if (array_diff($self_harm, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'self_harm', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['self_harm'] = $self_harm;

        return $this;
    }

    /**
     * Gets self_harm_intent
     *
     * @return string[]
     */
    public function getSelfHarmIntent()
    {
        return $this->container['self_harm_intent'];
    }

    /**
     * Sets self_harm_intent
     *
     * @param string[] $self_harm_intent The applied input type(s) for the category 'self-harm/intent'.
     *
     * @return self
     */
    public function setSelfHarmIntent($self_harm_intent)
    {
        if (is_null($self_harm_intent)) {
            throw new \InvalidArgumentException('non-nullable self_harm_intent cannot be null');
        }
        $allowedValues = $this->getSelfHarmIntentAllowableValues();
        if (array_diff($self_harm_intent, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'self_harm_intent', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['self_harm_intent'] = $self_harm_intent;

        return $this;
    }

    /**
     * Gets self_harm_instructions
     *
     * @return string[]
     */
    public function getSelfHarmInstructions()
    {
        return $this->container['self_harm_instructions'];
    }

    /**
     * Sets self_harm_instructions
     *
     * @param string[] $self_harm_instructions The applied input type(s) for the category 'self-harm/instructions'.
     *
     * @return self
     */
    public function setSelfHarmInstructions($self_harm_instructions)
    {
        if (is_null($self_harm_instructions)) {
            throw new \InvalidArgumentException('non-nullable self_harm_instructions cannot be null');
        }
        $allowedValues = $this->getSelfHarmInstructionsAllowableValues();
        if (array_diff($self_harm_instructions, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'self_harm_instructions', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['self_harm_instructions'] = $self_harm_instructions;

        return $this;
    }

    /**
     * Gets sexual
     *
     * @return string[]
     */
    public function getSexual()
    {
        return $this->container['sexual'];
    }

    /**
     * Sets sexual
     *
     * @param string[] $sexual The applied input type(s) for the category 'sexual'.
     *
     * @return self
     */
    public function setSexual($sexual)
    {
        if (is_null($sexual)) {
            throw new \InvalidArgumentException('non-nullable sexual cannot be null');
        }
        $allowedValues = $this->getSexualAllowableValues();
        if (array_diff($sexual, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'sexual', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sexual'] = $sexual;

        return $this;
    }

    /**
     * Gets sexual_minors
     *
     * @return string[]
     */
    public function getSexualMinors()
    {
        return $this->container['sexual_minors'];
    }

    /**
     * Sets sexual_minors
     *
     * @param string[] $sexual_minors The applied input type(s) for the category 'sexual/minors'.
     *
     * @return self
     */
    public function setSexualMinors($sexual_minors)
    {
        if (is_null($sexual_minors)) {
            throw new \InvalidArgumentException('non-nullable sexual_minors cannot be null');
        }
        $allowedValues = $this->getSexualMinorsAllowableValues();
        if (array_diff($sexual_minors, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'sexual_minors', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sexual_minors'] = $sexual_minors;

        return $this;
    }

    /**
     * Gets violence
     *
     * @return string[]
     */
    public function getViolence()
    {
        return $this->container['violence'];
    }

    /**
     * Sets violence
     *
     * @param string[] $violence The applied input type(s) for the category 'violence'.
     *
     * @return self
     */
    public function setViolence($violence)
    {
        if (is_null($violence)) {
            throw new \InvalidArgumentException('non-nullable violence cannot be null');
        }
        $allowedValues = $this->getViolenceAllowableValues();
        if (array_diff($violence, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'violence', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['violence'] = $violence;

        return $this;
    }

    /**
     * Gets violence_graphic
     *
     * @return string[]
     */
    public function getViolenceGraphic()
    {
        return $this->container['violence_graphic'];
    }

    /**
     * Sets violence_graphic
     *
     * @param string[] $violence_graphic The applied input type(s) for the category 'violence/graphic'.
     *
     * @return self
     */
    public function setViolenceGraphic($violence_graphic)
    {
        if (is_null($violence_graphic)) {
            throw new \InvalidArgumentException('non-nullable violence_graphic cannot be null');
        }
        $allowedValues = $this->getViolenceGraphicAllowableValues();
        if (array_diff($violence_graphic, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'violence_graphic', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['violence_graphic'] = $violence_graphic;

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


