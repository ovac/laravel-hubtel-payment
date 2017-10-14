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

/**
 * class ServiceProvider.
 */
class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    const CONFIG_PATH = __DIR__ . '/../config/laravel-hubtel-payment.php';

    /**
     * Inject the configurration for this package from the
     * application enviroment during boot.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            self::CONFIG_PATH => config_path('laravel-hubtel-payment.php'),
        ], 'config');
    }

    /**
     * Binds this package with the Laravel Application.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            self::CONFIG_PATH,
            'laravel-hubtel-payment'
        );

        $this->app->bind('HubtelPayment', function () {
            return new LaravelHubtelPayment;
        });

        $this->app->alias('HubtelPayment', LaravelHubtelPayment::class);
    }
}
