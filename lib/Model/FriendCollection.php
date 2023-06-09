<?php
/**
 * FriendCollection
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
 * FriendCollection Class Doc Comment
 *
 * @category Class
 * @package  Ivz\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FriendCollection implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Friend-collection';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'domain' => 'int',
        'description' => 'string',
        'priority' => 'int',
        'direct_connectivity' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'name' => null,
        'domain' => null,
        'description' => null,
        'priority' => null,
        'direct_connectivity' => null
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
        'domain' => 'domain',
        'description' => 'description',
        'priority' => 'priority',
        'direct_connectivity' => 'directConnectivity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'domain' => 'setDomain',
        'description' => 'setDescription',
        'priority' => 'setPriority',
        'direct_connectivity' => 'setDirectConnectivity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'domain' => 'getDomain',
        'description' => 'getDescription',
        'priority' => 'getPriority',
        'direct_connectivity' => 'getDirectConnectivity'
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

    const DIRECT_CONNECTIVITY_YES = 'yes';
    const DIRECT_CONNECTIVITY_NO = 'no';
    const DIRECT_CONNECTIVITY_INTERVPBX = 'intervpbx';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDirectConnectivityAllowableValues()
    {
        return [
            self::DIRECT_CONNECTIVITY_YES,
            self::DIRECT_CONNECTIVITY_NO,
            self::DIRECT_CONNECTIVITY_INTERVPBX,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : '';
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['direct_connectivity'] = isset($data['direct_connectivity']) ? $data['direct_connectivity'] : 'yes';
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 65)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 65.";
        }

        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ((mb_strlen($this->container['description']) > 500)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 500.";
        }

        if ($this->container['priority'] === null) {
            $invalidProperties[] = "'priority' can't be null";
        }
        if ($this->container['direct_connectivity'] === null) {
            $invalidProperties[] = "'direct_connectivity' can't be null";
        }
        $allowedValues = $this->getDirectConnectivityAllowableValues();
        if (!is_null($this->container['direct_connectivity']) && !in_array($this->container['direct_connectivity'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'direct_connectivity', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ((mb_strlen($this->container['direct_connectivity']) > 20)) {
            $invalidProperties[] = "invalid value for 'direct_connectivity', the character length must be smaller than or equal to 20.";
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
        if ((mb_strlen($name) > 65)) {
            throw new \InvalidArgumentException('invalid length for $name when calling FriendCollection., must be smaller than or equal to 65.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets domain
     *
     * @return int
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param int $domain 
     *
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;

        return $this;
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
        if ((mb_strlen($description) > 500)) {
            throw new \InvalidArgumentException('invalid length for $description when calling FriendCollection., must be smaller than or equal to 500.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return int
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param int $priority 
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets direct_connectivity
     *
     * @return string
     */
    public function getDirectConnectivity()
    {
        return $this->container['direct_connectivity'];
    }

    /**
     * Sets direct_connectivity
     *
     * @param string $direct_connectivity 
     *
     * @return $this
     */
    public function setDirectConnectivity($direct_connectivity)
    {
        $allowedValues = $this->getDirectConnectivityAllowableValues();
        if (!in_array($direct_connectivity, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'direct_connectivity', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($direct_connectivity) > 20)) {
            throw new \InvalidArgumentException('invalid length for $direct_connectivity when calling FriendCollection., must be smaller than or equal to 20.');
        }

        $this->container['direct_connectivity'] = $direct_connectivity;

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


