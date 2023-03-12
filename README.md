# LEI generator and validator

A package to generate and validate a LEI (Legal Entity Identifier).

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

// Generate a LEI
$generatedLei = $lei->generate();   // 123400V9I8UWAKBIWH79

// Validate a LEI
$validateLei = $lei->validate('123400V9I8UWAKBIWH79');  // true 
$validateLei = $lei->validate('12340013KCVCMU58YY44');  // false
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
