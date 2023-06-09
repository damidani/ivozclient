<?php
/**
 * IvrWithExcludedExtensions
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
 * IvrWithExcludedExtensions Class Doc Comment
 *
 * @category Class
 * @package  Ivz\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IvrWithExcludedExtensions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ivr-withExcludedExtensions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'timeout' => 'int',
        'max_digits' => 'int',
        'allow_extensions' => 'bool',
        'no_input_route_type' => 'string',
        'no_input_number_value' => 'string',
        'error_route_type' => 'string',
        'error_number_value' => 'string',
        'id' => 'int',
        'welcome_locution' => '\Ivz\Client\Model\Locution',
        'no_input_locution' => '\Ivz\Client\Model\Locution',
        'error_locution' => '\Ivz\Client\Model\Locution',
        'success_locution' => '\Ivz\Client\Model\Locution',
        'no_input_extension' => '\Ivz\Client\Model\Extension',
        'error_extension' => '\Ivz\Client\Model\Extension',
        'no_input_voice_mail_user' => '\Ivz\Client\Model\User',
        'error_voice_mail_user' => '\Ivz\Client\Model\User',
        'no_input_number_country' => '\Ivz\Client\Model\Country',
        'error_number_country' => '\Ivz\Client\Model\Country',
        'excluded_extension_ids' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'timeout' => null,
        'max_digits' => null,
        'allow_extensions' => null,
        'no_input_route_type' => null,
        'no_input_number_value' => null,
        'error_route_type' => null,
        'error_number_value' => null,
        'id' => null,
        'welcome_locution' => null,
        'no_input_locution' => null,
        'error_locution' => null,
        'success_locution' => null,
        'no_input_extension' => null,
        'error_extension' => null,
        'no_input_voice_mail_user' => null,
        'error_voice_mail_user' => null,
        'no_input_number_country' => null,
        'error_number_country' => null,
        'excluded_extension_ids' => null
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
        'timeout' => 'timeout',
        'max_digits' => 'maxDigits',
        'allow_extensions' => 'allowExtensions',
        'no_input_route_type' => 'noInputRouteType',
        'no_input_number_value' => 'noInputNumberValue',
        'error_route_type' => 'errorRouteType',
        'error_number_value' => 'errorNumberValue',
        'id' => 'id',
        'welcome_locution' => 'welcomeLocution',
        'no_input_locution' => 'noInputLocution',
        'error_locution' => 'errorLocution',
        'success_locution' => 'successLocution',
        'no_input_extension' => 'noInputExtension',
        'error_extension' => 'errorExtension',
        'no_input_voice_mail_user' => 'noInputVoiceMailUser',
        'error_voice_mail_user' => 'errorVoiceMailUser',
        'no_input_number_country' => 'noInputNumberCountry',
        'error_number_country' => 'errorNumberCountry',
        'excluded_extension_ids' => 'excludedExtensionIds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'timeout' => 'setTimeout',
        'max_digits' => 'setMaxDigits',
        'allow_extensions' => 'setAllowExtensions',
        'no_input_route_type' => 'setNoInputRouteType',
        'no_input_number_value' => 'setNoInputNumberValue',
        'error_route_type' => 'setErrorRouteType',
        'error_number_value' => 'setErrorNumberValue',
        'id' => 'setId',
        'welcome_locution' => 'setWelcomeLocution',
        'no_input_locution' => 'setNoInputLocution',
        'error_locution' => 'setErrorLocution',
        'success_locution' => 'setSuccessLocution',
        'no_input_extension' => 'setNoInputExtension',
        'error_extension' => 'setErrorExtension',
        'no_input_voice_mail_user' => 'setNoInputVoiceMailUser',
        'error_voice_mail_user' => 'setErrorVoiceMailUser',
        'no_input_number_country' => 'setNoInputNumberCountry',
        'error_number_country' => 'setErrorNumberCountry',
        'excluded_extension_ids' => 'setExcludedExtensionIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'timeout' => 'getTimeout',
        'max_digits' => 'getMaxDigits',
        'allow_extensions' => 'getAllowExtensions',
        'no_input_route_type' => 'getNoInputRouteType',
        'no_input_number_value' => 'getNoInputNumberValue',
        'error_route_type' => 'getErrorRouteType',
        'error_number_value' => 'getErrorNumberValue',
        'id' => 'getId',
        'welcome_locution' => 'getWelcomeLocution',
        'no_input_locution' => 'getNoInputLocution',
        'error_locution' => 'getErrorLocution',
        'success_locution' => 'getSuccessLocution',
        'no_input_extension' => 'getNoInputExtension',
        'error_extension' => 'getErrorExtension',
        'no_input_voice_mail_user' => 'getNoInputVoiceMailUser',
        'error_voice_mail_user' => 'getErrorVoiceMailUser',
        'no_input_number_country' => 'getNoInputNumberCountry',
        'error_number_country' => 'getErrorNumberCountry',
        'excluded_extension_ids' => 'getExcludedExtensionIds'
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

    const NO_INPUT_ROUTE_TYPE_NUMBER = 'number';
    const NO_INPUT_ROUTE_TYPE_EXTENSION = 'extension';
    const NO_INPUT_ROUTE_TYPE_VOICEMAIL = 'voicemail';
    const ERROR_ROUTE_TYPE_NUMBER = 'number';
    const ERROR_ROUTE_TYPE_EXTENSION = 'extension';
    const ERROR_ROUTE_TYPE_VOICEMAIL = 'voicemail';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNoInputRouteTypeAllowableValues()
    {
        return [
            self::NO_INPUT_ROUTE_TYPE_NUMBER,
            self::NO_INPUT_ROUTE_TYPE_EXTENSION,
            self::NO_INPUT_ROUTE_TYPE_VOICEMAIL,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getErrorRouteTypeAllowableValues()
    {
        return [
            self::ERROR_ROUTE_TYPE_NUMBER,
            self::ERROR_ROUTE_TYPE_EXTENSION,
            self::ERROR_ROUTE_TYPE_VOICEMAIL,
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
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
        $this->container['max_digits'] = isset($data['max_digits']) ? $data['max_digits'] : null;
        $this->container['allow_extensions'] = isset($data['allow_extensions']) ? $data['allow_extensions'] : false;
        $this->container['no_input_route_type'] = isset($data['no_input_route_type']) ? $data['no_input_route_type'] : null;
        $this->container['no_input_number_value'] = isset($data['no_input_number_value']) ? $data['no_input_number_value'] : null;
        $this->container['error_route_type'] = isset($data['error_route_type']) ? $data['error_route_type'] : null;
        $this->container['error_number_value'] = isset($data['error_number_value']) ? $data['error_number_value'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['welcome_locution'] = isset($data['welcome_locution']) ? $data['welcome_locution'] : null;
        $this->container['no_input_locution'] = isset($data['no_input_locution']) ? $data['no_input_locution'] : null;
        $this->container['error_locution'] = isset($data['error_locution']) ? $data['error_locution'] : null;
        $this->container['success_locution'] = isset($data['success_locution']) ? $data['success_locution'] : null;
        $this->container['no_input_extension'] = isset($data['no_input_extension']) ? $data['no_input_extension'] : null;
        $this->container['error_extension'] = isset($data['error_extension']) ? $data['error_extension'] : null;
        $this->container['no_input_voice_mail_user'] = isset($data['no_input_voice_mail_user']) ? $data['no_input_voice_mail_user'] : null;
        $this->container['error_voice_mail_user'] = isset($data['error_voice_mail_user']) ? $data['error_voice_mail_user'] : null;
        $this->container['no_input_number_country'] = isset($data['no_input_number_country']) ? $data['no_input_number_country'] : null;
        $this->container['error_number_country'] = isset($data['error_number_country']) ? $data['error_number_country'] : null;
        $this->container['excluded_extension_ids'] = isset($data['excluded_extension_ids']) ? $data['excluded_extension_ids'] : null;
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

        if ($this->container['timeout'] === null) {
            $invalidProperties[] = "'timeout' can't be null";
        }
        if (($this->container['timeout'] < 0)) {
            $invalidProperties[] = "invalid value for 'timeout', must be bigger than or equal to 0.";
        }

        if ($this->container['max_digits'] === null) {
            $invalidProperties[] = "'max_digits' can't be null";
        }
        if (($this->container['max_digits'] < 0)) {
            $invalidProperties[] = "invalid value for 'max_digits', must be bigger than or equal to 0.";
        }

        if ($this->container['allow_extensions'] === null) {
            $invalidProperties[] = "'allow_extensions' can't be null";
        }
        $allowedValues = $this->getNoInputRouteTypeAllowableValues();
        if (!is_null($this->container['no_input_route_type']) && !in_array($this->container['no_input_route_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'no_input_route_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['no_input_route_type']) && (mb_strlen($this->container['no_input_route_type']) > 25)) {
            $invalidProperties[] = "invalid value for 'no_input_route_type', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['no_input_number_value']) && (mb_strlen($this->container['no_input_number_value']) > 25)) {
            $invalidProperties[] = "invalid value for 'no_input_number_value', the character length must be smaller than or equal to 25.";
        }

        $allowedValues = $this->getErrorRouteTypeAllowableValues();
        if (!is_null($this->container['error_route_type']) && !in_array($this->container['error_route_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'error_route_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['error_route_type']) && (mb_strlen($this->container['error_route_type']) > 25)) {
            $invalidProperties[] = "invalid value for 'error_route_type', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['error_number_value']) && (mb_strlen($this->container['error_number_value']) > 25)) {
            $invalidProperties[] = "invalid value for 'error_number_value', the character length must be smaller than or equal to 25.";
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
            throw new \InvalidArgumentException('invalid length for $name when calling IvrWithExcludedExtensions., must be smaller than or equal to 50.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets timeout
     *
     * @return int
     */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
     * Sets timeout
     *
     * @param int $timeout 
     *
     * @return $this
     */
    public function setTimeout($timeout)
    {

        if (($timeout < 0)) {
            throw new \InvalidArgumentException('invalid value for $timeout when calling IvrWithExcludedExtensions., must be bigger than or equal to 0.');
        }

        $this->container['timeout'] = $timeout;

        return $this;
    }

    /**
     * Gets max_digits
     *
     * @return int
     */
    public function getMaxDigits()
    {
        return $this->container['max_digits'];
    }

    /**
     * Sets max_digits
     *
     * @param int $max_digits 
     *
     * @return $this
     */
    public function setMaxDigits($max_digits)
    {

        if (($max_digits < 0)) {
            throw new \InvalidArgumentException('invalid value for $max_digits when calling IvrWithExcludedExtensions., must be bigger than or equal to 0.');
        }

        $this->container['max_digits'] = $max_digits;

        return $this;
    }

    /**
     * Gets allow_extensions
     *
     * @return bool
     */
    public function getAllowExtensions()
    {
        return $this->container['allow_extensions'];
    }

    /**
     * Sets allow_extensions
     *
     * @param bool $allow_extensions 
     *
     * @return $this
     */
    public function setAllowExtensions($allow_extensions)
    {
        $this->container['allow_extensions'] = $allow_extensions;

        return $this;
    }

    /**
     * Gets no_input_route_type
     *
     * @return string
     */
    public function getNoInputRouteType()
    {
        return $this->container['no_input_route_type'];
    }

    /**
     * Sets no_input_route_type
     *
     * @param string $no_input_route_type 
     *
     * @return $this
     */
    public function setNoInputRouteType($no_input_route_type)
    {
        $allowedValues = $this->getNoInputRouteTypeAllowableValues();
        if (!is_null($no_input_route_type) && !in_array($no_input_route_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'no_input_route_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        if (!is_null($no_input_route_type) && (mb_strlen($no_input_route_type) > 25)) {
            throw new \InvalidArgumentException('invalid length for $no_input_route_type when calling IvrWithExcludedExtensions., must be smaller than or equal to 25.');
        }

        $this->container['no_input_route_type'] = $no_input_route_type;

        return $this;
    }

    /**
     * Gets no_input_number_value
     *
     * @return string
     */
    public function getNoInputNumberValue()
    {
        return $this->container['no_input_number_value'];
    }

    /**
     * Sets no_input_number_value
     *
     * @param string $no_input_number_value 
     *
     * @return $this
     */
    public function setNoInputNumberValue($no_input_number_value)
    {
        if (!is_null($no_input_number_value) && (mb_strlen($no_input_number_value) > 25)) {
            throw new \InvalidArgumentException('invalid length for $no_input_number_value when calling IvrWithExcludedExtensions., must be smaller than or equal to 25.');
        }

        $this->container['no_input_number_value'] = $no_input_number_value;

        return $this;
    }

    /**
     * Gets error_route_type
     *
     * @return string
     */
    public function getErrorRouteType()
    {
        return $this->container['error_route_type'];
    }

    /**
     * Sets error_route_type
     *
     * @param string $error_route_type 
     *
     * @return $this
     */
    public function setErrorRouteType($error_route_type)
    {
        $allowedValues = $this->getErrorRouteTypeAllowableValues();
        if (!is_null($error_route_type) && !in_array($error_route_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'error_route_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        if (!is_null($error_route_type) && (mb_strlen($error_route_type) > 25)) {
            throw new \InvalidArgumentException('invalid length for $error_route_type when calling IvrWithExcludedExtensions., must be smaller than or equal to 25.');
        }

        $this->container['error_route_type'] = $error_route_type;

        return $this;
    }

    /**
     * Gets error_number_value
     *
     * @return string
     */
    public function getErrorNumberValue()
    {
        return $this->container['error_number_value'];
    }

    /**
     * Sets error_number_value
     *
     * @param string $error_number_value 
     *
     * @return $this
     */
    public function setErrorNumberValue($error_number_value)
    {
        if (!is_null($error_number_value) && (mb_strlen($error_number_value) > 25)) {
            throw new \InvalidArgumentException('invalid length for $error_number_value when calling IvrWithExcludedExtensions., must be smaller than or equal to 25.');
        }

        $this->container['error_number_value'] = $error_number_value;

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
     * @return \Ivz\Client\Model\Locution
     */
    public function getWelcomeLocution()
    {
        return $this->container['welcome_locution'];
    }

    /**
     * Sets welcome_locution
     *
     * @param \Ivz\Client\Model\Locution $welcome_locution welcome_locution
     *
     * @return $this
     */
    public function setWelcomeLocution($welcome_locution)
    {
        $this->container['welcome_locution'] = $welcome_locution;

        return $this;
    }

    /**
     * Gets no_input_locution
     *
     * @return \Ivz\Client\Model\Locution
     */
    public function getNoInputLocution()
    {
        return $this->container['no_input_locution'];
    }

    /**
     * Sets no_input_locution
     *
     * @param \Ivz\Client\Model\Locution $no_input_locution no_input_locution
     *
     * @return $this
     */
    public function setNoInputLocution($no_input_locution)
    {
        $this->container['no_input_locution'] = $no_input_locution;

        return $this;
    }

    /**
     * Gets error_locution
     *
     * @return \Ivz\Client\Model\Locution
     */
    public function getErrorLocution()
    {
        return $this->container['error_locution'];
    }

    /**
     * Sets error_locution
     *
     * @param \Ivz\Client\Model\Locution $error_locution error_locution
     *
     * @return $this
     */
    public function setErrorLocution($error_locution)
    {
        $this->container['error_locution'] = $error_locution;

        return $this;
    }

    /**
     * Gets success_locution
     *
     * @return \Ivz\Client\Model\Locution
     */
    public function getSuccessLocution()
    {
        return $this->container['success_locution'];
    }

    /**
     * Sets success_locution
     *
     * @param \Ivz\Client\Model\Locution $success_locution success_locution
     *
     * @return $this
     */
    public function setSuccessLocution($success_locution)
    {
        $this->container['success_locution'] = $success_locution;

        return $this;
    }

    /**
     * Gets no_input_extension
     *
     * @return \Ivz\Client\Model\Extension
     */
    public function getNoInputExtension()
    {
        return $this->container['no_input_extension'];
    }

    /**
     * Sets no_input_extension
     *
     * @param \Ivz\Client\Model\Extension $no_input_extension no_input_extension
     *
     * @return $this
     */
    public function setNoInputExtension($no_input_extension)
    {
        $this->container['no_input_extension'] = $no_input_extension;

        return $this;
    }

    /**
     * Gets error_extension
     *
     * @return \Ivz\Client\Model\Extension
     */
    public function getErrorExtension()
    {
        return $this->container['error_extension'];
    }

    /**
     * Sets error_extension
     *
     * @param \Ivz\Client\Model\Extension $error_extension error_extension
     *
     * @return $this
     */
    public function setErrorExtension($error_extension)
    {
        $this->container['error_extension'] = $error_extension;

        return $this;
    }

    /**
     * Gets no_input_voice_mail_user
     *
     * @return \Ivz\Client\Model\User
     */
    public function getNoInputVoiceMailUser()
    {
        return $this->container['no_input_voice_mail_user'];
    }

    /**
     * Sets no_input_voice_mail_user
     *
     * @param \Ivz\Client\Model\User $no_input_voice_mail_user no_input_voice_mail_user
     *
     * @return $this
     */
    public function setNoInputVoiceMailUser($no_input_voice_mail_user)
    {
        $this->container['no_input_voice_mail_user'] = $no_input_voice_mail_user;

        return $this;
    }

    /**
     * Gets error_voice_mail_user
     *
     * @return \Ivz\Client\Model\User
     */
    public function getErrorVoiceMailUser()
    {
        return $this->container['error_voice_mail_user'];
    }

    /**
     * Sets error_voice_mail_user
     *
     * @param \Ivz\Client\Model\User $error_voice_mail_user error_voice_mail_user
     *
     * @return $this
     */
    public function setErrorVoiceMailUser($error_voice_mail_user)
    {
        $this->container['error_voice_mail_user'] = $error_voice_mail_user;

        return $this;
    }

    /**
     * Gets no_input_number_country
     *
     * @return \Ivz\Client\Model\Country
     */
    public function getNoInputNumberCountry()
    {
        return $this->container['no_input_number_country'];
    }

    /**
     * Sets no_input_number_country
     *
     * @param \Ivz\Client\Model\Country $no_input_number_country no_input_number_country
     *
     * @return $this
     */
    public function setNoInputNumberCountry($no_input_number_country)
    {
        $this->container['no_input_number_country'] = $no_input_number_country;

        return $this;
    }

    /**
     * Gets error_number_country
     *
     * @return \Ivz\Client\Model\Country
     */
    public function getErrorNumberCountry()
    {
        return $this->container['error_number_country'];
    }

    /**
     * Sets error_number_country
     *
     * @param \Ivz\Client\Model\Country $error_number_country error_number_country
     *
     * @return $this
     */
    public function setErrorNumberCountry($error_number_country)
    {
        $this->container['error_number_country'] = $error_number_country;

        return $this;
    }

    /**
     * Gets excluded_extension_ids
     *
     * @return int[]
     */
    public function getExcludedExtensionIds()
    {
        return $this->container['excluded_extension_ids'];
    }

    /**
     * Sets excluded_extension_ids
     *
     * @param int[] $excluded_extension_ids Excluded extensions
     *
     * @return $this
     */
    public function setExcludedExtensionIds($excluded_extension_ids)
    {
        $this->container['excluded_extension_ids'] = $excluded_extension_ids;

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


