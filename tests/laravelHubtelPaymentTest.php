<?php

/**
 * @package     OVAC/Laravel-Hubtel-Payment
 * @link        https://github.com/ovac/laravel-hubtel-payment
 *
 * @author      Ariama O. Victor (OVAC) <contact@ovac4u.com>
 * @link        http://ovac4u.com
 *
 * @license     https://github.com/ovac/laravel-hubtel-payment/blob/master/LICENSE
 * @copyright   (c) 2017, Rescope Inc
 */

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
