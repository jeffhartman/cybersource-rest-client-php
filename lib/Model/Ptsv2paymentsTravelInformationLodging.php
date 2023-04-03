<?php
/**
 * Ptsv2paymentsTravelInformationLodging
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
 * Ptsv2paymentsTravelInformationLodging Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2paymentsTravelInformationLodging implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2payments_travelInformation_lodging';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'checkInDate' => 'string',
        'checkOutDate' => 'string',
        'room' => '\CyberSource\Model\Ptsv2paymentsTravelInformationLodgingRoom[]',
        'smokingPreference' => 'string',
        'numberOfRooms' => 'int',
        'numberOfGuests' => 'int',
        'roomBedType' => 'string',
        'roomTaxType' => 'string',
        'roomRateType' => 'string',
        'guestName' => 'string',
        'customerServicePhoneNumber' => 'string',
        'corporateClientCode' => 'string',
        'additionalDiscountAmount' => 'string',
        'roomLocation' => 'string',
        'specialProgramCode' => 'string',
        'totalTaxAmount' => 'string',
        'prepaidCost' => 'string',
        'foodAndBeverageCost' => 'string',
        'roomTaxAmount' => 'string',
        'adjustmentAmount' => 'string',
        'phoneCost' => 'string',
        'restaurantCost' => 'string',
        'roomServiceCost' => 'string',
        'miniBarCost' => 'string',
        'laundryCost' => 'string',
        'miscellaneousCost' => 'string',
        'giftShopCost' => 'string',
        'movieCost' => 'string',
        'healthClubCost' => 'string',
        'valetParkingCost' => 'string',
        'cashDisbursementCost' => 'string',
        'nonRoomCost' => 'string',
        'businessCenterCost' => 'string',
        'loungeBarCost' => 'string',
        'transportationCost' => 'string',
        'gratuityAmount' => 'string',
        'conferenceRoomCost' => 'string',
        'audioVisualCost' => 'string',
        'banquestCost' => 'string',
        'nonRoomTaxAmount' => 'string',
        'earlyCheckOutCost' => 'string',
        'internetAccessCost' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'checkInDate' => null,
        'checkOutDate' => null,
        'room' => null,
        'smokingPreference' => null,
        'numberOfRooms' => null,
        'numberOfGuests' => null,
        'roomBedType' => null,
        'roomTaxType' => null,
        'roomRateType' => null,
        'guestName' => null,
        'customerServicePhoneNumber' => null,
        'corporateClientCode' => null,
        'additionalDiscountAmount' => null,
        'roomLocation' => null,
        'specialProgramCode' => null,
        'totalTaxAmount' => null,
        'prepaidCost' => null,
        'foodAndBeverageCost' => null,
        'roomTaxAmount' => null,
        'adjustmentAmount' => null,
        'phoneCost' => null,
        'restaurantCost' => null,
        'roomServiceCost' => null,
        'miniBarCost' => null,
        'laundryCost' => null,
        'miscellaneousCost' => null,
        'giftShopCost' => null,
        'movieCost' => null,
        'healthClubCost' => null,
        'valetParkingCost' => null,
        'cashDisbursementCost' => null,
        'nonRoomCost' => null,
        'businessCenterCost' => null,
        'loungeBarCost' => null,
        'transportationCost' => null,
        'gratuityAmount' => null,
        'conferenceRoomCost' => null,
        'audioVisualCost' => null,
        'banquestCost' => null,
        'nonRoomTaxAmount' => null,
        'earlyCheckOutCost' => null,
        'internetAccessCost' => null
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
        'checkInDate' => 'checkInDate',
        'checkOutDate' => 'checkOutDate',
        'room' => 'room',
        'smokingPreference' => 'smokingPreference',
        'numberOfRooms' => 'numberOfRooms',
        'numberOfGuests' => 'numberOfGuests',
        'roomBedType' => 'roomBedType',
        'roomTaxType' => 'roomTaxType',
        'roomRateType' => 'roomRateType',
        'guestName' => 'guestName',
        'customerServicePhoneNumber' => 'customerServicePhoneNumber',
        'corporateClientCode' => 'corporateClientCode',
        'additionalDiscountAmount' => 'additionalDiscountAmount',
        'roomLocation' => 'roomLocation',
        'specialProgramCode' => 'specialProgramCode',
        'totalTaxAmount' => 'totalTaxAmount',
        'prepaidCost' => 'prepaidCost',
        'foodAndBeverageCost' => 'foodAndBeverageCost',
        'roomTaxAmount' => 'roomTaxAmount',
        'adjustmentAmount' => 'adjustmentAmount',
        'phoneCost' => 'phoneCost',
        'restaurantCost' => 'restaurantCost',
        'roomServiceCost' => 'roomServiceCost',
        'miniBarCost' => 'miniBarCost',
        'laundryCost' => 'laundryCost',
        'miscellaneousCost' => 'miscellaneousCost',
        'giftShopCost' => 'giftShopCost',
        'movieCost' => 'movieCost',
        'healthClubCost' => 'healthClubCost',
        'valetParkingCost' => 'valetParkingCost',
        'cashDisbursementCost' => 'cashDisbursementCost',
        'nonRoomCost' => 'nonRoomCost',
        'businessCenterCost' => 'businessCenterCost',
        'loungeBarCost' => 'loungeBarCost',
        'transportationCost' => 'transportationCost',
        'gratuityAmount' => 'gratuityAmount',
        'conferenceRoomCost' => 'conferenceRoomCost',
        'audioVisualCost' => 'audioVisualCost',
        'banquestCost' => 'banquestCost',
        'nonRoomTaxAmount' => 'nonRoomTaxAmount',
        'earlyCheckOutCost' => 'earlyCheckOutCost',
        'internetAccessCost' => 'internetAccessCost'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'checkInDate' => 'setCheckInDate',
        'checkOutDate' => 'setCheckOutDate',
        'room' => 'setRoom',
        'smokingPreference' => 'setSmokingPreference',
        'numberOfRooms' => 'setNumberOfRooms',
        'numberOfGuests' => 'setNumberOfGuests',
        'roomBedType' => 'setRoomBedType',
        'roomTaxType' => 'setRoomTaxType',
        'roomRateType' => 'setRoomRateType',
        'guestName' => 'setGuestName',
        'customerServicePhoneNumber' => 'setCustomerServicePhoneNumber',
        'corporateClientCode' => 'setCorporateClientCode',
        'additionalDiscountAmount' => 'setAdditionalDiscountAmount',
        'roomLocation' => 'setRoomLocation',
        'specialProgramCode' => 'setSpecialProgramCode',
        'totalTaxAmount' => 'setTotalTaxAmount',
        'prepaidCost' => 'setPrepaidCost',
        'foodAndBeverageCost' => 'setFoodAndBeverageCost',
        'roomTaxAmount' => 'setRoomTaxAmount',
        'adjustmentAmount' => 'setAdjustmentAmount',
        'phoneCost' => 'setPhoneCost',
        'restaurantCost' => 'setRestaurantCost',
        'roomServiceCost' => 'setRoomServiceCost',
        'miniBarCost' => 'setMiniBarCost',
        'laundryCost' => 'setLaundryCost',
        'miscellaneousCost' => 'setMiscellaneousCost',
        'giftShopCost' => 'setGiftShopCost',
        'movieCost' => 'setMovieCost',
        'healthClubCost' => 'setHealthClubCost',
        'valetParkingCost' => 'setValetParkingCost',
        'cashDisbursementCost' => 'setCashDisbursementCost',
        'nonRoomCost' => 'setNonRoomCost',
        'businessCenterCost' => 'setBusinessCenterCost',
        'loungeBarCost' => 'setLoungeBarCost',
        'transportationCost' => 'setTransportationCost',
        'gratuityAmount' => 'setGratuityAmount',
        'conferenceRoomCost' => 'setConferenceRoomCost',
        'audioVisualCost' => 'setAudioVisualCost',
        'banquestCost' => 'setBanquestCost',
        'nonRoomTaxAmount' => 'setNonRoomTaxAmount',
        'earlyCheckOutCost' => 'setEarlyCheckOutCost',
        'internetAccessCost' => 'setInternetAccessCost'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'checkInDate' => 'getCheckInDate',
        'checkOutDate' => 'getCheckOutDate',
        'room' => 'getRoom',
        'smokingPreference' => 'getSmokingPreference',
        'numberOfRooms' => 'getNumberOfRooms',
        'numberOfGuests' => 'getNumberOfGuests',
        'roomBedType' => 'getRoomBedType',
        'roomTaxType' => 'getRoomTaxType',
        'roomRateType' => 'getRoomRateType',
        'guestName' => 'getGuestName',
        'customerServicePhoneNumber' => 'getCustomerServicePhoneNumber',
        'corporateClientCode' => 'getCorporateClientCode',
        'additionalDiscountAmount' => 'getAdditionalDiscountAmount',
        'roomLocation' => 'getRoomLocation',
        'specialProgramCode' => 'getSpecialProgramCode',
        'totalTaxAmount' => 'getTotalTaxAmount',
        'prepaidCost' => 'getPrepaidCost',
        'foodAndBeverageCost' => 'getFoodAndBeverageCost',
        'roomTaxAmount' => 'getRoomTaxAmount',
        'adjustmentAmount' => 'getAdjustmentAmount',
        'phoneCost' => 'getPhoneCost',
        'restaurantCost' => 'getRestaurantCost',
        'roomServiceCost' => 'getRoomServiceCost',
        'miniBarCost' => 'getMiniBarCost',
        'laundryCost' => 'getLaundryCost',
        'miscellaneousCost' => 'getMiscellaneousCost',
        'giftShopCost' => 'getGiftShopCost',
        'movieCost' => 'getMovieCost',
        'healthClubCost' => 'getHealthClubCost',
        'valetParkingCost' => 'getValetParkingCost',
        'cashDisbursementCost' => 'getCashDisbursementCost',
        'nonRoomCost' => 'getNonRoomCost',
        'businessCenterCost' => 'getBusinessCenterCost',
        'loungeBarCost' => 'getLoungeBarCost',
        'transportationCost' => 'getTransportationCost',
        'gratuityAmount' => 'getGratuityAmount',
        'conferenceRoomCost' => 'getConferenceRoomCost',
        'audioVisualCost' => 'getAudioVisualCost',
        'banquestCost' => 'getBanquestCost',
        'nonRoomTaxAmount' => 'getNonRoomTaxAmount',
        'earlyCheckOutCost' => 'getEarlyCheckOutCost',
        'internetAccessCost' => 'getInternetAccessCost'
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
        $this->container['checkInDate'] = isset($data['checkInDate']) ? $data['checkInDate'] : null;
        $this->container['checkOutDate'] = isset($data['checkOutDate']) ? $data['checkOutDate'] : null;
        $this->container['room'] = isset($data['room']) ? $data['room'] : null;
        $this->container['smokingPreference'] = isset($data['smokingPreference']) ? $data['smokingPreference'] : null;
        $this->container['numberOfRooms'] = isset($data['numberOfRooms']) ? $data['numberOfRooms'] : null;
        $this->container['numberOfGuests'] = isset($data['numberOfGuests']) ? $data['numberOfGuests'] : null;
        $this->container['roomBedType'] = isset($data['roomBedType']) ? $data['roomBedType'] : null;
        $this->container['roomTaxType'] = isset($data['roomTaxType']) ? $data['roomTaxType'] : null;
        $this->container['roomRateType'] = isset($data['roomRateType']) ? $data['roomRateType'] : null;
        $this->container['guestName'] = isset($data['guestName']) ? $data['guestName'] : null;
        $this->container['customerServicePhoneNumber'] = isset($data['customerServicePhoneNumber']) ? $data['customerServicePhoneNumber'] : null;
        $this->container['corporateClientCode'] = isset($data['corporateClientCode']) ? $data['corporateClientCode'] : null;
        $this->container['additionalDiscountAmount'] = isset($data['additionalDiscountAmount']) ? $data['additionalDiscountAmount'] : null;
        $this->container['roomLocation'] = isset($data['roomLocation']) ? $data['roomLocation'] : null;
        $this->container['specialProgramCode'] = isset($data['specialProgramCode']) ? $data['specialProgramCode'] : null;
        $this->container['totalTaxAmount'] = isset($data['totalTaxAmount']) ? $data['totalTaxAmount'] : null;
        $this->container['prepaidCost'] = isset($data['prepaidCost']) ? $data['prepaidCost'] : null;
        $this->container['foodAndBeverageCost'] = isset($data['foodAndBeverageCost']) ? $data['foodAndBeverageCost'] : null;
        $this->container['roomTaxAmount'] = isset($data['roomTaxAmount']) ? $data['roomTaxAmount'] : null;
        $this->container['adjustmentAmount'] = isset($data['adjustmentAmount']) ? $data['adjustmentAmount'] : null;
        $this->container['phoneCost'] = isset($data['phoneCost']) ? $data['phoneCost'] : null;
        $this->container['restaurantCost'] = isset($data['restaurantCost']) ? $data['restaurantCost'] : null;
        $this->container['roomServiceCost'] = isset($data['roomServiceCost']) ? $data['roomServiceCost'] : null;
        $this->container['miniBarCost'] = isset($data['miniBarCost']) ? $data['miniBarCost'] : null;
        $this->container['laundryCost'] = isset($data['laundryCost']) ? $data['laundryCost'] : null;
        $this->container['miscellaneousCost'] = isset($data['miscellaneousCost']) ? $data['miscellaneousCost'] : null;
        $this->container['giftShopCost'] = isset($data['giftShopCost']) ? $data['giftShopCost'] : null;
        $this->container['movieCost'] = isset($data['movieCost']) ? $data['movieCost'] : null;
        $this->container['healthClubCost'] = isset($data['healthClubCost']) ? $data['healthClubCost'] : null;
        $this->container['valetParkingCost'] = isset($data['valetParkingCost']) ? $data['valetParkingCost'] : null;
        $this->container['cashDisbursementCost'] = isset($data['cashDisbursementCost']) ? $data['cashDisbursementCost'] : null;
        $this->container['nonRoomCost'] = isset($data['nonRoomCost']) ? $data['nonRoomCost'] : null;
        $this->container['businessCenterCost'] = isset($data['businessCenterCost']) ? $data['businessCenterCost'] : null;
        $this->container['loungeBarCost'] = isset($data['loungeBarCost']) ? $data['loungeBarCost'] : null;
        $this->container['transportationCost'] = isset($data['transportationCost']) ? $data['transportationCost'] : null;
        $this->container['gratuityAmount'] = isset($data['gratuityAmount']) ? $data['gratuityAmount'] : null;
        $this->container['conferenceRoomCost'] = isset($data['conferenceRoomCost']) ? $data['conferenceRoomCost'] : null;
        $this->container['audioVisualCost'] = isset($data['audioVisualCost']) ? $data['audioVisualCost'] : null;
        $this->container['banquestCost'] = isset($data['banquestCost']) ? $data['banquestCost'] : null;
        $this->container['nonRoomTaxAmount'] = isset($data['nonRoomTaxAmount']) ? $data['nonRoomTaxAmount'] : null;
        $this->container['earlyCheckOutCost'] = isset($data['earlyCheckOutCost']) ? $data['earlyCheckOutCost'] : null;
        $this->container['internetAccessCost'] = isset($data['internetAccessCost']) ? $data['internetAccessCost'] : null;
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
     * Gets checkInDate
     * @return string
     */
    public function getCheckInDate()
    {
        return $this->container['checkInDate'];
    }

    /**
     * Sets checkInDate
     * @param string $checkInDate Date on which the guest checked in. In the case of a no-show or a reservation, the scheduled arrival date. Format: `MMDDYY`. For best interchange rates, make sure it is a valid date.
     * @return $this
     */
    public function setCheckInDate($checkInDate)
    {
        $this->container['checkInDate'] = $checkInDate;

        return $this;
    }

    /**
     * Gets checkOutDate
     * @return string
     */
    public function getCheckOutDate()
    {
        return $this->container['checkOutDate'];
    }

    /**
     * Sets checkOutDate
     * @param string $checkOutDate Date on which the guest checked out. Format: `MMDDYY`. For best interchange rates, make sure it is a valid date.
     * @return $this
     */
    public function setCheckOutDate($checkOutDate)
    {
        $this->container['checkOutDate'] = $checkOutDate;

        return $this;
    }

    /**
     * Gets room
     * @return \CyberSource\Model\Ptsv2paymentsTravelInformationLodgingRoom[]
     */
    public function getRoom()
    {
        return $this->container['room'];
    }

    /**
     * Sets room
     * @param \CyberSource\Model\Ptsv2paymentsTravelInformationLodgingRoom[] $room The object containing the number of nights and the daily rate that applies for that no of nights.
     * @return $this
     */
    public function setRoom($room)
    {
        $this->container['room'] = $room;

        return $this;
    }

    /**
     * Gets smokingPreference
     * @return string
     */
    public function getSmokingPreference()
    {
        return $this->container['smokingPreference'];
    }

    /**
     * Sets smokingPreference
     * @param string $smokingPreference Smoking preference of the guest. Possible values: - `Y`: smoking room - `N`: non-smoking room
     * @return $this
     */
    public function setSmokingPreference($smokingPreference)
    {
        $this->container['smokingPreference'] = $smokingPreference;

        return $this;
    }

    /**
     * Gets numberOfRooms
     * @return int
     */
    public function getNumberOfRooms()
    {
        return $this->container['numberOfRooms'];
    }

    /**
     * Sets numberOfRooms
     * @param int $numberOfRooms Number of rooms booked by the cardholder.
     * @return $this
     */
    public function setNumberOfRooms($numberOfRooms)
    {
        $this->container['numberOfRooms'] = $numberOfRooms;

        return $this;
    }

    /**
     * Gets numberOfGuests
     * @return int
     */
    public function getNumberOfGuests()
    {
        return $this->container['numberOfGuests'];
    }

    /**
     * Sets numberOfGuests
     * @param int $numberOfGuests Number of guests staying in the room.
     * @return $this
     */
    public function setNumberOfGuests($numberOfGuests)
    {
        $this->container['numberOfGuests'] = $numberOfGuests;

        return $this;
    }

    /**
     * Gets roomBedType
     * @return string
     */
    public function getRoomBedType()
    {
        return $this->container['roomBedType'];
    }

    /**
     * Sets roomBedType
     * @param string $roomBedType Type of room, such as queen, king, or two doubles.
     * @return $this
     */
    public function setRoomBedType($roomBedType)
    {
        $this->container['roomBedType'] = $roomBedType;

        return $this;
    }

    /**
     * Gets roomTaxType
     * @return string
     */
    public function getRoomTaxType()
    {
        return $this->container['roomTaxType'];
    }

    /**
     * Sets roomTaxType
     * @param string $roomTaxType Type of tax, such as tourist or hotel.
     * @return $this
     */
    public function setRoomTaxType($roomTaxType)
    {
        $this->container['roomTaxType'] = $roomTaxType;

        return $this;
    }

    /**
     * Gets roomRateType
     * @return string
     */
    public function getRoomRateType()
    {
        return $this->container['roomRateType'];
    }

    /**
     * Sets roomRateType
     * @param string $roomRateType Type of rate, such as corporate or senior citizen.
     * @return $this
     */
    public function setRoomRateType($roomRateType)
    {
        $this->container['roomRateType'] = $roomRateType;

        return $this;
    }

    /**
     * Gets guestName
     * @return string
     */
    public function getGuestName()
    {
        return $this->container['guestName'];
    }

    /**
     * Sets guestName
     * @param string $guestName Name of the guest under which the room is reserved.
     * @return $this
     */
    public function setGuestName($guestName)
    {
        $this->container['guestName'] = $guestName;

        return $this;
    }

    /**
     * Gets customerServicePhoneNumber
     * @return string
     */
    public function getCustomerServicePhoneNumber()
    {
        return $this->container['customerServicePhoneNumber'];
    }

    /**
     * Sets customerServicePhoneNumber
     * @param string $customerServicePhoneNumber Your toll-free customer service phone number.
     * @return $this
     */
    public function setCustomerServicePhoneNumber($customerServicePhoneNumber)
    {
        $this->container['customerServicePhoneNumber'] = $customerServicePhoneNumber;

        return $this;
    }

    /**
     * Gets corporateClientCode
     * @return string
     */
    public function getCorporateClientCode()
    {
        return $this->container['corporateClientCode'];
    }

    /**
     * Sets corporateClientCode
     * @param string $corporateClientCode Code assigned to a business. You can use this code to identify corporate rates and discounts for guests.
     * @return $this
     */
    public function setCorporateClientCode($corporateClientCode)
    {
        $this->container['corporateClientCode'] = $corporateClientCode;

        return $this;
    }

    /**
     * Gets additionalDiscountAmount
     * @return string
     */
    public function getAdditionalDiscountAmount()
    {
        return $this->container['additionalDiscountAmount'];
    }

    /**
     * Sets additionalDiscountAmount
     * @param string $additionalDiscountAmount Amount of an additional coupon or discount.
     * @return $this
     */
    public function setAdditionalDiscountAmount($additionalDiscountAmount)
    {
        $this->container['additionalDiscountAmount'] = $additionalDiscountAmount;

        return $this;
    }

    /**
     * Gets roomLocation
     * @return string
     */
    public function getRoomLocation()
    {
        return $this->container['roomLocation'];
    }

    /**
     * Sets roomLocation
     * @param string $roomLocation Location of room, such as lake view or ocean view.
     * @return $this
     */
    public function setRoomLocation($roomLocation)
    {
        $this->container['roomLocation'] = $roomLocation;

        return $this;
    }

    /**
     * Gets specialProgramCode
     * @return string
     */
    public function getSpecialProgramCode()
    {
        return $this->container['specialProgramCode'];
    }

    /**
     * Sets specialProgramCode
     * @param string $specialProgramCode Code that identifies special circumstances. Possible values: - `1`: lodging (default) - `2`: no show reservation - `3`: advanced deposit
     * @return $this
     */
    public function setSpecialProgramCode($specialProgramCode)
    {
        $this->container['specialProgramCode'] = $specialProgramCode;

        return $this;
    }

    /**
     * Gets totalTaxAmount
     * @return string
     */
    public function getTotalTaxAmount()
    {
        return $this->container['totalTaxAmount'];
    }

    /**
     * Sets totalTaxAmount
     * @param string $totalTaxAmount Total tax amount.
     * @return $this
     */
    public function setTotalTaxAmount($totalTaxAmount)
    {
        $this->container['totalTaxAmount'] = $totalTaxAmount;

        return $this;
    }

    /**
     * Gets prepaidCost
     * @return string
     */
    public function getPrepaidCost()
    {
        return $this->container['prepaidCost'];
    }

    /**
     * Sets prepaidCost
     * @param string $prepaidCost Prepaid amount, such as a deposit.
     * @return $this
     */
    public function setPrepaidCost($prepaidCost)
    {
        $this->container['prepaidCost'] = $prepaidCost;

        return $this;
    }

    /**
     * Gets foodAndBeverageCost
     * @return string
     */
    public function getFoodAndBeverageCost()
    {
        return $this->container['foodAndBeverageCost'];
    }

    /**
     * Sets foodAndBeverageCost
     * @param string $foodAndBeverageCost Cost for all food and beverages.
     * @return $this
     */
    public function setFoodAndBeverageCost($foodAndBeverageCost)
    {
        $this->container['foodAndBeverageCost'] = $foodAndBeverageCost;

        return $this;
    }

    /**
     * Gets roomTaxAmount
     * @return string
     */
    public function getRoomTaxAmount()
    {
        return $this->container['roomTaxAmount'];
    }

    /**
     * Sets roomTaxAmount
     * @param string $roomTaxAmount Total tax for the room.
     * @return $this
     */
    public function setRoomTaxAmount($roomTaxAmount)
    {
        $this->container['roomTaxAmount'] = $roomTaxAmount;

        return $this;
    }

    /**
     * Gets adjustmentAmount
     * @return string
     */
    public function getAdjustmentAmount()
    {
        return $this->container['adjustmentAmount'];
    }

    /**
     * Sets adjustmentAmount
     * @param string $adjustmentAmount Adjusted amount charged in addition to the reservation amount after the stay is complete.
     * @return $this
     */
    public function setAdjustmentAmount($adjustmentAmount)
    {
        $this->container['adjustmentAmount'] = $adjustmentAmount;

        return $this;
    }

    /**
     * Gets phoneCost
     * @return string
     */
    public function getPhoneCost()
    {
        return $this->container['phoneCost'];
    }

    /**
     * Sets phoneCost
     * @param string $phoneCost Cost of telephone services.
     * @return $this
     */
    public function setPhoneCost($phoneCost)
    {
        $this->container['phoneCost'] = $phoneCost;

        return $this;
    }

    /**
     * Gets restaurantCost
     * @return string
     */
    public function getRestaurantCost()
    {
        return $this->container['restaurantCost'];
    }

    /**
     * Sets restaurantCost
     * @param string $restaurantCost Cost of restaurant purchases
     * @return $this
     */
    public function setRestaurantCost($restaurantCost)
    {
        $this->container['restaurantCost'] = $restaurantCost;

        return $this;
    }

    /**
     * Gets roomServiceCost
     * @return string
     */
    public function getRoomServiceCost()
    {
        return $this->container['roomServiceCost'];
    }

    /**
     * Sets roomServiceCost
     * @param string $roomServiceCost Cost of room service.
     * @return $this
     */
    public function setRoomServiceCost($roomServiceCost)
    {
        $this->container['roomServiceCost'] = $roomServiceCost;

        return $this;
    }

    /**
     * Gets miniBarCost
     * @return string
     */
    public function getMiniBarCost()
    {
        return $this->container['miniBarCost'];
    }

    /**
     * Sets miniBarCost
     * @param string $miniBarCost Cost of mini-bar purchases.
     * @return $this
     */
    public function setMiniBarCost($miniBarCost)
    {
        $this->container['miniBarCost'] = $miniBarCost;

        return $this;
    }

    /**
     * Gets laundryCost
     * @return string
     */
    public function getLaundryCost()
    {
        return $this->container['laundryCost'];
    }

    /**
     * Sets laundryCost
     * @param string $laundryCost Cost of laundry services.
     * @return $this
     */
    public function setLaundryCost($laundryCost)
    {
        $this->container['laundryCost'] = $laundryCost;

        return $this;
    }

    /**
     * Gets miscellaneousCost
     * @return string
     */
    public function getMiscellaneousCost()
    {
        return $this->container['miscellaneousCost'];
    }

    /**
     * Sets miscellaneousCost
     * @param string $miscellaneousCost Miscellaneous costs.
     * @return $this
     */
    public function setMiscellaneousCost($miscellaneousCost)
    {
        $this->container['miscellaneousCost'] = $miscellaneousCost;

        return $this;
    }

    /**
     * Gets giftShopCost
     * @return string
     */
    public function getGiftShopCost()
    {
        return $this->container['giftShopCost'];
    }

    /**
     * Sets giftShopCost
     * @param string $giftShopCost Cost of gift shop purchases.
     * @return $this
     */
    public function setGiftShopCost($giftShopCost)
    {
        $this->container['giftShopCost'] = $giftShopCost;

        return $this;
    }

    /**
     * Gets movieCost
     * @return string
     */
    public function getMovieCost()
    {
        return $this->container['movieCost'];
    }

    /**
     * Sets movieCost
     * @param string $movieCost Cost of movies.
     * @return $this
     */
    public function setMovieCost($movieCost)
    {
        $this->container['movieCost'] = $movieCost;

        return $this;
    }

    /**
     * Gets healthClubCost
     * @return string
     */
    public function getHealthClubCost()
    {
        return $this->container['healthClubCost'];
    }

    /**
     * Sets healthClubCost
     * @param string $healthClubCost Cost of health club services.
     * @return $this
     */
    public function setHealthClubCost($healthClubCost)
    {
        $this->container['healthClubCost'] = $healthClubCost;

        return $this;
    }

    /**
     * Gets valetParkingCost
     * @return string
     */
    public function getValetParkingCost()
    {
        return $this->container['valetParkingCost'];
    }

    /**
     * Sets valetParkingCost
     * @param string $valetParkingCost Cost of valet parking services.
     * @return $this
     */
    public function setValetParkingCost($valetParkingCost)
    {
        $this->container['valetParkingCost'] = $valetParkingCost;

        return $this;
    }

    /**
     * Gets cashDisbursementCost
     * @return string
     */
    public function getCashDisbursementCost()
    {
        return $this->container['cashDisbursementCost'];
    }

    /**
     * Sets cashDisbursementCost
     * @param string $cashDisbursementCost Cost of the cash that was disbursed plus any associated service fees
     * @return $this
     */
    public function setCashDisbursementCost($cashDisbursementCost)
    {
        $this->container['cashDisbursementCost'] = $cashDisbursementCost;

        return $this;
    }

    /**
     * Gets nonRoomCost
     * @return string
     */
    public function getNonRoomCost()
    {
        return $this->container['nonRoomCost'];
    }

    /**
     * Sets nonRoomCost
     * @param string $nonRoomCost Cost of non-room purchases, such as meals and gifts.
     * @return $this
     */
    public function setNonRoomCost($nonRoomCost)
    {
        $this->container['nonRoomCost'] = $nonRoomCost;

        return $this;
    }

    /**
     * Gets businessCenterCost
     * @return string
     */
    public function getBusinessCenterCost()
    {
        return $this->container['businessCenterCost'];
    }

    /**
     * Sets businessCenterCost
     * @param string $businessCenterCost Cost of business center services.
     * @return $this
     */
    public function setBusinessCenterCost($businessCenterCost)
    {
        $this->container['businessCenterCost'] = $businessCenterCost;

        return $this;
    }

    /**
     * Gets loungeBarCost
     * @return string
     */
    public function getLoungeBarCost()
    {
        return $this->container['loungeBarCost'];
    }

    /**
     * Sets loungeBarCost
     * @param string $loungeBarCost Cost of lounge and bar purchases.
     * @return $this
     */
    public function setLoungeBarCost($loungeBarCost)
    {
        $this->container['loungeBarCost'] = $loungeBarCost;

        return $this;
    }

    /**
     * Gets transportationCost
     * @return string
     */
    public function getTransportationCost()
    {
        return $this->container['transportationCost'];
    }

    /**
     * Sets transportationCost
     * @param string $transportationCost Cost of transportation services.
     * @return $this
     */
    public function setTransportationCost($transportationCost)
    {
        $this->container['transportationCost'] = $transportationCost;

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
     * @param string $gratuityAmount Gratuity.
     * @return $this
     */
    public function setGratuityAmount($gratuityAmount)
    {
        $this->container['gratuityAmount'] = $gratuityAmount;

        return $this;
    }

    /**
     * Gets conferenceRoomCost
     * @return string
     */
    public function getConferenceRoomCost()
    {
        return $this->container['conferenceRoomCost'];
    }

    /**
     * Sets conferenceRoomCost
     * @param string $conferenceRoomCost Cost of conference room services.
     * @return $this
     */
    public function setConferenceRoomCost($conferenceRoomCost)
    {
        $this->container['conferenceRoomCost'] = $conferenceRoomCost;

        return $this;
    }

    /**
     * Gets audioVisualCost
     * @return string
     */
    public function getAudioVisualCost()
    {
        return $this->container['audioVisualCost'];
    }

    /**
     * Sets audioVisualCost
     * @param string $audioVisualCost Cost of audio visual services.
     * @return $this
     */
    public function setAudioVisualCost($audioVisualCost)
    {
        $this->container['audioVisualCost'] = $audioVisualCost;

        return $this;
    }

    /**
     * Gets banquestCost
     * @return string
     */
    public function getBanquestCost()
    {
        return $this->container['banquestCost'];
    }

    /**
     * Sets banquestCost
     * @param string $banquestCost Cost of banquet services.
     * @return $this
     */
    public function setBanquestCost($banquestCost)
    {
        $this->container['banquestCost'] = $banquestCost;

        return $this;
    }

    /**
     * Gets nonRoomTaxAmount
     * @return string
     */
    public function getNonRoomTaxAmount()
    {
        return $this->container['nonRoomTaxAmount'];
    }

    /**
     * Sets nonRoomTaxAmount
     * @param string $nonRoomTaxAmount Tax on non-room purchases.
     * @return $this
     */
    public function setNonRoomTaxAmount($nonRoomTaxAmount)
    {
        $this->container['nonRoomTaxAmount'] = $nonRoomTaxAmount;

        return $this;
    }

    /**
     * Gets earlyCheckOutCost
     * @return string
     */
    public function getEarlyCheckOutCost()
    {
        return $this->container['earlyCheckOutCost'];
    }

    /**
     * Sets earlyCheckOutCost
     * @param string $earlyCheckOutCost Service fee for early departure.
     * @return $this
     */
    public function setEarlyCheckOutCost($earlyCheckOutCost)
    {
        $this->container['earlyCheckOutCost'] = $earlyCheckOutCost;

        return $this;
    }

    /**
     * Gets internetAccessCost
     * @return string
     */
    public function getInternetAccessCost()
    {
        return $this->container['internetAccessCost'];
    }

    /**
     * Sets internetAccessCost
     * @param string $internetAccessCost Cost of Internet access.
     * @return $this
     */
    public function setInternetAccessCost($internetAccessCost)
    {
        $this->container['internetAccessCost'] = $internetAccessCost;

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


