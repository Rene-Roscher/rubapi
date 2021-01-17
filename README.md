# RUBAPI-Client - Api Wrapper for the RUB-Api

[![Latest Version on Packagist](https://img.shields.io/packagist/v/rene-roscher/rubapi.svg?style=flat-square)](https://packagist.org/packages/rene-roscher/rubapi)
[![Total Downloads](https://img.shields.io/packagist/dt/rene-roscher/rubapi.svg?style=flat-square)](https://packagist.org/packages/rene-roscher/rubapi)

This client is very simple and self-explanatory!

## Installation

You can install the package via composer:

```bash
composer require rene-roscher/rubapi
```

Add the following section to your **config/services.php**

```bash
'rubapi' => [
    'apiToken' => env('RUBAPI_TOKEN')
]
```

## Usage

``` php
\RServices\RUBApi\RUBApiFacade::get('account');
```

``` json
[
  {
    "id": 0,
    "email": "string",
    "first_name": "string",
    "last_name": "string",
    "company": "string",
    "street": "string",
    "house_number": "string",
    "zip": "string",
    "city": "string",
    "region": "string"
  }
]
```

## Credits

- [Rene Roscher](https://github.com/rene-roscher)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
