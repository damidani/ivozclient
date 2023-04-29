<?php
/**
 * QueueDetailed
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
 * QueueDetailed Class Doc Comment
 *
 * @category Class
 * @package  Ivz\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class QueueDetailed implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Queue-detailed';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'max_wait_time' => 'int',
        'timeout_target_type' => 'string',
        'timeout_number_value' => 'string',
        'maxlen' => 'int',
        'full_target_type' => 'string',
        'full_number_value' => 'string',
        'periodic_announce_frequency' => 'int',
        'member_call_rest' => 'int',
        'member_call_timeout' => 'int',
        'strategy' => 'string',
        'weight' => 'int',
        'prevent_missed_calls' => 'int',
        'id' => 'int',
        'periodic_announce_locution' => '\Ivz\Client\Model\Locution',
        'timeout_locution' => '\Ivz\Client\Model\Locution',
        'timeout_extension' => '\Ivz\Client\Model\Extension',
        'timeout_voice_mail_user' => '\Ivz\Client\Model\User',
        'full_locution' => '\Ivz\Client\Model\Locution',
        'full_extension' => '\Ivz\Client\Model\Extension',
        'full_voice_mail_user' => '\Ivz\Client\Model\User',
        'timeout_number_country' => '\Ivz\Client\Model\Country',
        'full_number_country' => '\Ivz\Client\Model\Country'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'max_wait_time' => null,
        'timeout_target_type' => null,
        'timeout_number_value' => null,
        'maxlen' => null,
        'full_target_type' => null,
        'full_number_value' => null,
        'periodic_announce_frequency' => null,
        'member_call_rest' => null,
        'member_call_timeout' => null,
        'strategy' => null,
        'weight' => null,
        'prevent_missed_calls' => null,
        'id' => null,
        'periodic_announce_locution' => null,
        'timeout_locution' => null,
        'timeout_extension' => null,
        'timeout_voice_mail_user' => null,
        'full_locution' => null,
        'full_extension' => null,
        'full_voice_mail_user' => null,
        'timeout_number_country' => null,
        'full_number_country' => null
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
        'max_wait_time' => 'maxWaitTime',
        'timeout_target_type' => 'timeoutTargetType',
        'timeout_number_value' => 'timeoutNumberValue',
        'maxlen' => 'maxlen',
        'full_target_type' => 'fullTargetType',
        'full_number_value' => 'fullNumberValue',
        'periodic_announce_frequency' => 'periodicAnnounceFrequency',
        'member_call_rest' => 'memberCallRest',
        'member_call_timeout' => 'memberCallTimeout',
        'strategy' => 'strategy',
        'weight' => 'weight',
        'prevent_missed_calls' => 'preventMissedCalls',
        'id' => 'id',
        'periodic_announce_locution' => 'periodicAnnounceLocution',
        'timeout_locution' => 'timeoutLocution',
        'timeout_extension' => 'timeoutExtension',
        'timeout_voice_mail_user' => 'timeoutVoiceMailUser',
        'full_locution' => 'fullLocution',
        'full_extension' => 'fullExtension',
        'full_voice_mail_user' => 'fullVoiceMailUser',
        'timeout_number_country' => 'timeoutNumberCountry',
        'full_number_country' => 'fullNumberCountry'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'max_wait_time' => 'setMaxWaitTime',
        'timeout_target_type' => 'setTimeoutTargetType',
        'timeout_number_value' => 'setTimeoutNumberValue',
        'maxlen' => 'setMaxlen',
        'full_target_type' => 'setFullTargetType',
        'full_number_value' => 'setFullNumberValue',
        'periodic_announce_frequency' => 'setPeriodicAnnounceFrequency',
        'member_call_rest' => 'setMemberCallRest',
        'member_call_timeout' => 'setMemberCallTimeout',
        'strategy' => 'setStrategy',
        'weight' => 'setWeight',
        'prevent_missed_calls' => 'setPreventMissedCalls',
        'id' => 'setId',
        'periodic_announce_locution' => 'setPeriodicAnnounceLocution',
        'timeout_locution' => 'setTimeoutLocution',
        'timeout_extension' => 'setTimeoutExtension',
        'timeout_voice_mail_user' => 'setTimeoutVoiceMailUser',
        'full_locution' => 'setFullLocution',
        'full_extension' => 'setFullExtension',
        'full_voice_mail_user' => 'setFullVoiceMailUser',
        'timeout_number_country' => 'setTimeoutNumberCountry',
        'full_number_country' => 'setFullNumberCountry'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'max_wait_time' => 'getMaxWaitTime',
        'timeout_target_type' => 'getTimeoutTargetType',
        'timeout_number_value' => 'getTimeoutNumberValue',
        'maxlen' => 'getMaxlen',
        'full_target_type' => 'getFullTargetType',
        'full_number_value' => 'getFullNumberValue',
        'periodic_announce_frequency' => 'getPeriodicAnnounceFrequency',
        'member_call_rest' => 'getMemberCallRest',
        'member_call_timeout' => 'getMemberCallTimeout',
        'strategy' => 'getStrategy',
        'weight' => 'getWeight',
        'prevent_missed_calls' => 'getPreventMissedCalls',
        'id' => 'getId',
        'periodic_announce_locution' => 'getPeriodicAnnounceLocution',
        'timeout_locution' => 'getTimeoutLocution',
        'timeout_extension' => 'getTimeoutExtension',
        'timeout_voice_mail_user' => 'getTimeoutVoiceMailUser',
        'full_locution' => 'getFullLocution',
        'full_extension' => 'getFullExtension',
        'full_voice_mail_user' => 'getFullVoiceMailUser',
        'timeout_number_country' => 'getTimeoutNumberCountry',
        'full_number_country' => 'getFullNumberCountry'
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

    const TIMEOUT_TARGET_TYPE_NUMBER = 'number';
    const TIMEOUT_TARGET_TYPE_EXTENSION = 'extension';
    const TIMEOUT_TARGET_TYPE_VOICEMAIL = 'voicemail';
    const FULL_TARGET_TYPE_NUMBER = 'number';
    const FULL_TARGET_TYPE_EXTENSION = 'extension';
    const FULL_TARGET_TYPE_VOICEMAIL = 'voicemail';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTimeoutTargetTypeAllowableValues()
    {
        return [
            self::TIMEOUT_TARGET_TYPE_NUMBER,
            self::TIMEOUT_TARGET_TYPE_EXTENSION,
            self::TIMEOUT_TARGET_TYPE_VOICEMAIL,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFullTargetTypeAllowableValues()
    {
        return [
            self::FULL_TARGET_TYPE_NUMBER,
            self::FULL_TARGET_TYPE_EXTENSION,
            self::FULL_TARGET_TYPE_VOICEMAIL,
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
        $this->container['max_wait_time'] = isset($data['max_wait_time']) ? $data['max_wait_time'] : null;
        $this->container['timeout_target_type'] = isset($data['timeout_target_type']) ? $data['timeout_target_type'] : null;
        $this->container['timeout_number_value'] = isset($data['timeout_number_value']) ? $data['timeout_number_value'] : null;
        $this->container['maxlen'] = isset($data['maxlen']) ? $data['maxlen'] : null;
        $this->container['full_target_type'] = isset($data['full_target_type']) ? $data['full_target_type'] : null;
        $this->container['full_number_value'] = isset($data['full_number_value']) ? $data['full_number_value'] : null;
        $this->container['periodic_announce_frequency'] = isset($data['periodic_announce_frequency']) ? $data['periodic_announce_frequency'] : null;
        $this->container['member_call_rest'] = isset($data['member_call_rest']) ? $data['member_call_rest'] : null;
        $this->container['member_call_timeout'] = isset($data['member_call_timeout']) ? $data['member_call_timeout'] : null;
        $this->container['strategy'] = isset($data['strategy']) ? $data['strategy'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['prevent_missed_calls'] = isset($data['prevent_missed_calls']) ? $data['prevent_missed_calls'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['periodic_announce_locution'] = isset($data['periodic_announce_locution']) ? $data['periodic_announce_locution'] : null;
        $this->container['timeout_locution'] = isset($data['timeout_locution']) ? $data['timeout_locution'] : null;
        $this->container['timeout_extension'] = isset($data['timeout_extension']) ? $data['timeout_extension'] : null;
        $this->container['timeout_voice_mail_user'] = isset($data['timeout_voice_mail_user']) ? $data['timeout_voice_mail_user'] : null;
        $this->container['full_locution'] = isset($data['full_locution']) ? $data['full_locution'] : null;
        $this->container['full_extension'] = isset($data['full_extension']) ? $data['full_extension'] : null;
        $this->container['full_voice_mail_user'] = isset($data['full_voice_mail_user']) ? $data['full_voice_mail_user'] : null;
        $this->container['timeout_number_country'] = isset($data['timeout_number_country']) ? $data['timeout_number_country'] : null;
        $this->container['full_number_country'] = isset($data['full_number_country']) ? $data['full_number_country'] : null;
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

        $allowedValues = $this->getTimeoutTargetTypeAllowableValues();
        if (!is_null($this->container['timeout_target_type']) && !in_array($this->container['timeout_target_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'timeout_target_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['timeout_target_type']) && (mb_strlen($this->container['timeout_target_type']) > 25)) {
            $invalidProperties[] = "invalid value for 'timeout_target_type', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['timeout_number_value']) && (mb_strlen($this->container['timeout_number_value']) > 25)) {
            $invalidProperties[] = "invalid value for 'timeout_number_value', the character length must be smaller than or equal to 25.";
        }

        $allowedValues = $this->getFullTargetTypeAllowableValues();
        if (!is_null($this->container['full_target_type']) && !in_array($this->container['full_target_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'full_target_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['full_target_type']) && (mb_strlen($this->container['full_target_type']) > 25)) {
            $invalidProperties[] = "invalid value for 'full_target_type', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['full_number_value']) && (mb_strlen($this->container['full_number_value']) > 25)) {
            $invalidProperties[] = "invalid value for 'full_number_value', the character length must be smaller than or equal to 25.";
        }

        if ($this->container['prevent_missed_calls'] === null) {
            $invalidProperties[] = "'prevent_missed_calls' can't be null";
        }
        if (($this->container['prevent_missed_calls'] < 0)) {
            $invalidProperties[] = "invalid value for 'prevent_missed_calls', must be bigger than or equal to 0.";
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
        if (!is_null($name) && (mb_strlen($name) > 128)) {
            throw new \InvalidArgumentException('invalid length for $name when calling QueueDetailed., must be smaller than or equal to 128.');
        }

        $this->container['name'] = $name;

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
     * Gets timeout_target_type
     *
     * @return string
     */
    public function getTimeoutTargetType()
    {
        return $this->container['timeout_target_type'];
    }

    /**
     * Sets timeout_target_type
     *
     * @param string $timeout_target_type 
     *
     * @return $this
     */
    public function setTimeoutTargetType($timeout_target_type)
    {
        $allowedValues = $this->getTimeoutTargetTypeAllowableValues();
        if (!is_null($timeout_target_type) && !in_array($timeout_target_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'timeout_target_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        if (!is_null($timeout_target_type) && (mb_strlen($timeout_target_type) > 25)) {
            throw new \InvalidArgumentException('invalid length for $timeout_target_type when calling QueueDetailed., must be smaller than or equal to 25.');
        }

        $this->container['timeout_target_type'] = $timeout_target_type;

        return $this;
    }

    /**
     * Gets timeout_number_value
     *
     * @return string
     */
    public function getTimeoutNumberValue()
    {
        return $this->container['timeout_number_value'];
    }

    /**
     * Sets timeout_number_value
     *
     * @param string $timeout_number_value 
     *
     * @return $this
     */
    public function setTimeoutNumberValue($timeout_number_value)
    {
        if (!is_null($timeout_number_value) && (mb_strlen($timeout_number_value) > 25)) {
            throw new \InvalidArgumentException('invalid length for $timeout_number_value when calling QueueDetailed., must be smaller than or equal to 25.');
        }

        $this->container['timeout_number_value'] = $timeout_number_value;

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
     * Gets full_target_type
     *
     * @return string
     */
    public function getFullTargetType()
    {
        return $this->container['full_target_type'];
    }

    /**
     * Sets full_target_type
     *
     * @param string $full_target_type 
     *
     * @return $this
     */
    public function setFullTargetType($full_target_type)
    {
        $allowedValues = $this->getFullTargetTypeAllowableValues();
        if (!is_null($full_target_type) && !in_array($full_target_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'full_target_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        if (!is_null($full_target_type) && (mb_strlen($full_target_type) > 25)) {
            throw new \InvalidArgumentException('invalid length for $full_target_type when calling QueueDetailed., must be smaller than or equal to 25.');
        }

        $this->container['full_target_type'] = $full_target_type;

        return $this;
    }

    /**
     * Gets full_number_value
     *
     * @return string
     */
    public function getFullNumberValue()
    {
        return $this->container['full_number_value'];
    }

    /**
     * Sets full_number_value
     *
     * @param string $full_number_value 
     *
     * @return $this
     */
    public function setFullNumberValue($full_number_value)
    {
        if (!is_null($full_number_value) && (mb_strlen($full_number_value) > 25)) {
            throw new \InvalidArgumentException('invalid length for $full_number_value when calling QueueDetailed., must be smaller than or equal to 25.');
        }

        $this->container['full_number_value'] = $full_number_value;

        return $this;
    }

    /**
     * Gets periodic_announce_frequency
     *
     * @return int
     */
    public function getPeriodicAnnounceFrequency()
    {
        return $this->container['periodic_announce_frequency'];
    }

    /**
     * Sets periodic_announce_frequency
     *
     * @param int $periodic_announce_frequency 
     *
     * @return $this
     */
    public function setPeriodicAnnounceFrequency($periodic_announce_frequency)
    {
        $this->container['periodic_announce_frequency'] = $periodic_announce_frequency;

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
     * Gets prevent_missed_calls
     *
     * @return int
     */
    public function getPreventMissedCalls()
    {
        return $this->container['prevent_missed_calls'];
    }

    /**
     * Sets prevent_missed_calls
     *
     * @param int $prevent_missed_calls 
     *
     * @return $this
     */
    public function setPreventMissedCalls($prevent_missed_calls)
    {

        if (($prevent_missed_calls < 0)) {
            throw new \InvalidArgumentException('invalid value for $prevent_missed_calls when calling QueueDetailed., must be bigger than or equal to 0.');
        }

        $this->container['prevent_missed_calls'] = $prevent_missed_calls;

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
     * Gets periodic_announce_locution
     *
     * @return \Ivz\Client\Model\Locution
     */
    public function getPeriodicAnnounceLocution()
    {
        return $this->container['periodic_announce_locution'];
    }

    /**
     * Sets periodic_announce_locution
     *
     * @param \Ivz\Client\Model\Locution $periodic_announce_locution periodic_announce_locution
     *
     * @return $this
     */
    public function setPeriodicAnnounceLocution($periodic_announce_locution)
    {
        $this->container['periodic_announce_locution'] = $periodic_announce_locution;

        return $this;
    }

    /**
     * Gets timeout_locution
     *
     * @return \Ivz\Client\Model\Locution
     */
    public function getTimeoutLocution()
    {
        return $this->container['timeout_locution'];
    }

    /**
     * Sets timeout_locution
     *
     * @param \Ivz\Client\Model\Locution $timeout_locution timeout_locution
     *
     * @return $this
     */
    public function setTimeoutLocution($timeout_locution)
    {
        $this->container['timeout_locution'] = $timeout_locution;

        return $this;
    }

    /**
     * Gets timeout_extension
     *
     * @return \Ivz\Client\Model\Extension
     */
    public function getTimeoutExtension()
    {
        return $this->container['timeout_extension'];
    }

    /**
     * Sets timeout_extension
     *
     * @param \Ivz\Client\Model\Extension $timeout_extension timeout_extension
     *
     * @return $this
     */
    public function setTimeoutExtension($timeout_extension)
    {
        $this->container['timeout_extension'] = $timeout_extension;

        return $this;
    }

    /**
     * Gets timeout_voice_mail_user
     *
     * @return \Ivz\Client\Model\User
     */
    public function getTimeoutVoiceMailUser()
    {
        return $this->container['timeout_voice_mail_user'];
    }

    /**
     * Sets timeout_voice_mail_user
     *
     * @param \Ivz\Client\Model\User $timeout_voice_mail_user timeout_voice_mail_user
     *
     * @return $this
     */
    public function setTimeoutVoiceMailUser($timeout_voice_mail_user)
    {
        $this->container['timeout_voice_mail_user'] = $timeout_voice_mail_user;

        return $this;
    }

    /**
     * Gets full_locution
     *
     * @return \Ivz\Client\Model\Locution
     */
    public function getFullLocution()
    {
        return $this->container['full_locution'];
    }

    /**
     * Sets full_locution
     *
     * @param \Ivz\Client\Model\Locution $full_locution full_locution
     *
     * @return $this
     */
    public function setFullLocution($full_locution)
    {
        $this->container['full_locution'] = $full_locution;

        return $this;
    }

    /**
     * Gets full_extension
     *
     * @return \Ivz\Client\Model\Extension
     */
    public function getFullExtension()
    {
        return $this->container['full_extension'];
    }

    /**
     * Sets full_extension
     *
     * @param \Ivz\Client\Model\Extension $full_extension full_extension
     *
     * @return $this
     */
    public function setFullExtension($full_extension)
    {
        $this->container['full_extension'] = $full_extension;

        return $this;
    }

    /**
     * Gets full_voice_mail_user
     *
     * @return \Ivz\Client\Model\User
     */
    public function getFullVoiceMailUser()
    {
        return $this->container['full_voice_mail_user'];
    }

    /**
     * Sets full_voice_mail_user
     *
     * @param \Ivz\Client\Model\User $full_voice_mail_user full_voice_mail_user
     *
     * @return $this
     */
    public function setFullVoiceMailUser($full_voice_mail_user)
    {
        $this->container['full_voice_mail_user'] = $full_voice_mail_user;

        return $this;
    }

    /**
     * Gets timeout_number_country
     *
     * @return \Ivz\Client\Model\Country
     */
    public function getTimeoutNumberCountry()
    {
        return $this->container['timeout_number_country'];
    }

    /**
     * Sets timeout_number_country
     *
     * @param \Ivz\Client\Model\Country $timeout_number_country timeout_number_country
     *
     * @return $this
     */
    public function setTimeoutNumberCountry($timeout_number_country)
    {
        $this->container['timeout_number_country'] = $timeout_number_country;

        return $this;
    }

    /**
     * Gets full_number_country
     *
     * @return \Ivz\Client\Model\Country
     */
    public function getFullNumberCountry()
    {
        return $this->container['full_number_country'];
    }

    /**
     * Sets full_number_country
     *
     * @param \Ivz\Client\Model\Country $full_number_country full_number_country
     *
     * @return $this
     */
    public function setFullNumberCountry($full_number_country)
    {
        $this->container['full_number_country'] = $full_number_country;

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


