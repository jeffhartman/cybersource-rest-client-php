<?php
/**
 * Ptsv1pushfundstransferProcessingInformationPayoutsOptions
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Merged Spec
 *
 * All CyberSource API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Model;

use \ArrayAccess;

/**
 * Ptsv1pushfundstransferProcessingInformationPayoutsOptions Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv1pushfundstransferProcessingInformationPayoutsOptions implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv1pushfundstransfer_processingInformation_payoutsOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accountFundingReferenceId' => 'string',
        'retrievalReferenceNumber' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accountFundingReferenceId' => null,
        'retrievalReferenceNumber' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'accountFundingReferenceId' => 'accountFundingReferenceId',
        'retrievalReferenceNumber' => 'retrievalReferenceNumber'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'accountFundingReferenceId' => 'setAccountFundingReferenceId',
        'retrievalReferenceNumber' => 'setRetrievalReferenceNumber'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'accountFundingReferenceId' => 'getAccountFundingReferenceId',
        'retrievalReferenceNumber' => 'getRetrievalReferenceNumber'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['accountFundingReferenceId'] = isset($data['accountFundingReferenceId']) ? $data['accountFundingReferenceId'] : null;
        $this->container['retrievalReferenceNumber'] = isset($data['retrievalReferenceNumber']) ? $data['retrievalReferenceNumber'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets accountFundingReferenceId
     * @return string
     */
    public function getAccountFundingReferenceId()
    {
        return $this->container['accountFundingReferenceId'];
    }

    /**
     * Sets accountFundingReferenceId
     * @param string $accountFundingReferenceId Visa-generated transaction identifier (TID) that is unique for each original authorization and financial request.  Applicable only for Visa Platform Connect
     * @return $this
     */
    public function setAccountFundingReferenceId($accountFundingReferenceId)
    {
        $this->container['accountFundingReferenceId'] = $accountFundingReferenceId;

        return $this;
    }

    /**
     * Gets retrievalReferenceNumber
     * @return string
     */
    public function getRetrievalReferenceNumber()
    {
        return $this->container['retrievalReferenceNumber'];
    }

    /**
     * Sets retrievalReferenceNumber
     * @param string $retrievalReferenceNumber This field contains a number that is used with other data elements as a key to identify and track all messages related to a given cardholder transaction; that is, to a given transaction set.  Format: Positions 1-4: The yddd equivalent of the date, where y = 0-9 and ddd = 001 – 366. Positions 5-12: A unique identification number generated by the merchant  Applicable only for Visa Platform Connect
     * @return $this
     */
    public function setRetrievalReferenceNumber($retrievalReferenceNumber)
    {
        $this->container['retrievalReferenceNumber'] = $retrievalReferenceNumber;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this));
    }
}

