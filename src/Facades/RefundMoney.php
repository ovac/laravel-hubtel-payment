<?php

namespace OVAC\LaravelHubtelPayment\Facades;

use Illuminate\Support\Facades\Facade;
use OVAC\HubtelPayment\Api\Transaction\RefundMoney as Refund;

class RefundMoney extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Refund::class;
    }
}
