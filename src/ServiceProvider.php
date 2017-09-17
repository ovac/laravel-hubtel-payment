<?php

namespace ovac\laravelHubtelPayment;

use OVAC\HubtelPayment\Api\Api;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    const CONFIG_PATH = __DIR__ . '/../config/laravel-hubtel-payment.php';

    public function boot()
    {
        $this->publishes([
            self::CONFIG_PATH => config_path('laravel-hubtel-payment.php'),
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            self::CONFIG_PATH,
            'laravel-hubtel-payment'
        );

        // $this->app->bind('laravel-hubtel-payment', function () {
        //     return new laravelHubtelPayment();
        // });

        $this->app->extend(Api::class, function ($app, $api) {
            $api->injectConfig(LaravelHubtelPayment::getConfig());
        });
    }
}
