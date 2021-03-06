<?php
/**
 * SyncNumberLookupResult
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Messente\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Messente API
 *
 * [Messente](https://messente.com) is a global provider of messaging and user verification services.  * Send and receive SMS, Viber, WhatsApp and Telegram messages. * Manage contacts and groups. * Fetch detailed info about phone numbers. * Blacklist phone numbers to make sure you're not sending any unwanted messages.  Messente builds [tools](https://messente.com/documentation) to help organizations connect their services to people anywhere in the world.
 *
 * The version of the OpenAPI document: 2.0.0
 * Contact: messente@messente.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Messente\Api\Model;

use \ArrayAccess;
use \Messente\Api\ObjectSerializer;

/**
 * SyncNumberLookupResult Class Doc Comment
 *
 * @category Class
 * @description Info about a phone number
 * @package  Messente\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SyncNumberLookupResult implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SyncNumberLookupResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'number' => 'string',
        'roaming' => 'bool',
        'ported' => 'bool',
        'roamingNetwork' => '\Messente\Api\Model\MobileNetwork',
        'currentNetwork' => '\Messente\Api\Model\MobileNetwork',
        'originalNetwork' => '\Messente\Api\Model\MobileNetwork',
        'portedNetwork' => '\Messente\Api\Model\MobileNetwork',
        'status' => 'string',
        'error' => 'mixed'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'number' => null,
        'roaming' => null,
        'ported' => null,
        'roamingNetwork' => null,
        'currentNetwork' => null,
        'originalNetwork' => null,
        'portedNetwork' => null,
        'status' => null,
        'error' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'number' => 'number',
        'roaming' => 'roaming',
        'ported' => 'ported',
        'roamingNetwork' => 'roamingNetwork',
        'currentNetwork' => 'currentNetwork',
        'originalNetwork' => 'originalNetwork',
        'portedNetwork' => 'portedNetwork',
        'status' => 'status',
        'error' => 'error'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'number' => 'setNumber',
        'roaming' => 'setRoaming',
        'ported' => 'setPorted',
        'roamingNetwork' => 'setRoamingNetwork',
        'currentNetwork' => 'setCurrentNetwork',
        'originalNetwork' => 'setOriginalNetwork',
        'portedNetwork' => 'setPortedNetwork',
        'status' => 'setStatus',
        'error' => 'setError'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'number' => 'getNumber',
        'roaming' => 'getRoaming',
        'ported' => 'getPorted',
        'roamingNetwork' => 'getRoamingNetwork',
        'currentNetwork' => 'getCurrentNetwork',
        'originalNetwork' => 'getOriginalNetwork',
        'portedNetwork' => 'getPortedNetwork',
        'status' => 'getStatus',
        'error' => 'getError'
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

    const STATUS_ON = 'ON';
    const STATUS_OFF = 'OFF';
    const STATUS_INVALID = 'INVALID';
    const STATUS_UNKNOWN = 'UNKNOWN';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ON,
            self::STATUS_OFF,
            self::STATUS_INVALID,
            self::STATUS_UNKNOWN,
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
        $this->container['number'] = $data['number'] ?? null;
        $this->container['roaming'] = $data['roaming'] ?? null;
        $this->container['ported'] = $data['ported'] ?? null;
        $this->container['roamingNetwork'] = $data['roamingNetwork'] ?? null;
        $this->container['currentNetwork'] = $data['currentNetwork'] ?? null;
        $this->container['originalNetwork'] = $data['originalNetwork'] ?? null;
        $this->container['portedNetwork'] = $data['portedNetwork'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['error'] = $data['error'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['number'] === null) {
            $invalidProperties[] = "'number' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
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
     * Gets number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string $number Phone number in e.164 format
     *
     * @return self
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets roaming
     *
     * @return bool|null
     */
    public function getRoaming()
    {
        return $this->container['roaming'];
    }

    /**
     * Sets roaming
     *
     * @param bool|null $roaming Indicates if a number is roaming
     *
     * @return self
     */
    public function setRoaming($roaming)
    {
        $this->container['roaming'] = $roaming;

        return $this;
    }

    /**
     * Gets ported
     *
     * @return bool|null
     */
    public function getPorted()
    {
        return $this->container['ported'];
    }

    /**
     * Sets ported
     *
     * @param bool|null $ported Indicates if a number is ported
     *
     * @return self
     */
    public function setPorted($ported)
    {
        $this->container['ported'] = $ported;

        return $this;
    }

    /**
     * Gets roamingNetwork
     *
     * @return \Messente\Api\Model\MobileNetwork|null
     */
    public function getRoamingNetwork()
    {
        return $this->container['roamingNetwork'];
    }

    /**
     * Sets roamingNetwork
     *
     * @param \Messente\Api\Model\MobileNetwork|null $roamingNetwork roamingNetwork
     *
     * @return self
     */
    public function setRoamingNetwork($roamingNetwork)
    {
        $this->container['roamingNetwork'] = $roamingNetwork;

        return $this;
    }

    /**
     * Gets currentNetwork
     *
     * @return \Messente\Api\Model\MobileNetwork|null
     */
    public function getCurrentNetwork()
    {
        return $this->container['currentNetwork'];
    }

    /**
     * Sets currentNetwork
     *
     * @param \Messente\Api\Model\MobileNetwork|null $currentNetwork currentNetwork
     *
     * @return self
     */
    public function setCurrentNetwork($currentNetwork)
    {
        $this->container['currentNetwork'] = $currentNetwork;

        return $this;
    }

    /**
     * Gets originalNetwork
     *
     * @return \Messente\Api\Model\MobileNetwork|null
     */
    public function getOriginalNetwork()
    {
        return $this->container['originalNetwork'];
    }

    /**
     * Sets originalNetwork
     *
     * @param \Messente\Api\Model\MobileNetwork|null $originalNetwork originalNetwork
     *
     * @return self
     */
    public function setOriginalNetwork($originalNetwork)
    {
        $this->container['originalNetwork'] = $originalNetwork;

        return $this;
    }

    /**
     * Gets portedNetwork
     *
     * @return \Messente\Api\Model\MobileNetwork|null
     */
    public function getPortedNetwork()
    {
        return $this->container['portedNetwork'];
    }

    /**
     * Sets portedNetwork
     *
     * @param \Messente\Api\Model\MobileNetwork|null $portedNetwork portedNetwork
     *
     * @return self
     */
    public function setPortedNetwork($portedNetwork)
    {
        $this->container['portedNetwork'] = $portedNetwork;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Status of the phone number
     *
     * @return self
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets error
     *
     * @return mixed|null
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param mixed|null $error Indicates if any error occurred while handling the request
     *
     * @return self
     */
    public function setError($error)
    {
        $this->container['error'] = $error;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetUnset($offset)
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


