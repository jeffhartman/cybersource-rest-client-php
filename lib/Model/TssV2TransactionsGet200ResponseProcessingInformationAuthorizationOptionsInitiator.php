<?php
/**
 * TssV2TransactionsGet200ResponseProcessingInformationAuthorizationOptionsInitiator
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
 * TssV2TransactionsGet200ResponseProcessingInformationAuthorizationOptionsInitiator Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TssV2TransactionsGet200ResponseProcessingInformationAuthorizationOptionsInitiator implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'tssV2TransactionsGet200Response_processingInformation_authorizationOptions_initiator';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'credentialStoredOnFile' => 'string',
        'storedCredentialUsed' => 'string',
        'merchantInitiatedTransaction' => '\CyberSource\Model\Ptsv2paymentsProcessingInformationAuthorizationOptionsInitiatorMerchantInitiatedTransaction'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'credentialStoredOnFile' => null,
        'storedCredentialUsed' => null,
        'merchantInitiatedTransaction' => null
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
        'type' => 'type',
        'credentialStoredOnFile' => 'credentialStoredOnFile',
        'storedCredentialUsed' => 'storedCredentialUsed',
        'merchantInitiatedTransaction' => 'merchantInitiatedTransaction'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'credentialStoredOnFile' => 'setCredentialStoredOnFile',
        'storedCredentialUsed' => 'setStoredCredentialUsed',
        'merchantInitiatedTransaction' => 'setMerchantInitiatedTransaction'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'credentialStoredOnFile' => 'getCredentialStoredOnFile',
        'storedCredentialUsed' => 'getStoredCredentialUsed',
        'merchantInitiatedTransaction' => 'getMerchantInitiatedTransaction'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['credentialStoredOnFile'] = isset($data['credentialStoredOnFile']) ? $data['credentialStoredOnFile'] : null;
        $this->container['storedCredentialUsed'] = isset($data['storedCredentialUsed']) ? $data['storedCredentialUsed'] : null;
        $this->container['merchantInitiatedTransaction'] = isset($data['merchantInitiatedTransaction']) ? $data['merchantInitiatedTransaction'] : null;
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
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type This field indicates whether the transaction is a merchant-initiated transaction or customer-initiated transaction.  Valid values: - **customer** - **merchant**
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets credentialStoredOnFile
     * @return string
     */
    public function getCredentialStoredOnFile()
    {
        return $this->container['credentialStoredOnFile'];
    }

    /**
     * Sets credentialStoredOnFile
     * @param string $credentialStoredOnFile Indicates to the issuing bank two things: - The merchant has received consent from the cardholder to store their card details on file - The merchant wants the issuing bank to check out the card details before the merchant initiates their first transaction for this cardholder. The purpose of the merchant-initiated transaction is to ensure that the cardholder’s credentials are valid (that the card is not stolen or has restrictions) and that the card details are good to be stored on the merchant’s file for future transactions.  Valid values: - `Y` means merchant will use this transaction to store payment credentials for follow-up merchant-initiated transactions. - `N` means merchant will not use this transaction to store payment credentials for follow-up merchant-initiated transactions.  For details, see `subsequent_auth_first` field description in the [Credit Card Services Using the SCMP API Guide.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)  **NOTE:** The value for this field does not correspond to any data in the TC 33 capture file5.  This field is supported only for Visa transactions on CyberSource through VisaNet.
     * @return $this
     */
    public function setCredentialStoredOnFile($credentialStoredOnFile)
    {
        $this->container['credentialStoredOnFile'] = $credentialStoredOnFile;

        return $this;
    }

    /**
     * Gets storedCredentialUsed
     * @return string
     */
    public function getStoredCredentialUsed()
    {
        return $this->container['storedCredentialUsed'];
    }

    /**
     * Sets storedCredentialUsed
     * @param string $storedCredentialUsed Indicates to an issuing bank whether a merchant-initiated transaction came from a card that was already stored on file.  Possible values: - **Y** means the merchant-initiated transaction came from a card that was already stored on file. - **N**  means the merchant-initiated transaction came from a card that was not stored on file.
     * @return $this
     */
    public function setStoredCredentialUsed($storedCredentialUsed)
    {
        $this->container['storedCredentialUsed'] = $storedCredentialUsed;

        return $this;
    }

    /**
     * Gets merchantInitiatedTransaction
     * @return \CyberSource\Model\Ptsv2paymentsProcessingInformationAuthorizationOptionsInitiatorMerchantInitiatedTransaction
     */
    public function getMerchantInitiatedTransaction()
    {
        return $this->container['merchantInitiatedTransaction'];
    }

    /**
     * Sets merchantInitiatedTransaction
     * @param \CyberSource\Model\Ptsv2paymentsProcessingInformationAuthorizationOptionsInitiatorMerchantInitiatedTransaction $merchantInitiatedTransaction
     * @return $this
     */
    public function setMerchantInitiatedTransaction($merchantInitiatedTransaction)
    {
        $this->container['merchantInitiatedTransaction'] = $merchantInitiatedTransaction;

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

