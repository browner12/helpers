# helpers

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what
PSRs you support to avoid any confusion with users and contributors.

## Install

Via Composer

``` bash
$ composer require browner12/helpers
```

## Setup

Add the service provider to the providers array in  `config/app.php`.

``` php
'providers' => [
    browner12\helpers\HelperServiceProvider::class,
];
```

## Publishing

You can publish everything at once

``` php
php artisan vendor:publish --provider="browner12\helpers\HelperServiceProvider"
```

or you can publish groups individually.

``` php
php artisan vendor:publish --provider="browner12\helpers\HelperServiceProvider" --tag="config"
```

## Usage

``` php
$skeleton = new League\Skeleton();
echo $skeleton->echoPhrase('Hello, League!');
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email browner12@gmail.com instead of using the issue tracker.

## Credits

- [Andrew Brown][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/browner12/helpers.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/browner12/helpers/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/browner12/helpers.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/browner12/helpers.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/browner12/helpers.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/browner12/helpers
[link-travis]: https://travis-ci.org/browner12/helpers
[link-scrutinizer]: https://scrutinizer-ci.com/g/browner12/helpers/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/browner12/helpers
[link-downloads]: https://packagist.org/packages/browner12/helpers
[link-author]: https://github.com/browner12
[link-contributors]: ../../contributors
