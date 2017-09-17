<?php

namespace OVAC\LaravelHubtelPayment\Facades;

use Illuminate\Support\Facades\Facade;
use OVAC\HubtelPayment\Api\Transaction\ReceiveMoney as Receive;

class ReceiveMoney extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Receive::class;
    }
}
