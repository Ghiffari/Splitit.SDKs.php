<?php
/**
 * SystemTextCategory
 *
 * PHP version 5
 *
 * @category Class
 * @package  SplititSdkClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * splitit-web-api-public-sdk
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.12
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SplititSdkClient\Model;
use \SplititSdkClient\ObjectSerializer;

/**
 * SystemTextCategory Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  SplititSdkClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SystemTextCategory
{
    /**
     * Possible values of this enum
     */
    const TERMS_AND_CONDITIONS = 'TermsAndConditions';
    const EMAIL_CONTENT = 'EmailContent';
    const ERROR = 'Error';
    const EMAIL_TEMPLATE = 'EmailTemplate';
    const ADMINISTRATION_POTRAL = 'AdministrationPotral';
    const RECEIPT = 'Receipt';
    const INSTALLMENT_PLAN_STATUS = 'InstallmentPlanStatus';
    const INSTALLMENT_STATUS = 'InstallmentStatus';
    const PURCHASE_METHOD = 'PurchaseMethod';
    const OPERATION_TYPE = 'OperationType';
    const CARD_BRAND = 'CardBrand';
    const PAYMENT_DETAILS = 'PaymentDetails';
    const COMMON = 'Common';
    const V_POS = 'VPos';
    const PAYMENT_TRANSACTION_SHOPPER_MESSAGE = 'PaymentTransactionShopperMessage';
    const TERMS_AND_CONDITIONS_LEGAL = 'TermsAndConditionsLegal';
    const ECOMM = 'Ecomm';
    const SHOPPER_SPLITIT_ACCOUNT = 'ShopperSplititAccount';
    const SMS_CONTENT = 'SMSContent';
    const POS = 'POS';
    const FLEX_FIELDS = 'FlexFields';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::TERMS_AND_CONDITIONS,
            self::EMAIL_CONTENT,
            self::ERROR,
            self::EMAIL_TEMPLATE,
            self::ADMINISTRATION_POTRAL,
            self::RECEIPT,
            self::INSTALLMENT_PLAN_STATUS,
            self::INSTALLMENT_STATUS,
            self::PURCHASE_METHOD,
            self::OPERATION_TYPE,
            self::CARD_BRAND,
            self::PAYMENT_DETAILS,
            self::COMMON,
            self::V_POS,
            self::PAYMENT_TRANSACTION_SHOPPER_MESSAGE,
            self::TERMS_AND_CONDITIONS_LEGAL,
            self::ECOMM,
            self::SHOPPER_SPLITIT_ACCOUNT,
            self::SMS_CONTENT,
            self::POS,
            self::FLEX_FIELDS,
        ];
    }
}


