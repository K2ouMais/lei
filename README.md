# LEI generator and validator

[![Latest Version on Packagist](https://img.shields.io/packagist/v/k2oumais/lei.svg?style=flat-square)](https://packagist.org/packages/k2oumais/lei)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/k2oumais/lei/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/k2oumais/lei/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/k2oumais/lei/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/k2oumais/lei/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/k2oumais/lei.svg?style=flat-square)](https://packagist.org/packages/k2oumais/lei)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/lei.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/lei)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require k2oumais/lei
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="lei-config"
```

This is the contents of the published config file:

```php
return [

    /*
    |--------------------------------------------------------------------------
    | LEI Prefix
    |--------------------------------------------------------------------------
    |
    | This is the Local Operating Unit (LOU) code.
    |
    */

    'lou_code' => env('LEI_LOU_CODE', '1234'),

    /*
    |--------------------------------------------------------------------------
    | LEI Reserved
    |--------------------------------------------------------------------------
    |
    | This is the reserved value of an LEI.
    |
    */

    'reserved' => env('LEI_RESERVED_VALUE', '00'),
];
```

## Usage

```php
$lei = new K2ouMais\Lei();
echo $lei->generate();
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [João Alves](https://github.com/K2ouMais)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
