<?php
/**
 * CompanyDetailed
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
 * CompanyDetailed Class Doc Comment
 *
 * @category Class
 * @package  Ivz\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CompanyDetailed implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Company-detailed';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'name' => 'string',
        'domain_users' => 'string',
        'nif' => 'string',
        'on_demand_record_code' => 'string',
        'balance' => 'float',
        'id' => 'int',
        'language' => '\Ivz\Client\Model\Language',
        'default_timezone' => '\Ivz\Client\Model\Timezone',
        'country' => '\Ivz\Client\Model\Country',
        'transformation_rule_set' => '\Ivz\Client\Model\TransformationRuleSet',
        'outgoing_ddi' => '\Ivz\Client\Model\Ddi',
        'outgoing_ddi_rule' => '\Ivz\Client\Model\OutgoingDdiRule',
        'domain_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'name' => null,
        'domain_users' => null,
        'nif' => null,
        'on_demand_record_code' => null,
        'balance' => 'float',
        'id' => null,
        'language' => null,
        'default_timezone' => null,
        'country' => null,
        'transformation_rule_set' => null,
        'outgoing_ddi' => null,
        'outgoing_ddi_rule' => null,
        'domain_name' => null
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
        'type' => 'type',
        'name' => 'name',
        'domain_users' => 'domainUsers',
        'nif' => 'nif',
        'on_demand_record_code' => 'onDemandRecordCode',
        'balance' => 'balance',
        'id' => 'id',
        'language' => 'language',
        'default_timezone' => 'defaultTimezone',
        'country' => 'country',
        'transformation_rule_set' => 'transformationRuleSet',
        'outgoing_ddi' => 'outgoingDdi',
        'outgoing_ddi_rule' => 'outgoingDdiRule',
        'domain_name' => 'domainName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'name' => 'setName',
        'domain_users' => 'setDomainUsers',
        'nif' => 'setNif',
        'on_demand_record_code' => 'setOnDemandRecordCode',
        'balance' => 'setBalance',
        'id' => 'setId',
        'language' => 'setLanguage',
        'default_timezone' => 'setDefaultTimezone',
        'country' => 'setCountry',
        'transformation_rule_set' => 'setTransformationRuleSet',
        'outgoing_ddi' => 'setOutgoingDdi',
        'outgoing_ddi_rule' => 'setOutgoingDdiRule',
        'domain_name' => 'setDomainName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'name' => 'getName',
        'domain_users' => 'getDomainUsers',
        'nif' => 'getNif',
        'on_demand_record_code' => 'getOnDemandRecordCode',
        'balance' => 'getBalance',
        'id' => 'getId',
        'language' => 'getLanguage',
        'default_timezone' => 'getDefaultTimezone',
        'country' => 'getCountry',
        'transformation_rule_set' => 'getTransformationRuleSet',
        'outgoing_ddi' => 'getOutgoingDdi',
        'outgoing_ddi_rule' => 'getOutgoingDdiRule',
        'domain_name' => 'getDomainName'
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

    const TYPE_VPBX = 'vpbx';
    const TYPE_RETAIL = 'retail';
    const TYPE_WHOLESALE = 'wholesale';
    const TYPE_RESIDENTIAL = 'residential';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_VPBX,
            self::TYPE_RETAIL,
            self::TYPE_WHOLESALE,
            self::TYPE_RESIDENTIAL,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : 'vpbx';
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['domain_users'] = isset($data['domain_users']) ? $data['domain_users'] : null;
        $this->container['nif'] = isset($data['nif']) ? $data['nif'] : null;
        $this->container['on_demand_record_code'] = isset($data['on_demand_record_code']) ? $data['on_demand_record_code'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : 0.0;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['default_timezone'] = isset($data['default_timezone']) ? $data['default_timezone'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['transformation_rule_set'] = isset($data['transformation_rule_set']) ? $data['transformation_rule_set'] : null;
        $this->container['outgoing_ddi'] = isset($data['outgoing_ddi']) ? $data['outgoing_ddi'] : null;
        $this->container['outgoing_ddi_rule'] = isset($data['outgoing_ddi_rule']) ? $data['outgoing_ddi_rule'] : null;
        $this->container['domain_name'] = isset($data['domain_name']) ? $data['domain_name'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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

        if ((mb_strlen($this->container['type']) > 25)) {
            $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 80)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 80.";
        }

        if (!is_null($this->container['domain_users']) && (mb_strlen($this->container['domain_users']) > 190)) {
            $invalidProperties[] = "invalid value for 'domain_users', the character length must be smaller than or equal to 190.";
        }

        if (!is_null($this->container['nif']) && (mb_strlen($this->container['nif']) > 25)) {
            $invalidProperties[] = "invalid value for 'nif', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['on_demand_record_code']) && (mb_strlen($this->container['on_demand_record_code']) > 3)) {
            $invalidProperties[] = "invalid value for 'on_demand_record_code', the character length must be smaller than or equal to 3.";
        }

        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
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
        if ((mb_strlen($type) > 25)) {
            throw new \InvalidArgumentException('invalid length for $type when calling CompanyDetailed., must be smaller than or equal to 25.');
        }

        $this->container['type'] = $type;

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
        if (!is_null($name) && (mb_strlen($name) > 80)) {
            throw new \InvalidArgumentException('invalid length for $name when calling CompanyDetailed., must be smaller than or equal to 80.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets domain_users
     *
     * @return string
     */
    public function getDomainUsers()
    {
        return $this->container['domain_users'];
    }

    /**
     * Sets domain_users
     *
     * @param string $domain_users 
     *
     * @return $this
     */
    public function setDomainUsers($domain_users)
    {
        if (!is_null($domain_users) && (mb_strlen($domain_users) > 190)) {
            throw new \InvalidArgumentException('invalid length for $domain_users when calling CompanyDetailed., must be smaller than or equal to 190.');
        }

        $this->container['domain_users'] = $domain_users;

        return $this;
    }

    /**
     * Gets nif
     *
     * @return string
     */
    public function getNif()
    {
        return $this->container['nif'];
    }

    /**
     * Sets nif
     *
     * @param string $nif 
     *
     * @return $this
     */
    public function setNif($nif)
    {
        if (!is_null($nif) && (mb_strlen($nif) > 25)) {
            throw new \InvalidArgumentException('invalid length for $nif when calling CompanyDetailed., must be smaller than or equal to 25.');
        }

        $this->container['nif'] = $nif;

        return $this;
    }

    /**
     * Gets on_demand_record_code
     *
     * @return string
     */
    public function getOnDemandRecordCode()
    {
        return $this->container['on_demand_record_code'];
    }

    /**
     * Sets on_demand_record_code
     *
     * @param string $on_demand_record_code 
     *
     * @return $this
     */
    public function setOnDemandRecordCode($on_demand_record_code)
    {
        if (!is_null($on_demand_record_code) && (mb_strlen($on_demand_record_code) > 3)) {
            throw new \InvalidArgumentException('invalid length for $on_demand_record_code when calling CompanyDetailed., must be smaller than or equal to 3.');
        }

        $this->container['on_demand_record_code'] = $on_demand_record_code;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return float
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param float $balance 
     *
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

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
     * Gets language
     *
     * @return \Ivz\Client\Model\Language
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param \Ivz\Client\Model\Language $language language
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets default_timezone
     *
     * @return \Ivz\Client\Model\Timezone
     */
    public function getDefaultTimezone()
    {
        return $this->container['default_timezone'];
    }

    /**
     * Sets default_timezone
     *
     * @param \Ivz\Client\Model\Timezone $default_timezone default_timezone
     *
     * @return $this
     */
    public function setDefaultTimezone($default_timezone)
    {
        $this->container['default_timezone'] = $default_timezone;

        return $this;
    }

    /**
     * Gets country
     *
     * @return \Ivz\Client\Model\Country
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param \Ivz\Client\Model\Country $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets transformation_rule_set
     *
     * @return \Ivz\Client\Model\TransformationRuleSet
     */
    public function getTransformationRuleSet()
    {
        return $this->container['transformation_rule_set'];
    }

    /**
     * Sets transformation_rule_set
     *
     * @param \Ivz\Client\Model\TransformationRuleSet $transformation_rule_set transformation_rule_set
     *
     * @return $this
     */
    public function setTransformationRuleSet($transformation_rule_set)
    {
        $this->container['transformation_rule_set'] = $transformation_rule_set;

        return $this;
    }

    /**
     * Gets outgoing_ddi
     *
     * @return \Ivz\Client\Model\Ddi
     */
    public function getOutgoingDdi()
    {
        return $this->container['outgoing_ddi'];
    }

    /**
     * Sets outgoing_ddi
     *
     * @param \Ivz\Client\Model\Ddi $outgoing_ddi outgoing_ddi
     *
     * @return $this
     */
    public function setOutgoingDdi($outgoing_ddi)
    {
        $this->container['outgoing_ddi'] = $outgoing_ddi;

        return $this;
    }

    /**
     * Gets outgoing_ddi_rule
     *
     * @return \Ivz\Client\Model\OutgoingDdiRule
     */
    public function getOutgoingDdiRule()
    {
        return $this->container['outgoing_ddi_rule'];
    }

    /**
     * Sets outgoing_ddi_rule
     *
     * @param \Ivz\Client\Model\OutgoingDdiRule $outgoing_ddi_rule outgoing_ddi_rule
     *
     * @return $this
     */
    public function setOutgoingDdiRule($outgoing_ddi_rule)
    {
        $this->container['outgoing_ddi_rule'] = $outgoing_ddi_rule;

        return $this;
    }

    /**
     * Gets domain_name
     *
     * @return string
     */
    public function getDomainName()
    {
        return $this->container['domain_name'];
    }

    /**
     * Sets domain_name
     *
     * @param string $domain_name Registration domain
     *
     * @return $this
     */
    public function setDomainName($domain_name)
    {
        $this->container['domain_name'] = $domain_name;

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


