<p align="center" style="border: 5px solid #000000">
<a href="https://developers.hubtel.com/documentations/merchant-account-api" target="_blank"><img src="https://res.cloudinary.com/ovac/image/upload/h_200/v1506824544/4a_Uw7r_ljybq3.jpg"></a>
<a href="#" target="_blank"><img src="https://res.cloudinary.com/ovac/image/upload/h_120/v1506828786/logo-composer-transparent_zjgal0.png"></a>
<a href="#" target="_blank"><img src="https://res.cloudinary.com/ovac/image/upload/h_200/v1506832992/laravel-logo_atlvfw.png"></a>
<br>
<a href="https://www.ovac4u.com/hubtel-payment" target="_blank"><img src="https://res.cloudinary.com/ovac/image/upload/v1506828380/logo_size_invert_jelh74.jpg"></a>
</p>

---

# Laravel Hubtel Payment 
A Laravel 5.5 integration for the [OVAC Hubtel Payment](https://www.ovac4u.com/hubtel-payment) package.

[![Build Status](https://travis-ci.org/ovac/laravel-hubtel-payment.svg?branch=master)](https://travis-ci.org/ovac/laravel-hubtel-payment)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/ovac/laravel-hubtel-payment/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/ovac/laravel-hubtel-payment/badges/quality-score.png?b=master)
[![Coverage Status](https://coveralls.io/repos/github/ovac/laravel-hubtel-payment/badge.svg?branch=revert-1-analysis-XkyPYa)](https://coveralls.io/github/ovac/laravel-hubtel-payment?branch=revert-1-analysis-XkyPYa)
[![Latest Stable Version](https://img.shields.io/github/release/ovac/laravel-hubtel-payment.svg)](https://packagist.org/packages/ovac/laravel-hubtel-payment)
[![Packagist](https://poser.pugx.org/ovac/laravel-hubtel-payment/d/total.svg)](https://packagist.org/packages/ovac/laravel-hubtel-payment)
[![Packagist](https://img.shields.io/packagist/l/ovac/laravel-hubtel-payment.svg)](https://packagist.org/packages/ovac/laravel-hubtel-payment)
[![Dependency Status](https://www.versioneye.com/user/projects/59cda451368b08320ffe7190/badge.svg)](https://www.versioneye.com/user/projects/59cda451368b08320ffe7190)

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/5322525b-9a9a-4019-82c4-b2ddc3de04fe/big.png)](https://insight.sensiolabs.com/projects/5322525b-9a9a-4019-82c4-b2ddc3de04fe)

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

This packages utilize [Composer](https://getcomposer.org/), for more information on how to install Composer please read the [Composer Documentation](https://getcomposer.org/doc/00-intro.md).

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
'HubtelPayment' => OVAC\LaravelHubtelPayment\Facades\LaravelHubtelPayment::class,
```

### Publish Configuration File

```sh
php artisan vendor:publish --provider="OVAC\LaravelHubtelPayment\ServiceProvider" --tag="config"
```

### Edit .env

Add these lines in the application .env and use your Hubtel Merchant Account Number, ClentID, ClientSecret and callback as shown below.

Don't know what this is? [checkout this documentation](https://www.ovac4u.com/hubtel-payment/config.html)

``` sh
HUBTEL_ACCOUNT_NUMBER=HM00000 #Your Hubtel Merchant Account Number
HUBTEL_CLIENT_ID=XXXXXXXX     #Your Hubtel Merchant Client ID
HUBTEL_CLIENT_SECRET=XXXXXXXX #Your Hubtel Merchant Client Secret.
HUBTEL_CALLBACK_URL=https://example.com/payment_success #Default Callback URL
HUBTEL_SECONDARY_CALLBACK_URL=https://example.com/error
```

## Basic Usage
This library exposes a handfull of facade that seamlessly interfaces with the hubtel-payment php client main classes for basic usage in order to make local configuration optional.

### Note: For advance usage, please refer to the OVAC Hubtel Payment documentation, located [here](https://www.ovac4u.com/hubtel-payment).

Just use the Laravel facade alias `HubtelPayment::` instead of the native calls.

**Enjoy :)**

#### The ReceiveMoney facade may be used to send a prompt to the customer's phone to receive money like a mobile-money agent as follows:
``` php
<?php

use OVAC\LaravelHubtelPayment\Facades\HubtelPayment;

// NOTE: The phone number must be of type string as Laravel considers all numbers with a leading 0 to be a hex number.
$payment = HubtelPayment::ReceiveMoney()
                ->from('0553577261')                //- The phone number to send the prompt to. 
                ->amount(100.00)                    //- The exact amount value of the transaction
                ->description('Online Purchase')    //- Description of the transaction.
                ->customerName('Ariama Victor')     //- Name of the person making the payment.callback after payment. 
                ->channel('mtn-gh')                 //- The mobile network Channel.configuration
                ->run();                            //- Run the transaction after required data.
```



#### The SendMoney facade may also be used to send money to any mobile money customer as follows:

```php
<?php

use OVAC\LaravelHubtelPayment\Facades\HubtelPayment;

// NOTE: The phone number must be of type string as Laravel considers all numbers with a leading 0 to be a hex number.
$payment = HubtelPayment::SendMoney()
                ->to('0553577261')                  //- The phone number to send the prompt to.
                ->amount(100.00)                    //- The exact amount value of the transaction
                ->description('Online Purchase')    //- Description of the transaction.
                ->customerEmail('admin@ovac4u.com') //- Name of the person making the payment.
                ->channel('mtn-gh')                 //- The mobile network Channel.
                ->run();                            //- Run the transaction after required data.
```


#### The Refund Facade may also refund money a customer paid in a previous transaction:

```php
<?php

use OVAC\LaravelHubtelPayment\Facades\HubtelPayment;

$payment = HubtelPayment::Refund()
                ->transactionId(1234)               //- The ID of the transaction to refund.
                ->amount(100.00)                    //- The exact amount value of the transaction
                ->clientReference('#11212')         //- A refeerence on your end.
                ->description('Useless Purchase')   //- Description of the transaction.
                ->reason('No longer needs a pen')   //- Name of the person making the payment.
                ->full()                            //- Full or partial refund.
                ->run();                            //- Run the transaction after required data.
```

## Contributing

Thank you for considering contributing to Laravel Hackathon Starter. The contribution guide can be found in the [Contribution File](https://github.com/ovac/laravel-hubtel-payment/blob/master/CONTRIBUTING.md)

## Security

If you discover any security related issues, please email 
instead of using the issue tracker.

## Credits

- [All contributors](https://github.com/ovac/laravel-hubtel-payment/graphs/contributors)

## Reference
- [Documentation/Official Page](https://www.ovac4u.com/laravel-hubtel-payment)
- [Official Repo: Github](https://github.com/ovac/laravel-hubtel-payment)
- [Hubtel Merchant Payment Reference](https://developers.hubtel.com/documentations/merchant-account-api)
- [Laravel framework](https://laravel.com)
- [LICENCE: MIT](https://github.com/ovac/laravel-hubtel-payment/blob/licence)
- [CHANGELOG](https://github.com/ovac/laravel-hubtel-payment/blob/master/CHANGELOG.md)

## How can I thank you?

Why not star the github repo? I'd love the attention! Why not share the link for this repository on Twitter or HackerNews? Spread the word!

Don't forget to follow me on [instagram](https://www.instagram.com/ovac4u) and [twitter](https://www.twitter.com/ovac4u) 

Thanks!
Ariama Victor (ovac4u).
