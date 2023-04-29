<?php
/**
 * QueueCollection
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
 * QueueCollection Class Doc Comment
 *
 * @category Class
 * @package  Ivz\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class QueueCollection implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Queue-collection';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'weight' => 'int',
        'strategy' => 'string',
        'member_call_timeout' => 'int',
        'member_call_rest' => 'int',
        'max_wait_time' => 'int',
        'maxlen' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'name' => null,
        'weight' => null,
        'strategy' => null,
        'member_call_timeout' => null,
        'member_call_rest' => null,
        'max_wait_time' => null,
        'maxlen' => null
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
        'name' => 'name',
        'weight' => 'weight',
        'strategy' => 'strategy',
        'member_call_timeout' => 'memberCallTimeout',
        'member_call_rest' => 'memberCallRest',
        'max_wait_time' => 'maxWaitTime',
        'maxlen' => 'maxlen'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'weight' => 'setWeight',
        'strategy' => 'setStrategy',
        'member_call_timeout' => 'setMemberCallTimeout',
        'member_call_rest' => 'setMemberCallRest',
        'max_wait_time' => 'setMaxWaitTime',
        'maxlen' => 'setMaxlen'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'weight' => 'getWeight',
        'strategy' => 'getStrategy',
        'member_call_timeout' => 'getMemberCallTimeout',
        'member_call_rest' => 'getMemberCallRest',
        'max_wait_time' => 'getMaxWaitTime',
        'maxlen' => 'getMaxlen'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['strategy'] = isset($data['strategy']) ? $data['strategy'] : null;
        $this->container['member_call_timeout'] = isset($data['member_call_timeout']) ? $data['member_call_timeout'] : null;
        $this->container['member_call_rest'] = isset($data['member_call_rest']) ? $data['member_call_rest'] : null;
        $this->container['max_wait_time'] = isset($data['max_wait_time']) ? $data['max_wait_time'] : null;
        $this->container['maxlen'] = isset($data['maxlen']) ? $data['maxlen'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 128)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name 
     *
     * @return $this
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 128)) {
            throw new \InvalidArgumentException('invalid length for $name when calling QueueCollection., must be smaller than or equal to 128.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return int
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param int $weight 
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets strategy
     *
     * @return string
     */
    public function getStrategy()
    {
        return $this->container['strategy'];
    }

    /**
     * Sets strategy
     *
     * @param string $strategy 
     *
     * @return $this
     */
    public function setStrategy($strategy)
    {
        $this->container['strategy'] = $strategy;

        return $this;
    }

    /**
     * Gets member_call_timeout
     *
     * @return int
     */
    public function getMemberCallTimeout()
    {
        return $this->container['member_call_timeout'];
    }

    /**
     * Sets member_call_timeout
     *
     * @param int $member_call_timeout 
     *
     * @return $this
     */
    public function setMemberCallTimeout($member_call_timeout)
    {
        $this->container['member_call_timeout'] = $member_call_timeout;

        return $this;
    }

    /**
     * Gets member_call_rest
     *
     * @return int
     */
    public function getMemberCallRest()
    {
        return $this->container['member_call_rest'];
    }

    /**
     * Sets member_call_rest
     *
     * @param int $member_call_rest 
     *
     * @return $this
     */
    public function setMemberCallRest($member_call_rest)
    {
        $this->container['member_call_rest'] = $member_call_rest;

        return $this;
    }

    /**
     * Gets max_wait_time
     *
     * @return int
     */
    public function getMaxWaitTime()
    {
        return $this->container['max_wait_time'];
    }

    /**
     * Sets max_wait_time
     *
     * @param int $max_wait_time 
     *
     * @return $this
     */
    public function setMaxWaitTime($max_wait_time)
    {
        $this->container['max_wait_time'] = $max_wait_time;

        return $this;
    }

    /**
     * Gets maxlen
     *
     * @return int
     */
    public function getMaxlen()
    {
        return $this->container['maxlen'];
    }

    /**
     * Sets maxlen
     *
     * @param int $maxlen 
     *
     * @return $this
     */
    public function setMaxlen($maxlen)
    {
        $this->container['maxlen'] = $maxlen;

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


