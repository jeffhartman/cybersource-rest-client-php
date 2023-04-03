<?php
/**
 * Ptsv2paymentsOrderInformationAmountDetails
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
 * Ptsv2paymentsOrderInformationAmountDetails Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2paymentsOrderInformationAmountDetails implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2payments_orderInformation_amountDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'totalAmount' => 'string',
        'subTotalAmount' => 'string',
        'currency' => 'string',
        'discountAmount' => 'string',
        'dutyAmount' => 'string',
        'gratuityAmount' => 'string',
        'taxAmount' => 'string',
        'nationalTaxIncluded' => 'string',
        'taxAppliedAfterDiscount' => 'string',
        'taxAppliedLevel' => 'string',
        'taxTypeCode' => 'string',
        'freightAmount' => 'string',
        'foreignAmount' => 'string',
        'foreignCurrency' => 'string',
        'exchangeRate' => 'string',
        'exchangeRateTimeStamp' => 'string',
        'surcharge' => '\CyberSource\Model\Ptsv2paymentsOrderInformationAmountDetailsSurcharge',
        'settlementAmount' => 'string',
        'settlementCurrency' => 'string',
        'amexAdditionalAmounts' => '\CyberSource\Model\Ptsv2paymentsOrderInformationAmountDetailsAmexAdditionalAmounts[]',
        'taxDetails' => '\CyberSource\Model\Ptsv2paymentsOrderInformationAmountDetailsTaxDetails[]',
        'serviceFeeAmount' => 'string',
        'originalAmount' => 'string',
        'originalCurrency' => 'string',
        'cashbackAmount' => 'string',
        'currencyConversion' => '\CyberSource\Model\Ptsv2paymentsOrderInformationAmountDetailsCurrencyConversion'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'totalAmount' => null,
        'subTotalAmount' => null,
        'currency' => null,
        'discountAmount' => null,
        'dutyAmount' => null,
        'gratuityAmount' => null,
        'taxAmount' => null,
        'nationalTaxIncluded' => null,
        'taxAppliedAfterDiscount' => null,
        'taxAppliedLevel' => null,
        'taxTypeCode' => null,
        'freightAmount' => null,
        'foreignAmount' => null,
        'foreignCurrency' => null,
        'exchangeRate' => null,
        'exchangeRateTimeStamp' => null,
        'surcharge' => null,
        'settlementAmount' => null,
        'settlementCurrency' => null,
        'amexAdditionalAmounts' => null,
        'taxDetails' => null,
        'serviceFeeAmount' => null,
        'originalAmount' => null,
        'originalCurrency' => null,
        'cashbackAmount' => null,
        'currencyConversion' => null
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
        'totalAmount' => 'totalAmount',
        'subTotalAmount' => 'subTotalAmount',
        'currency' => 'currency',
        'discountAmount' => 'discountAmount',
        'dutyAmount' => 'dutyAmount',
        'gratuityAmount' => 'gratuityAmount',
        'taxAmount' => 'taxAmount',
        'nationalTaxIncluded' => 'nationalTaxIncluded',
        'taxAppliedAfterDiscount' => 'taxAppliedAfterDiscount',
        'taxAppliedLevel' => 'taxAppliedLevel',
        'taxTypeCode' => 'taxTypeCode',
        'freightAmount' => 'freightAmount',
        'foreignAmount' => 'foreignAmount',
        'foreignCurrency' => 'foreignCurrency',
        'exchangeRate' => 'exchangeRate',
        'exchangeRateTimeStamp' => 'exchangeRateTimeStamp',
        'surcharge' => 'surcharge',
        'settlementAmount' => 'settlementAmount',
        'settlementCurrency' => 'settlementCurrency',
        'amexAdditionalAmounts' => 'amexAdditionalAmounts',
        'taxDetails' => 'taxDetails',
        'serviceFeeAmount' => 'serviceFeeAmount',
        'originalAmount' => 'originalAmount',
        'originalCurrency' => 'originalCurrency',
        'cashbackAmount' => 'cashbackAmount',
        'currencyConversion' => 'currencyConversion'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'totalAmount' => 'setTotalAmount',
        'subTotalAmount' => 'setSubTotalAmount',
        'currency' => 'setCurrency',
        'discountAmount' => 'setDiscountAmount',
        'dutyAmount' => 'setDutyAmount',
        'gratuityAmount' => 'setGratuityAmount',
        'taxAmount' => 'setTaxAmount',
        'nationalTaxIncluded' => 'setNationalTaxIncluded',
        'taxAppliedAfterDiscount' => 'setTaxAppliedAfterDiscount',
        'taxAppliedLevel' => 'setTaxAppliedLevel',
        'taxTypeCode' => 'setTaxTypeCode',
        'freightAmount' => 'setFreightAmount',
        'foreignAmount' => 'setForeignAmount',
        'foreignCurrency' => 'setForeignCurrency',
        'exchangeRate' => 'setExchangeRate',
        'exchangeRateTimeStamp' => 'setExchangeRateTimeStamp',
        'surcharge' => 'setSurcharge',
        'settlementAmount' => 'setSettlementAmount',
        'settlementCurrency' => 'setSettlementCurrency',
        'amexAdditionalAmounts' => 'setAmexAdditionalAmounts',
        'taxDetails' => 'setTaxDetails',
        'serviceFeeAmount' => 'setServiceFeeAmount',
        'originalAmount' => 'setOriginalAmount',
        'originalCurrency' => 'setOriginalCurrency',
        'cashbackAmount' => 'setCashbackAmount',
        'currencyConversion' => 'setCurrencyConversion'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'totalAmount' => 'getTotalAmount',
        'subTotalAmount' => 'getSubTotalAmount',
        'currency' => 'getCurrency',
        'discountAmount' => 'getDiscountAmount',
        'dutyAmount' => 'getDutyAmount',
        'gratuityAmount' => 'getGratuityAmount',
        'taxAmount' => 'getTaxAmount',
        'nationalTaxIncluded' => 'getNationalTaxIncluded',
        'taxAppliedAfterDiscount' => 'getTaxAppliedAfterDiscount',
        'taxAppliedLevel' => 'getTaxAppliedLevel',
        'taxTypeCode' => 'getTaxTypeCode',
        'freightAmount' => 'getFreightAmount',
        'foreignAmount' => 'getForeignAmount',
        'foreignCurrency' => 'getForeignCurrency',
        'exchangeRate' => 'getExchangeRate',
        'exchangeRateTimeStamp' => 'getExchangeRateTimeStamp',
        'surcharge' => 'getSurcharge',
        'settlementAmount' => 'getSettlementAmount',
        'settlementCurrency' => 'getSettlementCurrency',
        'amexAdditionalAmounts' => 'getAmexAdditionalAmounts',
        'taxDetails' => 'getTaxDetails',
        'serviceFeeAmount' => 'getServiceFeeAmount',
        'originalAmount' => 'getOriginalAmount',
        'originalCurrency' => 'getOriginalCurrency',
        'cashbackAmount' => 'getCashbackAmount',
        'currencyConversion' => 'getCurrencyConversion'
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
        $this->container['totalAmount'] = isset($data['totalAmount']) ? $data['totalAmount'] : null;
        $this->container['subTotalAmount'] = isset($data['subTotalAmount']) ? $data['subTotalAmount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['discountAmount'] = isset($data['discountAmount']) ? $data['discountAmount'] : null;
        $this->container['dutyAmount'] = isset($data['dutyAmount']) ? $data['dutyAmount'] : null;
        $this->container['gratuityAmount'] = isset($data['gratuityAmount']) ? $data['gratuityAmount'] : null;
        $this->container['taxAmount'] = isset($data['taxAmount']) ? $data['taxAmount'] : null;
        $this->container['nationalTaxIncluded'] = isset($data['nationalTaxIncluded']) ? $data['nationalTaxIncluded'] : null;
        $this->container['taxAppliedAfterDiscount'] = isset($data['taxAppliedAfterDiscount']) ? $data['taxAppliedAfterDiscount'] : null;
        $this->container['taxAppliedLevel'] = isset($data['taxAppliedLevel']) ? $data['taxAppliedLevel'] : null;
        $this->container['taxTypeCode'] = isset($data['taxTypeCode']) ? $data['taxTypeCode'] : null;
        $this->container['freightAmount'] = isset($data['freightAmount']) ? $data['freightAmount'] : null;
        $this->container['foreignAmount'] = isset($data['foreignAmount']) ? $data['foreignAmount'] : null;
        $this->container['foreignCurrency'] = isset($data['foreignCurrency']) ? $data['foreignCurrency'] : null;
        $this->container['exchangeRate'] = isset($data['exchangeRate']) ? $data['exchangeRate'] : null;
        $this->container['exchangeRateTimeStamp'] = isset($data['exchangeRateTimeStamp']) ? $data['exchangeRateTimeStamp'] : null;
        $this->container['surcharge'] = isset($data['surcharge']) ? $data['surcharge'] : null;
        $this->container['settlementAmount'] = isset($data['settlementAmount']) ? $data['settlementAmount'] : null;
        $this->container['settlementCurrency'] = isset($data['settlementCurrency']) ? $data['settlementCurrency'] : null;
        $this->container['amexAdditionalAmounts'] = isset($data['amexAdditionalAmounts']) ? $data['amexAdditionalAmounts'] : null;
        $this->container['taxDetails'] = isset($data['taxDetails']) ? $data['taxDetails'] : null;
        $this->container['serviceFeeAmount'] = isset($data['serviceFeeAmount']) ? $data['serviceFeeAmount'] : null;
        $this->container['originalAmount'] = isset($data['originalAmount']) ? $data['originalAmount'] : null;
        $this->container['originalCurrency'] = isset($data['originalCurrency']) ? $data['originalCurrency'] : null;
        $this->container['cashbackAmount'] = isset($data['cashbackAmount']) ? $data['cashbackAmount'] : null;
        $this->container['currencyConversion'] = isset($data['currencyConversion']) ? $data['currencyConversion'] : null;
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
     * Gets totalAmount
     * @return string
     */
    public function getTotalAmount()
    {
        return $this->container['totalAmount'];
    }

    /**
     * Sets totalAmount
     * @param string $totalAmount Grand total for the order. This value cannot be negative. You can include a decimal point (.), but no other special characters. CyberSource truncates the amount to the correct number of decimal places.  **Note** For CTV, FDCCompass, Paymentech processors, the maximum length for this field is 12.  **Important** Some processors have specific requirements and limitations, such as maximum amounts and maximum field lengths. For details, see: - \"Authorization Information for Specific Processors\" in the [Credit Card Services Using the SCMP API Guide](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/). - \"Capture Information for Specific Processors\" in the [Credit Card Services Using the SCMP API Guide](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/). - \"Credit Information for Specific Processors\" in the [Credit Card Services Using the SCMP API Guide](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/).  If your processor supports zero amount authorizations, you can set this field to 0 for the authorization to check if the card is lost or stolen. For details, see \"Zero Amount Authorizations,\" \"Credit Information for Specific Processors\" in [Credit Card Services Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)  #### Card Present Required to include either this field or `orderInformation.lineItems[].unitPrice` for the order.  #### Invoicing Required for creating a new invoice.  #### PIN Debit Amount you requested for the PIN debit purchase. This value is returned for partial authorizations. The issuing bank can approve a partial amount if the balance on the debit card is less than the requested transaction amount.  Required field for PIN Debit purchase and PIN Debit credit requests. Optional field for PIN Debit reversal requests.  #### GPX This field is optional for reversing an authorization or credit; however, for all other processors, these fields are required.  #### DCC with a Third-Party Provider Set this field to the converted amount that was returned by the DCC provider. You must include either this field or the 1st line item in the order and the specific line-order amount in your request. For details, see `grand_total_amount` field description in [Dynamic Currency Conversion For First Data Using the SCMP API](http://apps.cybersource.com/library/documentation/dev_guides/DCC_FirstData_SCMP/DCC_FirstData_SCMP_API.pdf).  #### FDMS South If you accept IDR or CLP currencies, see the entry for FDMS South in \"Authorization Information for Specific Processors\" of the [Credit Card Services Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)  #### DCC for First Data Not used.
     * @return $this
     */
    public function setTotalAmount($totalAmount)
    {
        $this->container['totalAmount'] = $totalAmount;

        return $this;
    }

    /**
     * Gets subTotalAmount
     * @return string
     */
    public function getSubTotalAmount()
    {
        return $this->container['subTotalAmount'];
    }

    /**
     * Sets subTotalAmount
     * @param string $subTotalAmount Subtotal amount of all the items.This amount (which is the value of all items in the cart, not including the additional amounts such as tax, shipping, etc.) cannot change after a sessions request. When there is a change to any of the additional amounts, this field should be resent in the order request. When the sub total amount changes, you must initiate a new transaction starting with a sessions request. Note The amount value must be a non-negative number containing 2 decimal places and limited to 7 digits before the decimal point. This value can not be changed after a sessions request.
     * @return $this
     */
    public function setSubTotalAmount($subTotalAmount)
    {
        $this->container['subTotalAmount'] = $subTotalAmount;

        return $this;
    }

    /**
     * Gets currency
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     * @param string $currency Currency used for the order. Use the three-character [ISO Standard Currency Codes.](http://apps.cybersource.com/library/documentation/sbc/quickref/currencies.pdf)  #### Used by **Authorization** Required field.  **Authorization Reversal** For an authorization reversal (`reversalInformation`) or a capture (`processingOptions.capture` is set to `true`), you must use the same currency that you used in your payment authorization request.  #### PIN Debit Currency for the amount you requested for the PIN debit purchase. This value is returned for partial authorizations. The issuing bank can approve a partial amount if the balance on the debit card is less than the requested transaction amount. For the possible values, see the [ISO Standard Currency Codes](https://developer.cybersource.com/library/documentation/sbc/quickref/currencies.pdf). Returned by PIN debit purchase.  For PIN debit reversal requests, you must use the same currency that was used for the PIN debit purchase or PIN debit credit that you are reversing. For the possible values, see the [ISO Standard Currency Codes](https://developer.cybersource.com/library/documentation/sbc/quickref/currencies.pdf).  Required field for PIN Debit purchase and PIN Debit credit requests. Optional field for PIN Debit reversal requests.  #### GPX This field is optional for reversing an authorization or credit.  #### DCC for First Data Your local currency. For details, see the `currency` field description in [Dynamic Currency Conversion For First Data Using the SCMP API](http://apps.cybersource.com/library/documentation/dev_guides/DCC_FirstData_SCMP/DCC_FirstData_SCMP_API.pdf).  #### Tax Calculation Required for international tax and value added tax only. Optional for U.S. and Canadian taxes. Your local currency.
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets discountAmount
     * @return string
     */
    public function getDiscountAmount()
    {
        return $this->container['discountAmount'];
    }

    /**
     * Sets discountAmount
     * @param string $discountAmount Total discount amount applied to the order.
     * @return $this
     */
    public function setDiscountAmount($discountAmount)
    {
        $this->container['discountAmount'] = $discountAmount;

        return $this;
    }

    /**
     * Gets dutyAmount
     * @return string
     */
    public function getDutyAmount()
    {
        return $this->container['dutyAmount'];
    }

    /**
     * Sets dutyAmount
     * @param string $dutyAmount Total charges for any import or export duties included in the order.
     * @return $this
     */
    public function setDutyAmount($dutyAmount)
    {
        $this->container['dutyAmount'] = $dutyAmount;

        return $this;
    }

    /**
     * Gets gratuityAmount
     * @return string
     */
    public function getGratuityAmount()
    {
        return $this->container['gratuityAmount'];
    }

    /**
     * Sets gratuityAmount
     * @param string $gratuityAmount Gratuity or tip amount for restaurants. Allowed only when industryDatatype=restaurant. When your customer uses a debit card or prepaid card, and you receive a partial authorization, the payment networks recommend that you do not submit a capture amount that is higher than the authorized amount. When the capture amount exceeds the partial amount that was approved, the issuer has chargeback rights for the excess amount.  Used by **Capture** Optional field.  #### CyberSource through VisaNet Restaurant data is supported only on CyberSource through VisaNet when card is present.
     * @return $this
     */
    public function setGratuityAmount($gratuityAmount)
    {
        $this->container['gratuityAmount'] = $gratuityAmount;

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
     * @param string $taxAmount Total tax amount for all the items in the order.
     * @return $this
     */
    public function setTaxAmount($taxAmount)
    {
        $this->container['taxAmount'] = $taxAmount;

        return $this;
    }

    /**
     * Gets nationalTaxIncluded
     * @return string
     */
    public function getNationalTaxIncluded()
    {
        return $this->container['nationalTaxIncluded'];
    }

    /**
     * Sets nationalTaxIncluded
     * @param string $nationalTaxIncluded Flag that indicates whether a national tax is included in the order total.  Possible values:   - **0**: national tax not included  - **1**: national tax included
     * @return $this
     */
    public function setNationalTaxIncluded($nationalTaxIncluded)
    {
        $this->container['nationalTaxIncluded'] = $nationalTaxIncluded;

        return $this;
    }

    /**
     * Gets taxAppliedAfterDiscount
     * @return string
     */
    public function getTaxAppliedAfterDiscount()
    {
        return $this->container['taxAppliedAfterDiscount'];
    }

    /**
     * Sets taxAppliedAfterDiscount
     * @param string $taxAppliedAfterDiscount Flag that indicates how the merchant manages discounts.  Possible values:   - **0**: no invoice level discount included  - **1**: tax calculated on the postdiscount invoice total  - **2**: tax calculated on the prediscount invoice total
     * @return $this
     */
    public function setTaxAppliedAfterDiscount($taxAppliedAfterDiscount)
    {
        $this->container['taxAppliedAfterDiscount'] = $taxAppliedAfterDiscount;

        return $this;
    }

    /**
     * Gets taxAppliedLevel
     * @return string
     */
    public function getTaxAppliedLevel()
    {
        return $this->container['taxAppliedLevel'];
    }

    /**
     * Sets taxAppliedLevel
     * @param string $taxAppliedLevel Flag that indicates how you calculate tax.  Possible values:   - **0**: net prices with tax calculated at line item level  - **1**: net prices with tax calculated at invoice level  - **2**: gross prices with tax provided at line item level  - **3**: gross prices with tax provided at invoice level  - **4**: no tax applies on the invoice for the transaction
     * @return $this
     */
    public function setTaxAppliedLevel($taxAppliedLevel)
    {
        $this->container['taxAppliedLevel'] = $taxAppliedLevel;

        return $this;
    }

    /**
     * Gets taxTypeCode
     * @return string
     */
    public function getTaxTypeCode()
    {
        return $this->container['taxTypeCode'];
    }

    /**
     * Sets taxTypeCode
     * @param string $taxTypeCode For tax amounts that can be categorized as one tax type.  This field contains the tax type code that corresponds to the entry in the _lineItems.taxAmount_ field.  Possible values:   - **056**: sales tax (U.S only)  - **TX~**: all taxes (Canada only)   Note ~ = space.
     * @return $this
     */
    public function setTaxTypeCode($taxTypeCode)
    {
        $this->container['taxTypeCode'] = $taxTypeCode;

        return $this;
    }

    /**
     * Gets freightAmount
     * @return string
     */
    public function getFreightAmount()
    {
        return $this->container['freightAmount'];
    }

    /**
     * Sets freightAmount
     * @param string $freightAmount Total freight or shipping and handling charges for the order. When you include this field in your request, you must also include the **totalAmount** field.  For processor-specific information, see the freight_amount field in [Level II and Level III Processing Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/Level_2_3_SCMP_API/html)
     * @return $this
     */
    public function setFreightAmount($freightAmount)
    {
        $this->container['freightAmount'] = $freightAmount;

        return $this;
    }

    /**
     * Gets foreignAmount
     * @return string
     */
    public function getForeignAmount()
    {
        return $this->container['foreignAmount'];
    }

    /**
     * Sets foreignAmount
     * @param string $foreignAmount Set this field to the converted amount that was returned by the DCC provider. For processor-specific information, see the `foreign_amount` field description in the [Credit Card Services Using the SCMP API Guide.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)
     * @return $this
     */
    public function setForeignAmount($foreignAmount)
    {
        $this->container['foreignAmount'] = $foreignAmount;

        return $this;
    }

    /**
     * Gets foreignCurrency
     * @return string
     */
    public function getForeignCurrency()
    {
        return $this->container['foreignCurrency'];
    }

    /**
     * Sets foreignCurrency
     * @param string $foreignCurrency Set this field to the converted amount that was returned by the DCC provider.
     * @return $this
     */
    public function setForeignCurrency($foreignCurrency)
    {
        $this->container['foreignCurrency'] = $foreignCurrency;

        return $this;
    }

    /**
     * Gets exchangeRate
     * @return string
     */
    public function getExchangeRate()
    {
        return $this->container['exchangeRate'];
    }

    /**
     * Sets exchangeRate
     * @param string $exchangeRate Exchange rate returned by the DCC service. Includes a decimal point and a maximum of 4 decimal places.  For details, see `exchange_rate` request-level field description in the [Dynamic Currency Conversion For First Data Using the SCMP API](http://apps.cybersource.com/library/documentation/dev_guides/DCC_FirstData_SCMP/DCC_FirstData_SCMP_API.pdf)
     * @return $this
     */
    public function setExchangeRate($exchangeRate)
    {
        $this->container['exchangeRate'] = $exchangeRate;

        return $this;
    }

    /**
     * Gets exchangeRateTimeStamp
     * @return string
     */
    public function getExchangeRateTimeStamp()
    {
        return $this->container['exchangeRateTimeStamp'];
    }

    /**
     * Sets exchangeRateTimeStamp
     * @param string $exchangeRateTimeStamp Time stamp for the exchange rate. This value is returned by the DCC service.  Format: `YYYYMMDD~HH:MM`  where ~ denotes a space.
     * @return $this
     */
    public function setExchangeRateTimeStamp($exchangeRateTimeStamp)
    {
        $this->container['exchangeRateTimeStamp'] = $exchangeRateTimeStamp;

        return $this;
    }

    /**
     * Gets surcharge
     * @return \CyberSource\Model\Ptsv2paymentsOrderInformationAmountDetailsSurcharge
     */
    public function getSurcharge()
    {
        return $this->container['surcharge'];
    }

    /**
     * Sets surcharge
     * @param \CyberSource\Model\Ptsv2paymentsOrderInformationAmountDetailsSurcharge $surcharge
     * @return $this
     */
    public function setSurcharge($surcharge)
    {
        $this->container['surcharge'] = $surcharge;

        return $this;
    }

    /**
     * Gets settlementAmount
     * @return string
     */
    public function getSettlementAmount()
    {
        return $this->container['settlementAmount'];
    }

    /**
     * Sets settlementAmount
     * @param string $settlementAmount This is a multicurrency field. It contains the transaction amount (field 4), converted to the Currency used to bill the cardholder’s account. This field is returned for OCT transactions.
     * @return $this
     */
    public function setSettlementAmount($settlementAmount)
    {
        $this->container['settlementAmount'] = $settlementAmount;

        return $this;
    }

    /**
     * Gets settlementCurrency
     * @return string
     */
    public function getSettlementCurrency()
    {
        return $this->container['settlementCurrency'];
    }

    /**
     * Sets settlementCurrency
     * @param string $settlementCurrency This is a multicurrency-only field. It contains a 3-digit numeric code that identifies the currency used by the issuer to bill the cardholder's account. This field is returned for OCT transactions.
     * @return $this
     */
    public function setSettlementCurrency($settlementCurrency)
    {
        $this->container['settlementCurrency'] = $settlementCurrency;

        return $this;
    }

    /**
     * Gets amexAdditionalAmounts
     * @return \CyberSource\Model\Ptsv2paymentsOrderInformationAmountDetailsAmexAdditionalAmounts[]
     */
    public function getAmexAdditionalAmounts()
    {
        return $this->container['amexAdditionalAmounts'];
    }

    /**
     * Sets amexAdditionalAmounts
     * @param \CyberSource\Model\Ptsv2paymentsOrderInformationAmountDetailsAmexAdditionalAmounts[] $amexAdditionalAmounts
     * @return $this
     */
    public function setAmexAdditionalAmounts($amexAdditionalAmounts)
    {
        $this->container['amexAdditionalAmounts'] = $amexAdditionalAmounts;

        return $this;
    }

    /**
     * Gets taxDetails
     * @return \CyberSource\Model\Ptsv2paymentsOrderInformationAmountDetailsTaxDetails[]
     */
    public function getTaxDetails()
    {
        return $this->container['taxDetails'];
    }

    /**
     * Sets taxDetails
     * @param \CyberSource\Model\Ptsv2paymentsOrderInformationAmountDetailsTaxDetails[] $taxDetails
     * @return $this
     */
    public function setTaxDetails($taxDetails)
    {
        $this->container['taxDetails'] = $taxDetails;

        return $this;
    }

    /**
     * Gets serviceFeeAmount
     * @return string
     */
    public function getServiceFeeAmount()
    {
        return $this->container['serviceFeeAmount'];
    }

    /**
     * Sets serviceFeeAmount
     * @param string $serviceFeeAmount Service fee. Required for service fee transactions.
     * @return $this
     */
    public function setServiceFeeAmount($serviceFeeAmount)
    {
        $this->container['serviceFeeAmount'] = $serviceFeeAmount;

        return $this;
    }

    /**
     * Gets originalAmount
     * @return string
     */
    public function getOriginalAmount()
    {
        return $this->container['originalAmount'];
    }

    /**
     * Sets originalAmount
     * @param string $originalAmount Amount in your original local pricing currency.  This value cannot be negative. You can include a decimal point (.) in this field to denote the currency exponent, but you cannot include any other special characters.  If needed, CyberSource truncates the amount to the correct number of decimal places.
     * @return $this
     */
    public function setOriginalAmount($originalAmount)
    {
        $this->container['originalAmount'] = $originalAmount;

        return $this;
    }

    /**
     * Gets originalCurrency
     * @return string
     */
    public function getOriginalCurrency()
    {
        return $this->container['originalCurrency'];
    }

    /**
     * Sets originalCurrency
     * @param string $originalCurrency Your local pricing currency code.  For the possible values, see the [ISO Standard Currency Codes.](http://apps.cybersource.com/library/documentation/sbc/quickref/currencies.pdf)
     * @return $this
     */
    public function setOriginalCurrency($originalCurrency)
    {
        $this->container['originalCurrency'] = $originalCurrency;

        return $this;
    }

    /**
     * Gets cashbackAmount
     * @return string
     */
    public function getCashbackAmount()
    {
        return $this->container['cashbackAmount'];
    }

    /**
     * Sets cashbackAmount
     * @param string $cashbackAmount Cashback amount in the acquirer’s currency. If a cashback amount is included in the request, it must be included in the `orderInformation.amountDetails.totalAmount` value.  This field is supported only on CyberSource through VisaNet.  #### Used by **Authorization** Optional. **Authorization Reversal** Optional.  #### PIN debit Required field for PIN debit purchase, PIN debit credit or PIN debit reversal.
     * @return $this
     */
    public function setCashbackAmount($cashbackAmount)
    {
        $this->container['cashbackAmount'] = $cashbackAmount;

        return $this;
    }

    /**
     * Gets currencyConversion
     * @return \CyberSource\Model\Ptsv2paymentsOrderInformationAmountDetailsCurrencyConversion
     */
    public function getCurrencyConversion()
    {
        return $this->container['currencyConversion'];
    }

    /**
     * Sets currencyConversion
     * @param \CyberSource\Model\Ptsv2paymentsOrderInformationAmountDetailsCurrencyConversion $currencyConversion
     * @return $this
     */
    public function setCurrencyConversion($currencyConversion)
    {
        $this->container['currencyConversion'] = $currencyConversion;

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


