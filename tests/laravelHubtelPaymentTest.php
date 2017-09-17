<?php

namespace OVAC\LaravelHubtelPayment\Tests;

use LaravelHubtelPayment\Facades\LaravelHubtelPayment;
use LaravelHubtelPayment\ServiceProvider;
use Orchestra\Testbench\TestCase;

class LaravelHubtelPaymentTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [
            'laravel-hubtel-payment' => LaravelHubtelPayment::class,
        ];
    }

    public function testExample()
    {
        assertEquals(1, 1);
    }
}
