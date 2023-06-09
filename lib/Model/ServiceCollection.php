<?php
/**
 * ServiceCollection
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
 * ServiceCollection Class Doc Comment
 *
 * @category Class
 * @package  Ivz\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ServiceCollection implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Service-collection';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'iden' => 'string',
        'default_code' => 'string',
        'extra_args' => 'bool',
        'name' => 'string',
        'id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'iden' => null,
        'default_code' => null,
        'extra_args' => null,
        'name' => null,
        'id' => null
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
        'iden' => 'iden',
        'default_code' => 'defaultCode',
        'extra_args' => 'extraArgs',
        'name' => 'name',
        'id' => 'id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'iden' => 'setIden',
        'default_code' => 'setDefaultCode',
        'extra_args' => 'setExtraArgs',
        'name' => 'setName',
        'id' => 'setId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'iden' => 'getIden',
        'default_code' => 'getDefaultCode',
        'extra_args' => 'getExtraArgs',
        'name' => 'getName',
        'id' => 'getId'
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
        $this->container['iden'] = isset($data['iden']) ? $data['iden'] : '';
        $this->container['default_code'] = isset($data['default_code']) ? $data['default_code'] : null;
        $this->container['extra_args'] = isset($data['extra_args']) ? $data['extra_args'] : false;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['iden'] === null) {
            $invalidProperties[] = "'iden' can't be null";
        }
        if ((mb_strlen($this->container['iden']) > 50)) {
            $invalidProperties[] = "invalid value for 'iden', the character length must be smaller than or equal to 50.";
        }

        if ($this->container['default_code'] === null) {
            $invalidProperties[] = "'default_code' can't be null";
        }
        if ((mb_strlen($this->container['default_code']) > 3)) {
            $invalidProperties[] = "invalid value for 'default_code', the character length must be smaller than or equal to 3.";
        }

        if ($this->container['extra_args'] === null) {
            $invalidProperties[] = "'extra_args' can't be null";
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
     * Gets iden
     *
     * @return string
     */
    public function getIden()
    {
        return $this->container['iden'];
    }

    /**
     * Sets iden
     *
     * @param string $iden 
     *
     * @return $this
     */
    public function setIden($iden)
    {
        if ((mb_strlen($iden) > 50)) {
            throw new \InvalidArgumentException('invalid length for $iden when calling ServiceCollection., must be smaller than or equal to 50.');
        }

        $this->container['iden'] = $iden;

        return $this;
    }

    /**
     * Gets default_code
     *
     * @return string
     */
    public function getDefaultCode()
    {
        return $this->container['default_code'];
    }

    /**
     * Sets default_code
     *
     * @param string $default_code 
     *
     * @return $this
     */
    public function setDefaultCode($default_code)
    {
        if ((mb_strlen($default_code) > 3)) {
            throw new \InvalidArgumentException('invalid length for $default_code when calling ServiceCollection., must be smaller than or equal to 3.');
        }

        $this->container['default_code'] = $default_code;

        return $this;
    }

    /**
     * Gets extra_args
     *
     * @return bool
     */
    public function getExtraArgs()
    {
        return $this->container['extra_args'];
    }

    /**
     * Sets extra_args
     *
     * @param bool $extra_args 
     *
     * @return $this
     */
    public function setExtraArgs($extra_args)
    {
        $this->container['extra_args'] = $extra_args;

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
        $this->container['name'] = $name;

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


