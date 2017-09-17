<?php

namespace ovac\laravelHubtelPayment\Tests;

use Orchestra\Testbench\TestCase;
use ovac\laravelHubtelPayment\Facades\laravelHubtelPayment;
use ovac\laravelHubtelPayment\ServiceProvider;

class laravelHubtelPaymentTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [
            'laravel-hubtel-payment' => laravelHubtelPayment::class,
        ];
    }

    public function testExample()
    {
        assertEquals(1, 1);
    }
}
