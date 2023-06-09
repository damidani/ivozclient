<?php
/**
 * ExternalCallFilter
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
 * ExternalCallFilter Class Doc Comment
 *
 * @category Class
 * @package  Ivz\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExternalCallFilter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ExternalCallFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'holiday_target_type' => 'string',
        'holiday_number_value' => 'string',
        'out_of_schedule_target_type' => 'string',
        'out_of_schedule_number_value' => 'string',
        'id' => 'int',
        'welcome_locution' => 'int',
        'holiday_locution' => 'int',
        'out_of_schedule_locution' => 'int',
        'holiday_extension' => 'int',
        'out_of_schedule_extension' => 'int',
        'holiday_voice_mail_user' => 'int',
        'out_of_schedule_voice_mail_user' => 'int',
        'holiday_number_country' => 'int',
        'out_of_schedule_number_country' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'holiday_target_type' => null,
        'holiday_number_value' => null,
        'out_of_schedule_target_type' => null,
        'out_of_schedule_number_value' => null,
        'id' => null,
        'welcome_locution' => null,
        'holiday_locution' => null,
        'out_of_schedule_locution' => null,
        'holiday_extension' => null,
        'out_of_schedule_extension' => null,
        'holiday_voice_mail_user' => null,
        'out_of_schedule_voice_mail_user' => null,
        'holiday_number_country' => null,
        'out_of_schedule_number_country' => null
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
        'name' => 'name',
        'holiday_target_type' => 'holidayTargetType',
        'holiday_number_value' => 'holidayNumberValue',
        'out_of_schedule_target_type' => 'outOfScheduleTargetType',
        'out_of_schedule_number_value' => 'outOfScheduleNumberValue',
        'id' => 'id',
        'welcome_locution' => 'welcomeLocution',
        'holiday_locution' => 'holidayLocution',
        'out_of_schedule_locution' => 'outOfScheduleLocution',
        'holiday_extension' => 'holidayExtension',
        'out_of_schedule_extension' => 'outOfScheduleExtension',
        'holiday_voice_mail_user' => 'holidayVoiceMailUser',
        'out_of_schedule_voice_mail_user' => 'outOfScheduleVoiceMailUser',
        'holiday_number_country' => 'holidayNumberCountry',
        'out_of_schedule_number_country' => 'outOfScheduleNumberCountry'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'holiday_target_type' => 'setHolidayTargetType',
        'holiday_number_value' => 'setHolidayNumberValue',
        'out_of_schedule_target_type' => 'setOutOfScheduleTargetType',
        'out_of_schedule_number_value' => 'setOutOfScheduleNumberValue',
        'id' => 'setId',
        'welcome_locution' => 'setWelcomeLocution',
        'holiday_locution' => 'setHolidayLocution',
        'out_of_schedule_locution' => 'setOutOfScheduleLocution',
        'holiday_extension' => 'setHolidayExtension',
        'out_of_schedule_extension' => 'setOutOfScheduleExtension',
        'holiday_voice_mail_user' => 'setHolidayVoiceMailUser',
        'out_of_schedule_voice_mail_user' => 'setOutOfScheduleVoiceMailUser',
        'holiday_number_country' => 'setHolidayNumberCountry',
        'out_of_schedule_number_country' => 'setOutOfScheduleNumberCountry'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'holiday_target_type' => 'getHolidayTargetType',
        'holiday_number_value' => 'getHolidayNumberValue',
        'out_of_schedule_target_type' => 'getOutOfScheduleTargetType',
        'out_of_schedule_number_value' => 'getOutOfScheduleNumberValue',
        'id' => 'getId',
        'welcome_locution' => 'getWelcomeLocution',
        'holiday_locution' => 'getHolidayLocution',
        'out_of_schedule_locution' => 'getOutOfScheduleLocution',
        'holiday_extension' => 'getHolidayExtension',
        'out_of_schedule_extension' => 'getOutOfScheduleExtension',
        'holiday_voice_mail_user' => 'getHolidayVoiceMailUser',
        'out_of_schedule_voice_mail_user' => 'getOutOfScheduleVoiceMailUser',
        'holiday_number_country' => 'getHolidayNumberCountry',
        'out_of_schedule_number_country' => 'getOutOfScheduleNumberCountry'
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

    const HOLIDAY_TARGET_TYPE_NUMBER = 'number';
    const HOLIDAY_TARGET_TYPE_EXTENSION = 'extension';
    const HOLIDAY_TARGET_TYPE_VOICEMAIL = 'voicemail';
    const OUT_OF_SCHEDULE_TARGET_TYPE_NUMBER = 'number';
    const OUT_OF_SCHEDULE_TARGET_TYPE_EXTENSION = 'extension';
    const OUT_OF_SCHEDULE_TARGET_TYPE_VOICEMAIL = 'voicemail';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHolidayTargetTypeAllowableValues()
    {
        return [
            self::HOLIDAY_TARGET_TYPE_NUMBER,
            self::HOLIDAY_TARGET_TYPE_EXTENSION,
            self::HOLIDAY_TARGET_TYPE_VOICEMAIL,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOutOfScheduleTargetTypeAllowableValues()
    {
        return [
            self::OUT_OF_SCHEDULE_TARGET_TYPE_NUMBER,
            self::OUT_OF_SCHEDULE_TARGET_TYPE_EXTENSION,
            self::OUT_OF_SCHEDULE_TARGET_TYPE_VOICEMAIL,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['holiday_target_type'] = isset($data['holiday_target_type']) ? $data['holiday_target_type'] : null;
        $this->container['holiday_number_value'] = isset($data['holiday_number_value']) ? $data['holiday_number_value'] : null;
        $this->container['out_of_schedule_target_type'] = isset($data['out_of_schedule_target_type']) ? $data['out_of_schedule_target_type'] : null;
        $this->container['out_of_schedule_number_value'] = isset($data['out_of_schedule_number_value']) ? $data['out_of_schedule_number_value'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['welcome_locution'] = isset($data['welcome_locution']) ? $data['welcome_locution'] : null;
        $this->container['holiday_locution'] = isset($data['holiday_locution']) ? $data['holiday_locution'] : null;
        $this->container['out_of_schedule_locution'] = isset($data['out_of_schedule_locution']) ? $data['out_of_schedule_locution'] : null;
        $this->container['holiday_extension'] = isset($data['holiday_extension']) ? $data['holiday_extension'] : null;
        $this->container['out_of_schedule_extension'] = isset($data['out_of_schedule_extension']) ? $data['out_of_schedule_extension'] : null;
        $this->container['holiday_voice_mail_user'] = isset($data['holiday_voice_mail_user']) ? $data['holiday_voice_mail_user'] : null;
        $this->container['out_of_schedule_voice_mail_user'] = isset($data['out_of_schedule_voice_mail_user']) ? $data['out_of_schedule_voice_mail_user'] : null;
        $this->container['holiday_number_country'] = isset($data['holiday_number_country']) ? $data['holiday_number_country'] : null;
        $this->container['out_of_schedule_number_country'] = isset($data['out_of_schedule_number_country']) ? $data['out_of_schedule_number_country'] : null;
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
        if ((mb_strlen($this->container['name']) > 50)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 50.";
        }

        $allowedValues = $this->getHolidayTargetTypeAllowableValues();
        if (!is_null($this->container['holiday_target_type']) && !in_array($this->container['holiday_target_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'holiday_target_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['holiday_target_type']) && (mb_strlen($this->container['holiday_target_type']) > 25)) {
            $invalidProperties[] = "invalid value for 'holiday_target_type', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['holiday_number_value']) && (mb_strlen($this->container['holiday_number_value']) > 25)) {
            $invalidProperties[] = "invalid value for 'holiday_number_value', the character length must be smaller than or equal to 25.";
        }

        $allowedValues = $this->getOutOfScheduleTargetTypeAllowableValues();
        if (!is_null($this->container['out_of_schedule_target_type']) && !in_array($this->container['out_of_schedule_target_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'out_of_schedule_target_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['out_of_schedule_target_type']) && (mb_strlen($this->container['out_of_schedule_target_type']) > 25)) {
            $invalidProperties[] = "invalid value for 'out_of_schedule_target_type', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['out_of_schedule_number_value']) && (mb_strlen($this->container['out_of_schedule_number_value']) > 25)) {
            $invalidProperties[] = "invalid value for 'out_of_schedule_number_value', the character length must be smaller than or equal to 25.";
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
        if ((mb_strlen($name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ExternalCallFilter., must be smaller than or equal to 50.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets holiday_target_type
     *
     * @return string
     */
    public function getHolidayTargetType()
    {
        return $this->container['holiday_target_type'];
    }

    /**
     * Sets holiday_target_type
     *
     * @param string $holiday_target_type 
     *
     * @return $this
     */
    public function setHolidayTargetType($holiday_target_type)
    {
        $allowedValues = $this->getHolidayTargetTypeAllowableValues();
        if (!is_null($holiday_target_type) && !in_array($holiday_target_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'holiday_target_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        if (!is_null($holiday_target_type) && (mb_strlen($holiday_target_type) > 25)) {
            throw new \InvalidArgumentException('invalid length for $holiday_target_type when calling ExternalCallFilter., must be smaller than or equal to 25.');
        }

        $this->container['holiday_target_type'] = $holiday_target_type;

        return $this;
    }

    /**
     * Gets holiday_number_value
     *
     * @return string
     */
    public function getHolidayNumberValue()
    {
        return $this->container['holiday_number_value'];
    }

    /**
     * Sets holiday_number_value
     *
     * @param string $holiday_number_value 
     *
     * @return $this
     */
    public function setHolidayNumberValue($holiday_number_value)
    {
        if (!is_null($holiday_number_value) && (mb_strlen($holiday_number_value) > 25)) {
            throw new \InvalidArgumentException('invalid length for $holiday_number_value when calling ExternalCallFilter., must be smaller than or equal to 25.');
        }

        $this->container['holiday_number_value'] = $holiday_number_value;

        return $this;
    }

    /**
     * Gets out_of_schedule_target_type
     *
     * @return string
     */
    public function getOutOfScheduleTargetType()
    {
        return $this->container['out_of_schedule_target_type'];
    }

    /**
     * Sets out_of_schedule_target_type
     *
     * @param string $out_of_schedule_target_type 
     *
     * @return $this
     */
    public function setOutOfScheduleTargetType($out_of_schedule_target_type)
    {
        $allowedValues = $this->getOutOfScheduleTargetTypeAllowableValues();
        if (!is_null($out_of_schedule_target_type) && !in_array($out_of_schedule_target_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'out_of_schedule_target_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        if (!is_null($out_of_schedule_target_type) && (mb_strlen($out_of_schedule_target_type) > 25)) {
            throw new \InvalidArgumentException('invalid length for $out_of_schedule_target_type when calling ExternalCallFilter., must be smaller than or equal to 25.');
        }

        $this->container['out_of_schedule_target_type'] = $out_of_schedule_target_type;

        return $this;
    }

    /**
     * Gets out_of_schedule_number_value
     *
     * @return string
     */
    public function getOutOfScheduleNumberValue()
    {
        return $this->container['out_of_schedule_number_value'];
    }

    /**
     * Sets out_of_schedule_number_value
     *
     * @param string $out_of_schedule_number_value 
     *
     * @return $this
     */
    public function setOutOfScheduleNumberValue($out_of_schedule_number_value)
    {
        if (!is_null($out_of_schedule_number_value) && (mb_strlen($out_of_schedule_number_value) > 25)) {
            throw new \InvalidArgumentException('invalid length for $out_of_schedule_number_value when calling ExternalCallFilter., must be smaller than or equal to 25.');
        }

        $this->container['out_of_schedule_number_value'] = $out_of_schedule_number_value;

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
     * Gets welcome_locution
     *
     * @return int
     */
    public function getWelcomeLocution()
    {
        return $this->container['welcome_locution'];
    }

    /**
     * Sets welcome_locution
     *
     * @param int $welcome_locution 
     *
     * @return $this
     */
    public function setWelcomeLocution($welcome_locution)
    {
        $this->container['welcome_locution'] = $welcome_locution;

        return $this;
    }

    /**
     * Gets holiday_locution
     *
     * @return int
     */
    public function getHolidayLocution()
    {
        return $this->container['holiday_locution'];
    }

    /**
     * Sets holiday_locution
     *
     * @param int $holiday_locution 
     *
     * @return $this
     */
    public function setHolidayLocution($holiday_locution)
    {
        $this->container['holiday_locution'] = $holiday_locution;

        return $this;
    }

    /**
     * Gets out_of_schedule_locution
     *
     * @return int
     */
    public function getOutOfScheduleLocution()
    {
        return $this->container['out_of_schedule_locution'];
    }

    /**
     * Sets out_of_schedule_locution
     *
     * @param int $out_of_schedule_locution 
     *
     * @return $this
     */
    public function setOutOfScheduleLocution($out_of_schedule_locution)
    {
        $this->container['out_of_schedule_locution'] = $out_of_schedule_locution;

        return $this;
    }

    /**
     * Gets holiday_extension
     *
     * @return int
     */
    public function getHolidayExtension()
    {
        return $this->container['holiday_extension'];
    }

    /**
     * Sets holiday_extension
     *
     * @param int $holiday_extension 
     *
     * @return $this
     */
    public function setHolidayExtension($holiday_extension)
    {
        $this->container['holiday_extension'] = $holiday_extension;

        return $this;
    }

    /**
     * Gets out_of_schedule_extension
     *
     * @return int
     */
    public function getOutOfScheduleExtension()
    {
        return $this->container['out_of_schedule_extension'];
    }

    /**
     * Sets out_of_schedule_extension
     *
     * @param int $out_of_schedule_extension 
     *
     * @return $this
     */
    public function setOutOfScheduleExtension($out_of_schedule_extension)
    {
        $this->container['out_of_schedule_extension'] = $out_of_schedule_extension;

        return $this;
    }

    /**
     * Gets holiday_voice_mail_user
     *
     * @return int
     */
    public function getHolidayVoiceMailUser()
    {
        return $this->container['holiday_voice_mail_user'];
    }

    /**
     * Sets holiday_voice_mail_user
     *
     * @param int $holiday_voice_mail_user 
     *
     * @return $this
     */
    public function setHolidayVoiceMailUser($holiday_voice_mail_user)
    {
        $this->container['holiday_voice_mail_user'] = $holiday_voice_mail_user;

        return $this;
    }

    /**
     * Gets out_of_schedule_voice_mail_user
     *
     * @return int
     */
    public function getOutOfScheduleVoiceMailUser()
    {
        return $this->container['out_of_schedule_voice_mail_user'];
    }

    /**
     * Sets out_of_schedule_voice_mail_user
     *
     * @param int $out_of_schedule_voice_mail_user 
     *
     * @return $this
     */
    public function setOutOfScheduleVoiceMailUser($out_of_schedule_voice_mail_user)
    {
        $this->container['out_of_schedule_voice_mail_user'] = $out_of_schedule_voice_mail_user;

        return $this;
    }

    /**
     * Gets holiday_number_country
     *
     * @return int
     */
    public function getHolidayNumberCountry()
    {
        return $this->container['holiday_number_country'];
    }

    /**
     * Sets holiday_number_country
     *
     * @param int $holiday_number_country 
     *
     * @return $this
     */
    public function setHolidayNumberCountry($holiday_number_country)
    {
        $this->container['holiday_number_country'] = $holiday_number_country;

        return $this;
    }

    /**
     * Gets out_of_schedule_number_country
     *
     * @return int
     */
    public function getOutOfScheduleNumberCountry()
    {
        return $this->container['out_of_schedule_number_country'];
    }

    /**
     * Sets out_of_schedule_number_country
     *
     * @param int $out_of_schedule_number_country 
     *
     * @return $this
     */
    public function setOutOfScheduleNumberCountry($out_of_schedule_number_country)
    {
        $this->container['out_of_schedule_number_country'] = $out_of_schedule_number_country;

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


