<?php
/**
 * UsersCdrCollection
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
 * UsersCdrCollection Class Doc Comment
 *
 * @category Class
 * @package  Ivz\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UsersCdrCollection implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UsersCdr-collection';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'start_time' => '\DateTime',
        'end_time' => '\DateTime',
        'duration' => 'float',
        'direction' => 'string',
        'caller' => 'string',
        'callee' => 'string',
        'user' => 'int',
        'friend' => 'int',
        'residential_device' => 'int',
        'retail_account' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'start_time' => 'date-time',
        'end_time' => 'date-time',
        'duration' => 'float',
        'direction' => null,
        'caller' => null,
        'callee' => null,
        'user' => null,
        'friend' => null,
        'residential_device' => null,
        'retail_account' => null
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
        'id' => 'id',
        'start_time' => 'startTime',
        'end_time' => 'endTime',
        'duration' => 'duration',
        'direction' => 'direction',
        'caller' => 'caller',
        'callee' => 'callee',
        'user' => 'user',
        'friend' => 'friend',
        'residential_device' => 'residentialDevice',
        'retail_account' => 'retailAccount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'start_time' => 'setStartTime',
        'end_time' => 'setEndTime',
        'duration' => 'setDuration',
        'direction' => 'setDirection',
        'caller' => 'setCaller',
        'callee' => 'setCallee',
        'user' => 'setUser',
        'friend' => 'setFriend',
        'residential_device' => 'setResidentialDevice',
        'retail_account' => 'setRetailAccount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'start_time' => 'getStartTime',
        'end_time' => 'getEndTime',
        'duration' => 'getDuration',
        'direction' => 'getDirection',
        'caller' => 'getCaller',
        'callee' => 'getCallee',
        'user' => 'getUser',
        'friend' => 'getFriend',
        'residential_device' => 'getResidentialDevice',
        'retail_account' => 'getRetailAccount'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
        $this->container['end_time'] = isset($data['end_time']) ? $data['end_time'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : 0.0;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['caller'] = isset($data['caller']) ? $data['caller'] : null;
        $this->container['callee'] = isset($data['callee']) ? $data['callee'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['friend'] = isset($data['friend']) ? $data['friend'] : null;
        $this->container['residential_device'] = isset($data['residential_device']) ? $data['residential_device'] : null;
        $this->container['retail_account'] = isset($data['retail_account']) ? $data['retail_account'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['start_time'] === null) {
            $invalidProperties[] = "'start_time' can't be null";
        }
        if ($this->container['end_time'] === null) {
            $invalidProperties[] = "'end_time' can't be null";
        }
        if ($this->container['duration'] === null) {
            $invalidProperties[] = "'duration' can't be null";
        }
        if (!is_null($this->container['caller']) && (mb_strlen($this->container['caller']) > 128)) {
            $invalidProperties[] = "invalid value for 'caller', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['callee']) && (mb_strlen($this->container['callee']) > 128)) {
            $invalidProperties[] = "invalid value for 'callee', the character length must be smaller than or equal to 128.";
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
     * Gets start_time
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     *
     * @param \DateTime $start_time 
     *
     * @return $this
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets end_time
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time
     *
     * @param \DateTime $end_time 
     *
     * @return $this
     */
    public function setEndTime($end_time)
    {
        $this->container['end_time'] = $end_time;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return float
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param float $duration 
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets direction
     *
     * @return string
     */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
     * Sets direction
     *
     * @param string $direction 
     *
     * @return $this
     */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;

        return $this;
    }

    /**
     * Gets caller
     *
     * @return string
     */
    public function getCaller()
    {
        return $this->container['caller'];
    }

    /**
     * Sets caller
     *
     * @param string $caller 
     *
     * @return $this
     */
    public function setCaller($caller)
    {
        if (!is_null($caller) && (mb_strlen($caller) > 128)) {
            throw new \InvalidArgumentException('invalid length for $caller when calling UsersCdrCollection., must be smaller than or equal to 128.');
        }

        $this->container['caller'] = $caller;

        return $this;
    }

    /**
     * Gets callee
     *
     * @return string
     */
    public function getCallee()
    {
        return $this->container['callee'];
    }

    /**
     * Sets callee
     *
     * @param string $callee 
     *
     * @return $this
     */
    public function setCallee($callee)
    {
        if (!is_null($callee) && (mb_strlen($callee) > 128)) {
            throw new \InvalidArgumentException('invalid length for $callee when calling UsersCdrCollection., must be smaller than or equal to 128.');
        }

        $this->container['callee'] = $callee;

        return $this;
    }

    /**
     * Gets user
     *
     * @return int
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param int $user 
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets friend
     *
     * @return int
     */
    public function getFriend()
    {
        return $this->container['friend'];
    }

    /**
     * Sets friend
     *
     * @param int $friend 
     *
     * @return $this
     */
    public function setFriend($friend)
    {
        $this->container['friend'] = $friend;

        return $this;
    }

    /**
     * Gets residential_device
     *
     * @return int
     */
    public function getResidentialDevice()
    {
        return $this->container['residential_device'];
    }

    /**
     * Sets residential_device
     *
     * @param int $residential_device 
     *
     * @return $this
     */
    public function setResidentialDevice($residential_device)
    {
        $this->container['residential_device'] = $residential_device;

        return $this;
    }

    /**
     * Gets retail_account
     *
     * @return int
     */
    public function getRetailAccount()
    {
        return $this->container['retail_account'];
    }

    /**
     * Sets retail_account
     *
     * @param int $retail_account 
     *
     * @return $this
     */
    public function setRetailAccount($retail_account)
    {
        $this->container['retail_account'] = $retail_account;

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


