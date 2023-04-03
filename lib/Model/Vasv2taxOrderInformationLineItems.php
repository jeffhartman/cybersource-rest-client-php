<?php
/**
 * Vasv2taxOrderInformationLineItems
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
 * Vasv2taxOrderInformationLineItems Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Vasv2taxOrderInformationLineItems implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'vasv2tax_orderInformation_lineItems';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'productSKU' => 'string',
        'productCode' => 'string',
        'quantity' => 'int',
        'productName' => 'string',
        'unitPrice' => 'string',
        'taxAmount' => 'string',
        'orderAcceptance' => '\CyberSource\Model\Vasv2taxOrderInformationOrderAcceptance',
        'orderOrigin' => '\CyberSource\Model\Vasv2taxOrderInformationOrderOrigin',
        'shipFromCountry' => 'string',
        'shipFromAdministrativeArea' => 'string',
        'shipFromLocality' => 'string',
        'shipFromPostalCode' => 'string',
        'buyerVatRegistrationNumber' => 'string',
        'sellerVatRegistrationNumber' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'productSKU' => null,
        'productCode' => null,
        'quantity' => null,
        'productName' => null,
        'unitPrice' => null,
        'taxAmount' => null,
        'orderAcceptance' => null,
        'orderOrigin' => null,
        'shipFromCountry' => null,
        'shipFromAdministrativeArea' => null,
        'shipFromLocality' => null,
        'shipFromPostalCode' => null,
        'buyerVatRegistrationNumber' => null,
        'sellerVatRegistrationNumber' => null
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
        'productSKU' => 'productSKU',
        'productCode' => 'productCode',
        'quantity' => 'quantity',
        'productName' => 'productName',
        'unitPrice' => 'unitPrice',
        'taxAmount' => 'taxAmount',
        'orderAcceptance' => 'orderAcceptance',
        'orderOrigin' => 'orderOrigin',
        'shipFromCountry' => 'shipFromCountry',
        'shipFromAdministrativeArea' => 'shipFromAdministrativeArea',
        'shipFromLocality' => 'shipFromLocality',
        'shipFromPostalCode' => 'shipFromPostalCode',
        'buyerVatRegistrationNumber' => 'buyerVatRegistrationNumber',
        'sellerVatRegistrationNumber' => 'sellerVatRegistrationNumber'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'productSKU' => 'setProductSKU',
        'productCode' => 'setProductCode',
        'quantity' => 'setQuantity',
        'productName' => 'setProductName',
        'unitPrice' => 'setUnitPrice',
        'taxAmount' => 'setTaxAmount',
        'orderAcceptance' => 'setOrderAcceptance',
        'orderOrigin' => 'setOrderOrigin',
        'shipFromCountry' => 'setShipFromCountry',
        'shipFromAdministrativeArea' => 'setShipFromAdministrativeArea',
        'shipFromLocality' => 'setShipFromLocality',
        'shipFromPostalCode' => 'setShipFromPostalCode',
        'buyerVatRegistrationNumber' => 'setBuyerVatRegistrationNumber',
        'sellerVatRegistrationNumber' => 'setSellerVatRegistrationNumber'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'productSKU' => 'getProductSKU',
        'productCode' => 'getProductCode',
        'quantity' => 'getQuantity',
        'productName' => 'getProductName',
        'unitPrice' => 'getUnitPrice',
        'taxAmount' => 'getTaxAmount',
        'orderAcceptance' => 'getOrderAcceptance',
        'orderOrigin' => 'getOrderOrigin',
        'shipFromCountry' => 'getShipFromCountry',
        'shipFromAdministrativeArea' => 'getShipFromAdministrativeArea',
        'shipFromLocality' => 'getShipFromLocality',
        'shipFromPostalCode' => 'getShipFromPostalCode',
        'buyerVatRegistrationNumber' => 'getBuyerVatRegistrationNumber',
        'sellerVatRegistrationNumber' => 'getSellerVatRegistrationNumber'
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
        $this->container['productSKU'] = isset($data['productSKU']) ? $data['productSKU'] : null;
        $this->container['productCode'] = isset($data['productCode']) ? $data['productCode'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['productName'] = isset($data['productName']) ? $data['productName'] : null;
        $this->container['unitPrice'] = isset($data['unitPrice']) ? $data['unitPrice'] : null;
        $this->container['taxAmount'] = isset($data['taxAmount']) ? $data['taxAmount'] : null;
        $this->container['orderAcceptance'] = isset($data['orderAcceptance']) ? $data['orderAcceptance'] : null;
        $this->container['orderOrigin'] = isset($data['orderOrigin']) ? $data['orderOrigin'] : null;
        $this->container['shipFromCountry'] = isset($data['shipFromCountry']) ? $data['shipFromCountry'] : null;
        $this->container['shipFromAdministrativeArea'] = isset($data['shipFromAdministrativeArea']) ? $data['shipFromAdministrativeArea'] : null;
        $this->container['shipFromLocality'] = isset($data['shipFromLocality']) ? $data['shipFromLocality'] : null;
        $this->container['shipFromPostalCode'] = isset($data['shipFromPostalCode']) ? $data['shipFromPostalCode'] : null;
        $this->container['buyerVatRegistrationNumber'] = isset($data['buyerVatRegistrationNumber']) ? $data['buyerVatRegistrationNumber'] : null;
        $this->container['sellerVatRegistrationNumber'] = isset($data['sellerVatRegistrationNumber']) ? $data['sellerVatRegistrationNumber'] : null;
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
     * Gets productSKU
     * @return string
     */
    public function getProductSKU()
    {
        return $this->container['productSKU'];
    }

    /**
     * Sets productSKU
     * @param string $productSKU Product identifier code. Also known as the Stock Keeping Unit (SKU) code for the product.  For an authorization or capture transaction (`processingOptions.capture` is set to `true` or `false`), this field is required when `orderInformation.lineItems[].productCode` is not set to **default** or one of the other values that are related to shipping and/or handling.  #### Tax Calculation Optional field for U.S. and Canadian taxes. Not applicable to international and value added taxes. For an authorization or capture transaction (`processingOptions.capture` is set to `true` or `false`), this field is required when `orderInformation.lineItems[].productCode` is not `default` or one of the values related to shipping and/or handling.
     * @return $this
     */
    public function setProductSKU($productSKU)
    {
        $this->container['productSKU'] = $productSKU;

        return $this;
    }

    /**
     * Gets productCode
     * @return string
     */
    public function getProductCode()
    {
        return $this->container['productCode'];
    }

    /**
     * Sets productCode
     * @param string $productCode Type of product. The value for this field is used to identify the product category (electronic, handling, physical, service, or shipping). The default value is `default`.  If you are performing an authorization transaction (`processingOptions.capture` is set to `false`), and you set this field to a value other than `default` or one of the values related to shipping and/or handling, then `orderInformation.lineItems[].quantity`, `orderInformation.lineItems[].productName`, and `orderInformation.lineItems[].productSku` fields are required.  Optional field.  For details, see the `product_code` field description in the [Credit Card Services Using the SCMP API Guide](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/).  #### Tax Calculation Optional field for U.S., Canadian, international tax, and value added taxes.  The Product Codes for the tax service are located in the Cybersource Tax Codes guide. Contact Customer Support to request the guide. If you don’t send a tax service Product Code in your tax request, product-based rules or exemptions will not be applied and the transaction will default to fully taxable in the locations where you’ve indicated you need to collect tax [by way of nexus, no nexus, or seller registration number fields].
     * @return $this
     */
    public function setProductCode($productCode)
    {
        $this->container['productCode'] = $productCode;

        return $this;
    }

    /**
     * Gets quantity
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     * @param int $quantity Number of units for this order. Must be a non-negative integer.  The default is `1`. For an authorization or capture transaction (`processingOptions.capture` is set to `true` or `false`), this field is required when `orderInformation.lineItems[].productCode` is not `default` or one of the other values related to shipping and/or handling.  #### Tax Calculation Optional field for U.S., Canadian, international tax, and value added taxes.
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets productName
     * @return string
     */
    public function getProductName()
    {
        return $this->container['productName'];
    }

    /**
     * Sets productName
     * @param string $productName For an authorization or capture transaction (`processingOptions.capture` is `true` or `false`), this field is required when `orderInformation.lineItems[].productCode` is not `default` or one of the other values that are related to shipping and/or handling.  #### Tax Calculation Optional field for U.S., Canadian, international tax, and value added taxes.
     * @return $this
     */
    public function setProductName($productName)
    {
        $this->container['productName'] = $productName;

        return $this;
    }

    /**
     * Gets unitPrice
     * @return string
     */
    public function getUnitPrice()
    {
        return $this->container['unitPrice'];
    }

    /**
     * Sets unitPrice
     * @param string $unitPrice Per-item price of the product. This value for this field cannot be negative.  You must include either this field or the request-level field `orderInformation.amountDetails.totalAmount` in your request.  You can include a decimal point (.), but you cannot include any other special characters. The value is truncated to the correct number of decimal places.  #### DCC with a Third-Party Provider Set this field to the converted amount that was returned by the DCC provider. You must include either the 1st line item in the order and this field, or the request-level field `orderInformation.amountDetails.totalAmount` in your request.  #### FDMS South If you accept IDR or CLP currencies, see the entry for FDMS South in the [Merchant Descriptors Using the SCMP API Guide.] (https://apps.cybersource.com/library/documentation/dev_guides/Merchant_Descriptors_SCMP_API/html/)  #### Tax Calculation Required field for U.S., Canadian, international and value added taxes.  #### Zero Amount Authorizations If your processor supports zero amount authorizations, you can set this field to 0 for the authorization to check if the card is lost or stolen.  #### Maximum Field Lengths For GPN and JCN Gateway: Decimal (10) All other processors: Decimal (15)
     * @return $this
     */
    public function setUnitPrice($unitPrice)
    {
        $this->container['unitPrice'] = $unitPrice;

        return $this;
    }

    /**
     * Gets taxAmount
     * @return string
     */
    public function getTaxAmount()
    {
        return $this->container['taxAmount'];
    }

    /**
     * Sets taxAmount
     * @param string $taxAmount Total tax to apply to the product. This value cannot be negative. The tax amount and the offer amount must be in the same currency. The tax amount field is additive.  The following example uses a two-exponent currency such as USD:   1. You include each line item in your request.  ..- 1st line item has amount=10.00, quantity=1, and taxAmount=0.80  ..- 2nd line item has amount=20.00, quantity=1, and taxAmount=1.60  2. The total amount authorized will be 32.40, not 30.00 with 2.40 of tax included.  Optional field.  #### Airlines processing Tax portion of the order amount. This value cannot exceed 99999999999999 (fourteen 9s). Format: English characters only. Optional request field for a line item.  #### Tax Calculation Optional field for U.S., Canadian, international tax, and value added taxes.  Note if you send this field in your tax request, the value in the field will override the tax engine
     * @return $this
     */
    public function setTaxAmount($taxAmount)
    {
        $this->container['taxAmount'] = $taxAmount;

        return $this;
    }

    /**
     * Gets orderAcceptance
     * @return \CyberSource\Model\Vasv2taxOrderInformationOrderAcceptance
     */
    public function getOrderAcceptance()
    {
        return $this->container['orderAcceptance'];
    }

    /**
     * Sets orderAcceptance
     * @param \CyberSource\Model\Vasv2taxOrderInformationOrderAcceptance $orderAcceptance
     * @return $this
     */
    public function setOrderAcceptance($orderAcceptance)
    {
        $this->container['orderAcceptance'] = $orderAcceptance;

        return $this;
    }

    /**
     * Gets orderOrigin
     * @return \CyberSource\Model\Vasv2taxOrderInformationOrderOrigin
     */
    public function getOrderOrigin()
    {
        return $this->container['orderOrigin'];
    }

    /**
     * Sets orderOrigin
     * @param \CyberSource\Model\Vasv2taxOrderInformationOrderOrigin $orderOrigin
     * @return $this
     */
    public function setOrderOrigin($orderOrigin)
    {
        $this->container['orderOrigin'] = $orderOrigin;

        return $this;
    }

    /**
     * Gets shipFromCountry
     * @return string
     */
    public function getShipFromCountry()
    {
        return $this->container['shipFromCountry'];
    }

    /**
     * Sets shipFromCountry
     * @param string $shipFromCountry Country from which the order is shipped. This field is used only when `orderInformation.shippingDetails.shipFromLocality` and `orderInformation.shippingDetails.shipFromAdministrativeArea` are present. Use the [ISO Standard Country Codes](http://apps.cybersource.com/library/documentation/sbc/quickref/countries_alpha_list.pdf).  **NOTE** If this field appears in a `lineItems` object, then the value of this field in the `lineItems` object overrides the value of the corresponding field at the request-level or order-level object.  #### Tax Calculation This field is used to determine tax rules and/ or rates applied to the transaction based on sourcing.  Optional for U.S., Canadian, international tax, and value added taxes.
     * @return $this
     */
    public function setShipFromCountry($shipFromCountry)
    {
        $this->container['shipFromCountry'] = $shipFromCountry;

        return $this;
    }

    /**
     * Gets shipFromAdministrativeArea
     * @return string
     */
    public function getShipFromAdministrativeArea()
    {
        return $this->container['shipFromAdministrativeArea'];
    }

    /**
     * Sets shipFromAdministrativeArea
     * @param string $shipFromAdministrativeArea State from which the order is shipped. This field is used only when `orderInformation.shippingDetails.shipFromLocality` and `orderInformation.shippingDetails.shipFromCountry` are present. Use the [State, Province, and Territory Codes for the United States and Canada](http://apps.cybersource.com/library/documentation/sbc/quickref/states_and_provinces.pdf).  **NOTE** If this field appears in a `lineItems` object, then the value of this field in the `lineItems` object overrides the value of the corresponding field at the request-level or order-level object.  #### Tax Calculation This field is used to determine tax rules and/or rates applied to the transaction based on sourcing.  Optional for U.S. and Canadian taxes. Not applicable to international and value added taxes.
     * @return $this
     */
    public function setShipFromAdministrativeArea($shipFromAdministrativeArea)
    {
        $this->container['shipFromAdministrativeArea'] = $shipFromAdministrativeArea;

        return $this;
    }

    /**
     * Gets shipFromLocality
     * @return string
     */
    public function getShipFromLocality()
    {
        return $this->container['shipFromLocality'];
    }

    /**
     * Sets shipFromLocality
     * @param string $shipFromLocality City where the product is shipped from. This field is used only when the `orderInformation.shipTo.administrativeArea` and `orderInformation.shipTo.country` fields are present.  **NOTE** If this field appears in a `lineItems` object, then the value of this field in the `lineItems` object overrides the value of the corresponding field at the request-level or order-level object.  #### Tax Calculation This field is used to determine tax rules and/or rates applied to the transaction based on sourcing.  Optional for U.S. and Canadian taxes. Not applicable to international and value added taxes.
     * @return $this
     */
    public function setShipFromLocality($shipFromLocality)
    {
        $this->container['shipFromLocality'] = $shipFromLocality;

        return $this;
    }

    /**
     * Gets shipFromPostalCode
     * @return string
     */
    public function getShipFromPostalCode()
    {
        return $this->container['shipFromPostalCode'];
    }

    /**
     * Sets shipFromPostalCode
     * @param string $shipFromPostalCode Postal code where the product is shipped from.  #### Tax Calculation This field is used to determine tax rules and/or rates applied to the transaction based on sourcing.  Optional for U.S. and Canadian taxes. Not applicable to international and value added taxes.
     * @return $this
     */
    public function setShipFromPostalCode($shipFromPostalCode)
    {
        $this->container['shipFromPostalCode'] = $shipFromPostalCode;

        return $this;
    }

    /**
     * Gets buyerVatRegistrationNumber
     * @return string
     */
    public function getBuyerVatRegistrationNumber()
    {
        return $this->container['buyerVatRegistrationNumber'];
    }

    /**
     * Sets buyerVatRegistrationNumber
     * @param string $buyerVatRegistrationNumber Buyer’s VAT registration number.  **NOTE** If this field appears in a `lineItems` object, then the value of this field in the `lineItems` object overrides the value of the corresponding field at the request-level or order-level object.  #### Tax Calculation Optional field for international and value added taxes only. Not applicable to U.S. and Canadian taxes.
     * @return $this
     */
    public function setBuyerVatRegistrationNumber($buyerVatRegistrationNumber)
    {
        $this->container['buyerVatRegistrationNumber'] = $buyerVatRegistrationNumber;

        return $this;
    }

    /**
     * Gets sellerVatRegistrationNumber
     * @return string
     */
    public function getSellerVatRegistrationNumber()
    {
        return $this->container['sellerVatRegistrationNumber'];
    }

    /**
     * Sets sellerVatRegistrationNumber
     * @param string $sellerVatRegistrationNumber VAT seller registration number.  For details, see \"International Taxes and Value-Added Tax (VAT)\" in [Tax Calculation Service Using the SCMP API](https://apps.cybersource.com/library/documentation/dev_guides/Tax_SCMP_API/html/).  **NOTE** If this field appears in a `lineItems` object, then the value of this field in the `lineItems` object overrides the value of the corresponding field at the request-level or order-level object.  #### Tax Calculation Optional field for international and value added taxes only. Not applicable to U.S. and Canadian taxes.
     * @return $this
     */
    public function setSellerVatRegistrationNumber($sellerVatRegistrationNumber)
    {
        $this->container['sellerVatRegistrationNumber'] = $sellerVatRegistrationNumber;

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


