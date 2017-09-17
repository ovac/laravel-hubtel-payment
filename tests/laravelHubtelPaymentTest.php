<?php

namespace ovac\LaravelHubtelPayment\Tests;

use Orchestra\Testbench\TestCase;
use ovac\LaravelHubtelPayment\Facades\LaravelHubtelPayment;
use ovac\LaravelHubtelPayment\ServiceProvider;

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
