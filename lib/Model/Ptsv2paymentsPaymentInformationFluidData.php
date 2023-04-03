<?php
/**
 * Ptsv2paymentsPaymentInformationFluidData
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
 * Ptsv2paymentsPaymentInformationFluidData Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2paymentsPaymentInformationFluidData implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2payments_paymentInformation_fluidData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'keySerialNumber' => 'string',
        'descriptor' => 'string',
        'value' => 'string',
        'encoding' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'keySerialNumber' => null,
        'descriptor' => null,
        'value' => null,
        'encoding' => null
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
        'keySerialNumber' => 'keySerialNumber',
        'descriptor' => 'descriptor',
        'value' => 'value',
        'encoding' => 'encoding'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'keySerialNumber' => 'setKeySerialNumber',
        'descriptor' => 'setDescriptor',
        'value' => 'setValue',
        'encoding' => 'setEncoding'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'keySerialNumber' => 'getKeySerialNumber',
        'descriptor' => 'getDescriptor',
        'value' => 'getValue',
        'encoding' => 'getEncoding'
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
        $this->container['keySerialNumber'] = isset($data['keySerialNumber']) ? $data['keySerialNumber'] : null;
        $this->container['descriptor'] = isset($data['descriptor']) ? $data['descriptor'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['encoding'] = isset($data['encoding']) ? $data['encoding'] : null;
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
     * Gets keySerialNumber
     * @return string
     */
    public function getKeySerialNumber()
    {
        return $this->container['keySerialNumber'];
    }

    /**
     * Sets keySerialNumber
     * @param string $keySerialNumber The encoded or encrypted value that a payment solution returns for an authorization request. For details about the valid values for a key, see [Creating an Online Authorization](https://developer.cybersource.com/api/developer-guides/dita-payments/CreatingOnlineAuth.html)
     * @return $this
     */
    public function setKeySerialNumber($keySerialNumber)
    {
        $this->container['keySerialNumber'] = $keySerialNumber;

        return $this;
    }

    /**
     * Gets descriptor
     * @return string
     */
    public function getDescriptor()
    {
        return $this->container['descriptor'];
    }

    /**
     * Sets descriptor
     * @param string $descriptor The identifier for a payment solution, which is sending the encrypted payment data for decryption. Valid values: Samsung Pay: RklEPUNPTU1PTi5TQU1TVU5HLklOQVBQLlBBWU1FTlQ= Note: For other payment solutions, the value may be specific to the terminal or device initiatinf the payment. For example, the descriptor for a Bluefin payment encryption would be a device-generated descriptor. Used by Authorization and Standalone Credits. Required for authorizations and standalone credits.  Card Present processing: Format of the encrypted payment data. The value for Bluefin PCI P2PE is `Ymx1ZWZpbg==`. paymentInformation.fluidData.encoding must be `Base64`. The value for Cybersource P2PE decryption depends on the encoding method used and identified in encoding field. If paymentInformation.fluidData.encoding is `Base64`, the value is: `RklEPUVNVi5QQVlNRU5ULkFQSQ==` If paymentInformation.fluidData.encoding is `HEX`, the value is: `4649443D454D562E5041594D454E542E41504`
     * @return $this
     */
    public function setDescriptor($descriptor)
    {
        $this->container['descriptor'] = $descriptor;

        return $this;
    }

    /**
     * Gets value
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     * @param string $value Represents the encrypted payment data BLOB. The entry for this field is dependent on the payment solution used by the merchant. Used by Authorization and Standalone Credits. Required for authorizations and standalone credits that use a Cybersource suppored Point-to-Point encryption method. Card Present processing This field represents the encrypted payment data generated by the payment terminal/device.
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets encoding
     * @return string
     */
    public function getEncoding()
    {
        return $this->container['encoding'];
    }

    /**
     * Sets encoding
     * @param string $encoding Encoding method used to encrypt the payment data. Valid values: `Base64`, `HEX` If no value is provided, `Base64` is taken as the default value. And the `Base64` descriptor is used for paymentInformation.fluidData.encoding
     * @return $this
     */
    public function setEncoding($encoding)
    {
        $this->container['encoding'] = $encoding;

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


