<?php

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
