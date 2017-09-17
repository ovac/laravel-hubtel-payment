# Laravel Hubtel Payment

[![Build Status](https://travis-ci.org/ovac/laravel-hubtel-payment.svg?branch=master)](https://travis-ci.org/ovac/laravel-hubtel-payment)
[![styleci](https://styleci.io/repos/CHANGEME/shield)](https://styleci.io/repos/CHANGEME)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/ovac/laravel-hubtel-payment/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/ovac/laravel-hubtel-payment/?branch=master)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/CHANGEME/mini.png)](https://insight.sensiolabs.com/projects/CHANGEME)

[![Packagist](https://img.shields.io/packagist/v/ovac/laravel-hubtel-payment.svg)](https://packagist.org/packages/ovac/laravel-hubtel-payment)
[![Packagist](https://poser.pugx.org/ovac/laravel-hubtel-payment/d/total.svg)](https://packagist.org/packages/ovac/laravel-hubtel-payment)
[![Packagist](https://img.shields.io/packagist/l/ovac/laravel-hubtel-payment.svg)](https://packagist.org/packages/ovac/laravel-hubtel-payment)

Package description: CHANGE ME

## Installation

Install via composer
```
composer require ovac/laravel-hubtel-payment
```

### Register Service Provider

**Note! This and next step are optional if you use laravel>=5.5 with package
auto discovery feature.**

Add service provider to `config/app.php` in `providers` section
```php
ovac\laravelHubtelPayment\ServiceProvider::class,
```

### Register Facade

Register package facade in `config/app.php` in `aliases` section
```php
ovac\laravelHubtelPayment\Facades\laravelHubtelPayment::class,
```

### Publish Configuration File

```
php artisan vendor:publish --provider="ovac\laravelHubtelPayment\ServiceProvider" --tag="config"
```

## Usage

CHANGE ME

## Security

If you discover any security related issues, please email 
instead of using the issue tracker.

## Credits

- [](https://github.com/ovac/laravel-hubtel-payment)
- [All contributors](https://github.com/ovac/laravel-hubtel-payment/graphs/contributors)
