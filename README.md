# BambooHR for Laravel 5

> __NOTE__: This package currently requires PHP >= 7.0.0
>
> If you have a need for PHP 5.x support let me know by opening an issue
> (or feel free to submit a pull request).

## Installation

```bash
$ composer require jeffreyhyer/bamboohr-laravel
```

#### Laravel 5.5+
This package supports auto-discovery of the Service Provder
and Facade, you can skip to the __Configuration__ section below.

#### Laravel <= 5.4
For Laravel <= 5.4 you'll need to add the Service Provider and Facade to the
`config/app.php` file.

```php
<?php

'providers' => [
    // ...
    JeffreyHyer\BambooHR\ServiceProvider::class,
],

'aliases' => [
    // ...
    'BambooHR' => JeffreyHyer\BambooHR\Facade::class,
],
```

## Configuration

In order to access the BambooHR API you'll need to configure your company's
subdomain and provide an API key.

Add the following to the `config/services.php` file:

```php
'bamboohr' => [
    'domain' => env('BAMBOOHR_DOMAIN'),
    'key' => env('BAMBOOHR_APIKEY'),
],
```

If you decide to use the `.env` file to store the domain and API Key (recommended)
you'll need to add the following to your `.env` file:

```bash
BAMBOOHR_DOMAIN=company             # Company Subdomain (e.g. http://COMPANY.bamboohr.com/)
BAMBOOHR_APIKEY=0123456789abcdef    # API Key
```

## Usage

Once installed you should be able to access the BambooHR API through the facade:

```php
<?php

// Get employee directory
BambooHR::employees()->directory();
```

For full API documentation and additional usage options see
[https://jeffreyhyer.github.io/bamboohr/](https://jeffreyhyer.github.io/bamboohr/)