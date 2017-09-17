<?php

/**
 * @package     OVAC/Laravel-Hubtel-Payment
 * @link        https://github.com/ovac/laravel-hubtel-payment
 *
 * @author      Ariama O. Victor (OVAC) <contact@ovac4u.com>
 * @link        http://ovac4u.com
 *
 * @license     https://github.com/ovac/laravel-hubtel-payment/blob/master/LICENSE
 * @copyright   (c) 2017, Rescope Inc
 */

namespace OVAC\LaravelHubtelPayment;

use OVAC\HubtelPayment\Config;

class LaravelHubtelPayment
{
    public static function getConfig()
    {
        return new Config(
            config('laravel-hubtel-payment.account_number'),
            config('laravel-hubtel-payment.client.id'),
            config('laravel-hubtel-payment.client.secret')
        );
    }

}
