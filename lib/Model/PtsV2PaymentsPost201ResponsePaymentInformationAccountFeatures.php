<?php
/**
 * PtsV2PaymentsPost201ResponsePaymentInformationAccountFeatures
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
 * PtsV2PaymentsPost201ResponsePaymentInformationAccountFeatures Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PtsV2PaymentsPost201ResponsePaymentInformationAccountFeatures implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsV2PaymentsPost201Response_paymentInformation_accountFeatures';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accountType' => 'string',
        'accountStatus' => 'string',
        'balances' => '\CyberSource\Model\PtsV2PaymentsPost201ResponsePaymentInformationAccountFeaturesBalances[]',
        'balanceAmount' => 'string',
        'balanceAmountType' => 'string',
        'currency' => 'string',
        'balanceSign' => 'string',
        'affluenceIndicator' => 'string',
        'category' => 'string',
        'commercial' => 'string',
        'group' => 'string',
        'healthCare' => 'string',
        'payroll' => 'string',
        'level3Eligible' => 'string',
        'pinlessDebit' => 'string',
        'signatureDebit' => 'string',
        'prepaid' => 'string',
        'regulated' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accountType' => null,
        'accountStatus' => null,
        'balances' => null,
        'balanceAmount' => null,
        'balanceAmountType' => null,
        'currency' => null,
        'balanceSign' => null,
        'affluenceIndicator' => null,
        'category' => null,
        'commercial' => null,
        'group' => null,
        'healthCare' => null,
        'payroll' => null,
        'level3Eligible' => null,
        'pinlessDebit' => null,
        'signatureDebit' => null,
        'prepaid' => null,
        'regulated' => null
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
        'accountType' => 'accountType',
        'accountStatus' => 'accountStatus',
        'balances' => 'balances',
        'balanceAmount' => 'balanceAmount',
        'balanceAmountType' => 'balanceAmountType',
        'currency' => 'currency',
        'balanceSign' => 'balanceSign',
        'affluenceIndicator' => 'affluenceIndicator',
        'category' => 'category',
        'commercial' => 'commercial',
        'group' => 'group',
        'healthCare' => 'healthCare',
        'payroll' => 'payroll',
        'level3Eligible' => 'level3Eligible',
        'pinlessDebit' => 'pinlessDebit',
        'signatureDebit' => 'signatureDebit',
        'prepaid' => 'prepaid',
        'regulated' => 'regulated'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'accountType' => 'setAccountType',
        'accountStatus' => 'setAccountStatus',
        'balances' => 'setBalances',
        'balanceAmount' => 'setBalanceAmount',
        'balanceAmountType' => 'setBalanceAmountType',
        'currency' => 'setCurrency',
        'balanceSign' => 'setBalanceSign',
        'affluenceIndicator' => 'setAffluenceIndicator',
        'category' => 'setCategory',
        'commercial' => 'setCommercial',
        'group' => 'setGroup',
        'healthCare' => 'setHealthCare',
        'payroll' => 'setPayroll',
        'level3Eligible' => 'setLevel3Eligible',
        'pinlessDebit' => 'setPinlessDebit',
        'signatureDebit' => 'setSignatureDebit',
        'prepaid' => 'setPrepaid',
        'regulated' => 'setRegulated'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'accountType' => 'getAccountType',
        'accountStatus' => 'getAccountStatus',
        'balances' => 'getBalances',
        'balanceAmount' => 'getBalanceAmount',
        'balanceAmountType' => 'getBalanceAmountType',
        'currency' => 'getCurrency',
        'balanceSign' => 'getBalanceSign',
        'affluenceIndicator' => 'getAffluenceIndicator',
        'category' => 'getCategory',
        'commercial' => 'getCommercial',
        'group' => 'getGroup',
        'healthCare' => 'getHealthCare',
        'payroll' => 'getPayroll',
        'level3Eligible' => 'getLevel3Eligible',
        'pinlessDebit' => 'getPinlessDebit',
        'signatureDebit' => 'getSignatureDebit',
        'prepaid' => 'getPrepaid',
        'regulated' => 'getRegulated'
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
        $this->container['accountType'] = isset($data['accountType']) ? $data['accountType'] : null;
        $this->container['accountStatus'] = isset($data['accountStatus']) ? $data['accountStatus'] : null;
        $this->container['balances'] = isset($data['balances']) ? $data['balances'] : null;
        $this->container['balanceAmount'] = isset($data['balanceAmount']) ? $data['balanceAmount'] : null;
        $this->container['balanceAmountType'] = isset($data['balanceAmountType']) ? $data['balanceAmountType'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['balanceSign'] = isset($data['balanceSign']) ? $data['balanceSign'] : null;
        $this->container['affluenceIndicator'] = isset($data['affluenceIndicator']) ? $data['affluenceIndicator'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['commercial'] = isset($data['commercial']) ? $data['commercial'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['healthCare'] = isset($data['healthCare']) ? $data['healthCare'] : null;
        $this->container['payroll'] = isset($data['payroll']) ? $data['payroll'] : null;
        $this->container['level3Eligible'] = isset($data['level3Eligible']) ? $data['level3Eligible'] : null;
        $this->container['pinlessDebit'] = isset($data['pinlessDebit']) ? $data['pinlessDebit'] : null;
        $this->container['signatureDebit'] = isset($data['signatureDebit']) ? $data['signatureDebit'] : null;
        $this->container['prepaid'] = isset($data['prepaid']) ? $data['prepaid'] : null;
        $this->container['regulated'] = isset($data['regulated']) ? $data['regulated'] : null;
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
     * Gets accountType
     * @return string
     */
    public function getAccountType()
    {
        return $this->container['accountType'];
    }

    /**
     * Sets accountType
     * @param string $accountType Type of account. This value is returned only if you requested a balance inquiry. Possible values:   - `00`: Not applicable or not specified  - `10`: Savings account  - `20`: Checking account  - `30`: Credit card account  - `40`: Universal account  #### PIN debit Type of account. This value is returned only if you requested a balance inquiry.  Possible values: - `00`: Not applicable or not specified - `10`: Savings account - `20`: Checking account - `40`: Universal account - `96`: Cash benefits account - `98`: Food stamp account  Returned by PIN debit purchase.
     * @return $this
     */
    public function setAccountType($accountType)
    {
        $this->container['accountType'] = $accountType;

        return $this;
    }

    /**
     * Gets accountStatus
     * @return string
     */
    public function getAccountStatus()
    {
        return $this->container['accountStatus'];
    }

    /**
     * Sets accountStatus
     * @param string $accountStatus Possible values: - `N`: Nonregulated - `R`: Regulated  Returned by PIN debit credit or PIN debit purchase.  **Note** This field is returned only for CyberSource through VisaNet.
     * @return $this
     */
    public function setAccountStatus($accountStatus)
    {
        $this->container['accountStatus'] = $accountStatus;

        return $this;
    }

    /**
     * Gets balances
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponsePaymentInformationAccountFeaturesBalances[]
     */
    public function getBalances()
    {
        return $this->container['balances'];
    }

    /**
     * Sets balances
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponsePaymentInformationAccountFeaturesBalances[] $balances This is an array of multiple balances information an issuer can return for a given card.
     * @return $this
     */
    public function setBalances($balances)
    {
        $this->container['balances'] = $balances;

        return $this;
    }

    /**
     * Gets balanceAmount
     * @return string
     */
    public function getBalanceAmount()
    {
        return $this->container['balanceAmount'];
    }

    /**
     * Sets balanceAmount
     * @param string $balanceAmount Remaining balance on the account.  Returned by authorization service.  #### PIN debit Remaining balance on the prepaid card.  Returned by PIN debit purchase.
     * @return $this
     */
    public function setBalanceAmount($balanceAmount)
    {
        $this->container['balanceAmount'] = $balanceAmount;

        return $this;
    }

    /**
     * Gets balanceAmountType
     * @return string
     */
    public function getBalanceAmountType()
    {
        return $this->container['balanceAmountType'];
    }

    /**
     * Sets balanceAmountType
     * @param string $balanceAmountType Type of amount. This value is returned only if you requested a balance inquiry. The issuer determines the value that is returned. Possible values for deposit accounts:   - `01`: Current ledger (posted) balance.  - `02`: Current available balance, which is typically the ledger balance less outstanding authorizations.  Some depository institutions also include pending deposits and the credit or overdraft line associated with the account. Possible values for credit card accounts:   - `01`: Credit amount remaining for customer (open to buy).  - `02`: Credit limit.
     * @return $this
     */
    public function setBalanceAmountType($balanceAmountType)
    {
        $this->container['balanceAmountType'] = $balanceAmountType;

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
     * @param string $currency Currency of the remaining balance on the account. For the possible values, see the [ISO Standard Currency Codes.](http://apps.cybersource.com/library/documentation/sbc/quickref/currencies.pdf)  Returned by authorization service.  #### PIN debit Currency of the remaining balance on the prepaid card.  Returned by PIN debit purchase.
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets balanceSign
     * @return string
     */
    public function getBalanceSign()
    {
        return $this->container['balanceSign'];
    }

    /**
     * Sets balanceSign
     * @param string $balanceSign Sign for the remaining balance on the account. Returned only when the processor returns this value. Possible values:  Possible values: - `Positive` - `Negative`  #### PIN debit Sign for the remaining balance on the prepaid card. Returned only when the processor returns this value.  Returned by PIN debit purchase.
     * @return $this
     */
    public function setBalanceSign($balanceSign)
    {
        $this->container['balanceSign'] = $balanceSign;

        return $this;
    }

    /**
     * Gets affluenceIndicator
     * @return string
     */
    public function getAffluenceIndicator()
    {
        return $this->container['affluenceIndicator'];
    }

    /**
     * Sets affluenceIndicator
     * @param string $affluenceIndicator **Chase Paymentech Solutions**  Indicates whether a customer has high credit limits. This information enables you to market high cost items to these customers and to understand the kinds of cards that high income customers are using.  This field is supported for Visa, Mastercard, Discover, and Diners Club. Possible values:   - `Y`: Yes  - `N`: No  - `X`: Not applicable / Unknown  #### Litle  Flag that indicates that a Visa cardholder or Mastercard cardholder is in one of the affluent categories. Possible values:   - `AFFLUENT`: High income customer with high spending pattern (>100k USD annual income and >40k USD annual    card usage).  - `MASS AFFLUENT`: High income customer (>100k USD annual income).   Maximum length is 13.  #### Chase Paymentech Solutions  Maximum length is 1.
     * @return $this
     */
    public function setAffluenceIndicator($affluenceIndicator)
    {
        $this->container['affluenceIndicator'] = $affluenceIndicator;

        return $this;
    }

    /**
     * Gets category
     * @return string
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     * @param string $category #### GPX Mastercard product ID associated with the primary account number (PAN). Returned by authorization service.  #### CyberSource through VisaNet Visa or Mastercard product ID that is associated with the primary account number (PAN). For descriptions of the Visa product IDs, see the Product ID table on the [Visa Request & Response Codes web page.](https://developer.visa.com/guides/request_response_codes)  Data Length: String (3)  #### GPN Visa or Mastercard product ID that is associated with the primary account number (PAN). For descriptions of the Visa product IDs, see the Product ID table on the [Visa Request & Response Codes web page.](https://developer.visa.com/guides/request_response_codes)  Data Length: String (3)  #### Worldpay VAP **Important** Before using this field on Worldpay VAP, you must contact CyberSource Customer Support to have your account configured for this feature.  Type of card used in the transaction. The only possible value is: - `PREPAID`: Prepaid Card  Data Length: String (7)  #### RBS WorldPay Atlanta Type of card used in the transaction. Possible values: - `B`: Business Card - `O`: Noncommercial Card - `R`: Corporate Card - `S`: Purchase Card - `Blank`: Purchase card not supported  Data Length: String (1)
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets commercial
     * @return string
     */
    public function getCommercial()
    {
        return $this->container['commercial'];
    }

    /**
     * Sets commercial
     * @param string $commercial Indicates whether the card is a commercial card, which enables you to include Level II data in your transaction requests. This field is supported for Visa and Mastercard on **Chase Paymentech Solutions**. Possible values:   - `Y`: Yes  - `N`: No  - `X`: Not applicable / Unknown
     * @return $this
     */
    public function setCommercial($commercial)
    {
        $this->container['commercial'] = $commercial;

        return $this;
    }

    /**
     * Gets group
     * @return string
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     * @param string $group Type of commercial card. This field is supported only for CyberSource through VisaNet. Possible values:   - `B`: Business card  - `R`: Corporate card  - `S`: Purchasing card  - `0`: Noncommercial card  Returned by authorization service.
     * @return $this
     */
    public function setGroup($group)
    {
        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets healthCare
     * @return string
     */
    public function getHealthCare()
    {
        return $this->container['healthCare'];
    }

    /**
     * Sets healthCare
     * @param string $healthCare Indicates whether the card is a healthcare card. This field is supported for Visa and Mastercard on **Chase Paymentech Solutions**. Possible values:   - `Y`: Yes  - `N`: No  - `X`: Not applicable / Unknown
     * @return $this
     */
    public function setHealthCare($healthCare)
    {
        $this->container['healthCare'] = $healthCare;

        return $this;
    }

    /**
     * Gets payroll
     * @return string
     */
    public function getPayroll()
    {
        return $this->container['payroll'];
    }

    /**
     * Sets payroll
     * @param string $payroll Indicates whether the card is a payroll card. This field is supported for Visa, Discover, Diners Club, and JCB on **Chase Paymentech Solutions**. Possible values:   - `Y`: Yes  - `N`: No  - `X`: Not applicable / Unknown
     * @return $this
     */
    public function setPayroll($payroll)
    {
        $this->container['payroll'] = $payroll;

        return $this;
    }

    /**
     * Gets level3Eligible
     * @return string
     */
    public function getLevel3Eligible()
    {
        return $this->container['level3Eligible'];
    }

    /**
     * Sets level3Eligible
     * @param string $level3Eligible Indicates whether the card is eligible for Level III interchange fees, which enables you to include Level III data in your transaction requests. This field is supported for Visa and Mastercard on **Chase Paymentech Solutions**. Possible values:   - `Y`: Yes  - `N`: No  - `X`: Not applicable / Unknown
     * @return $this
     */
    public function setLevel3Eligible($level3Eligible)
    {
        $this->container['level3Eligible'] = $level3Eligible;

        return $this;
    }

    /**
     * Gets pinlessDebit
     * @return string
     */
    public function getPinlessDebit()
    {
        return $this->container['pinlessDebit'];
    }

    /**
     * Sets pinlessDebit
     * @param string $pinlessDebit Indicates whether the card is a PINless debit card. This field is supported for Visa and Mastercard on **Chase Paymentech Solutions**. Possible values:   - `Y`: Yes  - `N`: No  - `X`: Not applicable / Unknown
     * @return $this
     */
    public function setPinlessDebit($pinlessDebit)
    {
        $this->container['pinlessDebit'] = $pinlessDebit;

        return $this;
    }

    /**
     * Gets signatureDebit
     * @return string
     */
    public function getSignatureDebit()
    {
        return $this->container['signatureDebit'];
    }

    /**
     * Sets signatureDebit
     * @param string $signatureDebit Indicates whether the card is a signature debit card.  This information enables you to alter the way an order is processed. For example, you might not want to reauthorize a transaction for a signature debit card, or you might want to perform reversals promptly for a signature debit card. This field is supported for Visa, Mastercard, and Maestro (International) on Chase Paymentech Solutions. Possible values:   - `Y`: Yes  - `N`: No  - `X`: Not applicable / Unknown
     * @return $this
     */
    public function setSignatureDebit($signatureDebit)
    {
        $this->container['signatureDebit'] = $signatureDebit;

        return $this;
    }

    /**
     * Gets prepaid
     * @return string
     */
    public function getPrepaid()
    {
        return $this->container['prepaid'];
    }

    /**
     * Sets prepaid
     * @param string $prepaid Indicates whether the card is a prepaid card. This information enables you to determine when a gift card or prepaid card is presented for use when establishing a new recurring, installment, or deferred billing relationship.  This field is supported for Visa, Mastercard, Discover, Diners Club, and JCB on Chase Paymentech Solutions. Possible values:   - `Y`: Yes  - `N`: No  - `X`: Not applicable / Unknown
     * @return $this
     */
    public function setPrepaid($prepaid)
    {
        $this->container['prepaid'] = $prepaid;

        return $this;
    }

    /**
     * Gets regulated
     * @return string
     */
    public function getRegulated()
    {
        return $this->container['regulated'];
    }

    /**
     * Sets regulated
     * @param string $regulated Indicates whether the card is regulated according to the Durbin Amendment. If the card is regulated, the card issuer is subject to price caps and interchange rules. This field is supported for Visa, Mastercard, Discover, Diners Club, and JCB on Chase Paymentech Solutions. Possible values:   - `Y`: Yes  - `N`: No  - `X`: Not applicable / Unknown
     * @return $this
     */
    public function setRegulated($regulated)
    {
        $this->container['regulated'] = $regulated;

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


