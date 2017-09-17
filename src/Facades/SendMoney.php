<?php

namespace OVAC\LaravelHubtelPayment\Facades;

use Illuminate\Support\Facades\Facade;
use OVAC\HubtelPayment\Api\Transaction\SendMoney as Send;

class SendMoney extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Send::class;
    }
}
