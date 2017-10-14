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

namespace OVAC\LaravelHubtelPayment;

use OVAC\HubtelPayment\Config;
use OVAC\HubtelPayment\Pay;

/**
 * class LaravelHubtelPayment.
 *
 * This class extends the \OVAC\HubtelPayment\Pay::class class and pre-assisgs a
 * few configuration that can be easily swapped and built upon for a seamless
 * integration with a laravel application and the facade exposed by this
 * package.
 *
 * It is also the main entry class for this package.
 */
class LaravelHubtelPayment extends Pay
{
    /**
     * This method returns an instance of the \OVAC\HubtelPayment\Config created with
     * the hubtel client account expected in the Laravel Hubtel Payment congiguration.
     *
     * @return \OVAC\HubtelPayment\Config
     */
    public function getConfig()
    {
        return new Config(
            config('laravel-hubtel-payment.account_number'),
            config('laravel-hubtel-payment.client.id'),
            config('laravel-hubtel-payment.client.secret')
        );
    }

    /**
     * This class dynamically places a call to the OVAC\HubtelPayment\Pay::class
     * and calls the a dynamic static method which in turn returns the class
     * required by the fascade which this package exposes.
     *
     * @param  string $className  the name of the class that class will call.
     * @param  array  $parameters parameters in the case of mass assignment
     * @return \OVAC\HubtelPayment\Api\Transaction\Transaction
     */
    public function __call($className, array $parameters)
    {
        // Create a new instance of the parent class
        return (new parent)

        // Place a call to the class required by facade
        ->{$className}(...$parameters)

        // Set the global callback urls if defined in the configuration
            ->setCallback([
                'success' => config('laravel-hubtel-payment.success_callback_url'),
                'error' => config('laravel-hubtel-payment.error_callback_url'),
            ])

        // Inject the Merchant Configuration required by the \OVAC\HubtelPayment package
            ->injectConfig($this->getConfig());
    }
}
