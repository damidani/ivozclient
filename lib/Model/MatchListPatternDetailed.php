<?php
/**
 * MatchListPatternDetailed
 *
 * PHP version 5
 *
 * @category Class
 * @package  Ivz\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Ivoz Provider
 *
 * Client REST API
 *
 * OpenAPI spec version: 2.20.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.31
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Ivz\Client\Model;

use \ArrayAccess;
use \Ivz\Client\ObjectSerializer;

/**
 * MatchListPatternDetailed Class Doc Comment
 *
 * @category Class
 * @package  Ivz\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MatchListPatternDetailed implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MatchListPattern-detailed';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'description' => 'string',
        'type' => 'string',
        'regexp' => 'string',
        'numbervalue' => 'string',
        'id' => 'int',
        'match_list' => '\Ivz\Client\Model\MatchList',
        'number_country' => '\Ivz\Client\Model\Country'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'description' => null,
        'type' => null,
        'regexp' => null,
        'numbervalue' => null,
        'id' => null,
        'match_list' => null,
        'number_country' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'description' => 'description',
        'type' => 'type',
        'regexp' => 'regexp',
        'numbervalue' => 'numbervalue',
        'id' => 'id',
        'match_list' => 'matchList',
        'number_country' => 'numberCountry'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'type' => 'setType',
        'regexp' => 'setRegexp',
        'numbervalue' => 'setNumbervalue',
        'id' => 'setId',
        'match_list' => 'setMatchList',
        'number_country' => 'setNumberCountry'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'type' => 'getType',
        'regexp' => 'getRegexp',
        'numbervalue' => 'getNumbervalue',
        'id' => 'getId',
        'match_list' => 'getMatchList',
        'number_country' => 'getNumberCountry'
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
        return self::$swaggerModelName;
    }

    const TYPE_NUMBER = 'number';
    const TYPE_REGEXP = 'regexp';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_NUMBER,
            self::TYPE_REGEXP,
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
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['regexp'] = isset($data['regexp']) ? $data['regexp'] : null;
        $this->container['numbervalue'] = isset($data['numbervalue']) ? $data['numbervalue'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['match_list'] = isset($data['match_list']) ? $data['match_list'] : null;
        $this->container['number_country'] = isset($data['number_country']) ? $data['number_country'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 55)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 55.";
        }

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ((mb_strlen($this->container['type']) > 10)) {
            $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['regexp']) && (mb_strlen($this->container['regexp']) > 255)) {
            $invalidProperties[] = "invalid value for 'regexp', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['numbervalue']) && (mb_strlen($this->container['numbervalue']) > 25)) {
            $invalidProperties[] = "invalid value for 'numbervalue', the character length must be smaller than or equal to 25.";
        }

        if ($this->container['match_list'] === null) {
            $invalidProperties[] = "'match_list' can't be null";
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
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description 
     *
     * @return $this
     */
    public function setDescription($description)
    {
        if (!is_null($description) && (mb_strlen($description) > 55)) {
            throw new \InvalidArgumentException('invalid length for $description when calling MatchListPatternDetailed., must be smaller than or equal to 55.');
        }

        $this->container['description'] = $description;

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
     * @param string $type 
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($type) > 10)) {
            throw new \InvalidArgumentException('invalid length for $type when calling MatchListPatternDetailed., must be smaller than or equal to 10.');
        }

        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets regexp
     *
     * @return string
     */
    public function getRegexp()
    {
        return $this->container['regexp'];
    }

    /**
     * Sets regexp
     *
     * @param string $regexp 
     *
     * @return $this
     */
    public function setRegexp($regexp)
    {
        if (!is_null($regexp) && (mb_strlen($regexp) > 255)) {
            throw new \InvalidArgumentException('invalid length for $regexp when calling MatchListPatternDetailed., must be smaller than or equal to 255.');
        }

        $this->container['regexp'] = $regexp;

        return $this;
    }

    /**
     * Gets numbervalue
     *
     * @return string
     */
    public function getNumbervalue()
    {
        return $this->container['numbervalue'];
    }

    /**
     * Sets numbervalue
     *
     * @param string $numbervalue 
     *
     * @return $this
     */
    public function setNumbervalue($numbervalue)
    {
        if (!is_null($numbervalue) && (mb_strlen($numbervalue) > 25)) {
            throw new \InvalidArgumentException('invalid length for $numbervalue when calling MatchListPatternDetailed., must be smaller than or equal to 25.');
        }

        $this->container['numbervalue'] = $numbervalue;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id 
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets match_list
     *
     * @return \Ivz\Client\Model\MatchList
     */
    public function getMatchList()
    {
        return $this->container['match_list'];
    }

    /**
     * Sets match_list
     *
     * @param \Ivz\Client\Model\MatchList $match_list match_list
     *
     * @return $this
     */
    public function setMatchList($match_list)
    {
        $this->container['match_list'] = $match_list;

        return $this;
    }

    /**
     * Gets number_country
     *
     * @return \Ivz\Client\Model\Country
     */
    public function getNumberCountry()
    {
        return $this->container['number_country'];
    }

    /**
     * Sets number_country
     *
     * @param \Ivz\Client\Model\Country $number_country number_country
     *
     * @return $this
     */
    public function setNumberCountry($number_country)
    {
        $this->container['number_country'] = $number_country;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
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
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


