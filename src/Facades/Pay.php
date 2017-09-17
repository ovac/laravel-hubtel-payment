<?php

namespace ovac\LaravelHubtelPayment\Facades;

use Illuminate\Support\Facades\Facade;
use OVAC\HubtelPayment\Pay as HubtelPay;

class Pay extends Facade
{
    protected static function getFacadeAccessor()
    {
        return HubtelPay::class;
    }
}
