# Laravel Hubtel Payment
A Laravel 5.5 integration for the [OVAC Hubtel Payment](https://www.ovac4u.com/hubtel-payment) package.

[![Build Status](https://travis-ci.org/ovac/laravel-hubtel-payment.svg?branch=master)](https://travis-ci.org/ovac/laravel-hubtel-payment)
[![styleci](https://styleci.io/repos/CHANGEME/shield)](https://styleci.io/repos/CHANGEME)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/ovac/laravel-hubtel-payment/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/ovac/laravel-hubtel-payment/?branch=master)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/CHANGEME/mini.png)](https://insight.sensiolabs.com/projects/CHANGEME)

[![Packagist](https://img.shields.io/packagist/v/ovac/laravel-hubtel-payment.svg)](https://packagist.org/packages/ovac/laravel-hubtel-payment)
[![Packagist](https://poser.pugx.org/ovac/laravel-hubtel-payment/d/total.svg)](https://packagist.org/packages/ovac/laravel-hubtel-payment)
[![Packagist](https://img.shields.io/packagist/l/ovac/laravel-hubtel-payment.svg)](https://packagist.org/packages/ovac/laravel-hubtel-payment)

```md
 Follow me anywhere @ovac4u                         | GitHub
 _________                          _________       | Twitter
|   ___   |.-----.--.--.---.-.----.|  |  |.--.--.   | Facboook
|  |  _   ||  _  |  |  |  _  |  __||__    |  |  |   | Instagram
|  |______||_____|\___/|___._|____|   |__||_____|   | Github + @ovac
|_________|                        www.ovac4u.com   | Facebook + @ovacposts
```

## Introduction.

Laravel Hubtel Payment is a Laravel 5.5 seamless integration of the [OVAC Hubtel Payment](https://www.ovac4u.com/hubtel-payment) php client for consuming the Hubtel Payment API and processing mobile-money transactions in a Laravel application.

With this package, it is easy to process mobile money transactions and automate Mobile Money payment from and to any mobile money subscriber in Ghana from any laravel controller.

## Installation

This packages utilize [Composer](http://getcomposer.org/), for more information on how to install Composer please read the [Composer Documentation](https://getcomposer.org/doc/00-intro.md).

Install via composer
```sh
composer require ovac/laravel-hubtel-payment
```

### Register Service Provider

**Note! This and next step are optional if you use laravel>=5.5 with package
auto discovery feature.**

Add service provider to `config/app.php` in `providers` section
```php
OVAC\LaravelHubtelPayment\ServiceProvider::class,
```


### Register Facade

Register package facade in `config/app.php` in `aliases` section
```php
OVAC\LaravelHubtelPayment\Facades\LaravelHubtelPayment::class,
```

### Publish Configuration File

```sh
php artisan vendor:publish --provider="OVAC\LaravelHubtelPayment\ServiceProvider" --tag="config"
```

### Edit .env

Add these lines in the application .env and use your Hubtel Merchant Account Number, ClentID, ClientSecret and callback as shown below.

Don't know what this is? checkout this documentation [](https://www.ovac4u.com/hubtel-payment/config.html)

``` sh
HUBTEL_ACCOUNT_NUMBER=HM00000 #Your Hubtel Merchant Account Number
HUBTEL_CLIENT_ID=XXXXXXXX     #Your Hubtel Merchant Client ID
HUBTEL_CLIENT_SECRET=XXXXXXXX #Your Hubtel Merchant Client Secret.
HUBTEL_CALLBACK_URL=https://example.com/payment_success #Default Callback URL
#HUBTEL_SECONDARY_CALLBACK_URL=https://example.com/error
```

## Basic Usage
This library exposes a handfull of facade that seamlessly interfaces with the hubtel-payment php client main classes for basic usage in order to make local configuration optional.

### Note: For usage, please refer to the OVAC Hubtel Payment documentation, located [here](https://www.ovac4u.com/hubtel-payment).

Just use the Laravel facade alias `HubtelPayment::` instead of the native calls.

**Enjoy :)**

#### The ReceiveMoney facade may be used to send a prompt to the customer's phone to receive money like a mobile-money agent as follows:
``` php
<?php

use OVAC\LaravelHubtelPayment\Facades\ReceiveMoney;

$payment = ReceiveMoney::from('0553577261')          //- The phone number to send the prompt to.
                ->amount(100.00)                    //- The exact amount value of the transaction
                ->desctiption('Online Purchase')    //- Description of the transaction.
                ->customerName('Ariama Victor')     //- Name of the person making the payment.callback after payment. 
                ->channel('mtn-gh')                 //- The mobile network Channel.configuration
                ->run();                            //- Run the transaction after required data.
```



#### The SendMoney facade may also be used to send money to any mobile money customer as follows:

```php
<?php

use OVAC\LaravelHubtelPayment\Facades\SendMoney;

$payment = SendMoney::to(0553577261)                //- The phone number to send the prompt to.
                ->amount(100.00)                    //- The exact amount value of the transaction
                ->desctiption('Online Purchase')    //- Description of the transaction.
                ->customerEmail('admin@ovac4u.com') //- Name of the person making the payment.
                ->channel('mtn-gh')                 //- The mobile network Channel.
                ->run();                            //- Run the transaction after required data.
```


#### The Refund Facade may also refund money a customer paid in a previous transaction:

```php
<?php

use OVAC\LaravelHubtelPayment\Facades\Refund;

$payment = Refund::transactionId(1234)              //- The ID of the transaction to refund.
                ->amount(100.00)                    //- The exact amount value of the transaction
                ->clientReference('#11212')         //- A refeerence on your end.
                ->desctiption('Useless Purchase')   //- Description of the transaction.
                ->reason('No longer needs a pen')   //- Name of the person making the payment.
                ->full()                            //- Full or partial refund.
                ->run();                            //- Run the transaction after required data.
```

## Security

If you discover any security related issues, please email 
instead of using the issue tracker.

## Credits

- [](https://github.com/ovac/laravel-hubtel-payment)
- [All contributors](https://github.com/ovac/laravel-hubtel-payment/graphs/contributors)
