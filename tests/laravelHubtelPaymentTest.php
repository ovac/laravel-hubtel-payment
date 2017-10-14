<?php

/**
 * @package     OVAC/Laravel-Hubtel-Payment
 * @link        https://github.com/ovac/laravel-hubtel-payment
 *
 * @author      Ariama O. Victor (OVAC) <contact@ovac4u.com>
 * @link        http://ovac4u.com
 *
 * @license     https://github.com/ovac/laravel-hubtel-payment/blob/master/LICENSE
 * @copyright   (c) 2017, RescopeNet, Inc
 */

namespace OVAC\LaravelHubtelPayment\Tests;

use Orchestra\Testbench\TestCase;
use OVAC\HubtelPayment\Api\Transaction\ReceiveMoney;
use OVAC\HubtelPayment\Api\Transaction\Refund;
use OVAC\HubtelPayment\Api\Transaction\SendMoney;
use OVAC\HubtelPayment\Config;
use OVAC\LaravelHubtelPayment\Facades\HubtelPayment;
use OVAC\LaravelHubtelPayment\LaravelHubtelPayment;
use OVAC\LaravelHubtelPayment\ServiceProvider;

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

    public function test_getCongig_returns_valid_config()
    {
        $this->assertInstanceOf(Config::class, (new LaravelHubtelPayment)->getConfig());
    }

    public function test_receivemoney_returns_valid_receivemoney_class()
    {
        $this->assertInstanceOf(ReceiveMoney::class, HubtelPayment::ReceiveMoney());
    }

    public function test_sendmoney_returns_valid_sendmoney_class()
    {
        $this->assertInstanceOf(SendMoney::class, HubtelPayment::SendMoney());
    }

    public function test_refund_returns_valid_refund_class()
    {
        $this->assertInstanceOf(Refund::class, HubtelPayment::Refund());
    }

    public function test_configuration_injection()
    {
        $configInstance = (new LaravelHubtelPayment)->getConfig();

        $this->assertSame($configInstance->getAccountNumber(), '123');
        $this->assertSame($configInstance->getClientId(), '456');
        $this->assertSame($configInstance->getClientSecret(), '789');
    }

    public function test_global_callback_url_configuration()
    {
        $receiveMoney = HubtelPayment::receiveMoney();

        $this->assertSame($receiveMoney->getPrimaryCallbackURL(), 'http://success.example.com');
        $this->assertSame($receiveMoney->getSecondaryCallbackURL(), 'http://error.example.com');
    }
}
