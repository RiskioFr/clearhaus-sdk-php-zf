Clearhaus SDK module for Zend Framework
=======================================

Zend Framework module that integrates Clearhaus SDK which decoupled from any HTTP messaging client using HTTPlug.

You can sign up for a Clearhaus account at https://www.clearhaus.com/.

[![Build Status](https://img.shields.io/travis/RiskioFr/clearhaus-sdk-php-zf.svg?style=flat)](http://travis-ci.org/RiskioFr/clearhaus-sdk-php-zf)
[![Latest Stable Version](http://img.shields.io/packagist/v/riskio/clearhaus-sdk-php-zf.svg?style=flat)](https://packagist.org/packages/riskio/clearhaus-sdk-php-zf)
[![Total Downloads](http://img.shields.io/packagist/dt/riskio/clearhaus-sdk-php-zf.svg?style=flat)](https://packagist.org/packages/riskio/clearhaus-sdk-php-zf)

## Requirements

* PHP 7.0+
* [clearhaus/sdk ^1.0](https://github.com/RiskioFr/clearhaus-sdk-php)

## Installation

Clearhaus SDK module only officially supports installation through Composer. For Composer documentation, please refer to
[getcomposer.org](http://getcomposer.org/).

You can install the module from command line:

```sh
$ composer require clearhaus/sdk-zf
```

After installation of the package, you have to copy the `clearhaus_sdk.global.php.dist` file into
your `config/autoload` folder and apply any setting you want.

- source: `vendor/riskio/idempotency-module/config/clearhaus_sdk.global.php.dist`
- destination: `config/autoload/clearhaus_sdk.global.php`

### Zend Framework

In Zend Framework application, you must enable the module by adding `ClearhausModule` in your `application.config.php` file.

### Zend Expressive

In Zend Expressive application, you have to add `ClearhausModule\ConfigProvider::class` to `config/config.php`:

```php
$aggregator = new ConfigAggregator([
    ClearhausModule\ConfigProvider::class,
    
    // ... other stuff goes here 

    // Load application config in a pre-defined order in such a way that local settings
    // overwrite global settings. (Loaded as first to last):
    //   - `global.php`
    //   - `*.global.php`
    //   - `local.php`
    //   - `*.local.php`
    new PhpFileProvider('config/autoload/{{,*.}global,{,*.}local}.php'),
    

    // Load development config if it exists
    new PhpFileProvider('config/development.config.php'),
], $cacheConfig['config_cache_path']);
```

## Configuration

By default, the module uses Clearhaus test account and enables the signature usage to improve security. However, you have to provide the API key related to your account.

```php
<?php
use Clearhaus\Client;

return [
    'clearhaus_sdk' => [
        'api_key' => null, // Allow to provide API key that you will find in your account
        'mode' => Client::MODE_TEST, // Allow to define the usage of either test or live accounts
        'use_signature' => true, // Allow to configure the usage of request signature
        'plugins' => [], // HTTPlug plugins that allow to add some processing logic
    ],
];
```

## Credits

- [Nicolas Eeckeloo](https://github.com/neeckeloo)
- [All Contributors](https://github.com/RiskioFr/clearhaus-sdk-php-zf/contributors)


## License

The MIT License (MIT). Please see [License File](https://github.com/RiskioFr/clearhaus-sdk-php-zf/blob/master/LICENSE) for more information.
