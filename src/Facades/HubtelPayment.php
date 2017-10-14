<?php

/**
 * @package     OVAC/Laravel-Hubtel-Payment
 * @link        https://github.com/ovac/laravel-hubtel-payment
 *
 * @author      Ariama O. Victor (OVAC) <contact@ovac4u.com>
 * @link        http://ovac4u.com
 *
 * @license     https://github.com/ovac/laravel-hubtel-payment/blob/master/LICENSE
 * @copyright   (c) 2017, RescopeNet, Inc
 */

namespace OVAC\LaravelHubtelPayment\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * class HubtelPayment.
 *
 * This facade is the main entry for this application.
 *
 * This facade shall be registered in the laravel
 * application config for all laravel versions
 * less than 5.5 with as an alais
 * as 'HubtelPayment'
 */
class HubtelPayment extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'HubtelPayment';
    }
}
