<?php
/**
 * ErrorCodeOmnichannel
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
use \Messente\Api\ObjectSerializer;

/**
 * ErrorCodeOmnichannel Class Doc Comment
 *
 * @category Class
 * @description Matches the following error title.   This field is a constant    * 101 - Not found   * 102 - Forbidden   * 103 - Unauthorized   * 104 - Internal Server Error   * 105 - Invalid data   * 106 - Missing data   * 107 - Method not allowed
 * @package  Messente\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ErrorCodeOmnichannel
{
    /**
     * Possible values of this enum
     */
    const _101 = '101';

    const _102 = '102';

    const _103 = '103';

    const _104 = '104';

    const _105 = '105';

    const _106 = '106';

    const _107 = '107';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_101,
            self::_102,
            self::_103,
            self::_104,
            self::_105,
            self::_106,
            self::_107
        ];
    }
}


