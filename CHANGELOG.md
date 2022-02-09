# Changelog

All notable changes to `browner12/helpers` will be documented in this file.

Updates should follow the [Keep a CHANGELOG](http://keepachangelog.com/) principles.

## [UNRELEASED]

## [3.4.0] - 2022-02-09

### Added
- support for Laravel 9

## [3.3.0] - 2020-12-08

### Added
- support for PHP 8

## [3.2.0] - 2020-09-09

### Added
- support for Laravel 8

## [3.1.0] - 2020-03-03

### Added
- support for Laravel 7

## [3.0.0] - 2019-09-08

### Added
- support for Laravel 6

### Removed
- support for Laravel 5

## [2.1.4] - 2019-02-26

### Changed
- support for Laravel 5.8 [#29](https://github.com/browner12/helpers/pull/29)

## [2.1.3] - 2018-09-11

### Changed
- support for Laravel 5.7 [#21](https://github.com/browner12/helpers/pull/21)

## [2.1.2] - 2018-02-08

### Changed
- support for Laravel 5.6 [#18](https://github.com/browner12/helpers/pull/18)

## [2.1.1] - 2018-01-03

### Fixed
- added default empty array when config value is not set. [3c1c1c4](https://github.com/browner12/helpers/commit/3c1c1c449ac3325d78878cd80a69a69faf997b6a)

## [2.1.0] - 2017-10-30

### Removed
- dropped support for older PHP, Laravel, and PHPUnit versions. 

## [2.0.0] - 2017-07-31

### Added
- added note about Laravel package discovery in setup notes [3691e3a](https://github.com/browner12/helpers/commit/3691e3a681bfba2ceb32fff037d126d41f8661dc)

### Changed
- bumped PHP minimum version to 5.6.0 [4367c03](https://github.com/browner12/helpers/commit/4367c03fd068241ace3b575ef605501a4676aa6b)
- updated the money helper to use the [MoneyPHP Package](https://github.com/moneyphp/money) [3e1c5df](https://github.com/browner12/helpers/commit/3e1c5dfa2b9810769c85d60d9c7e561fc7a7a6de)

### Removed
- removed helpers that return HTML. these are better handled by [components](https://laravel.com/docs/5.4/blade#components-and-slots). [ec22a5f](https://github.com/browner12/helpers/commit/ec22a5f82a609511c2dec3911fedc62b71a76d76)

## [1.1.1] - 2017-07-16

### Changed
- remove temporary variables [32a27c9](https://github.com/browner12/helpers/commit/32a27c90ff18d1ee829ff45edf2bf3b959de7e1d)
- shorten array normalization [32a27c9](https://github.com/browner12/helpers/commit/32a27c90ff18d1ee829ff45edf2bf3b959de7e1d)

## [1.1.0] - 2017-06-06

### Added
- support for Laravel auto-discovery ([#10](https://github.com/browner12/helpers/pull/10))

## [1.0.4] - 2017-06-06

### Fixed
- ensure only one leading slash ([#8](https://github.com/browner12/helpers/pull/8))

### Changed
- removed HHVM travis check, and added PHP 7.1 ([#9](https://github.com/browner12/helpers/pull/9))

## [1.0.3] - 2016-10-21

### Fixed
- added `tabindex="0"` to make certain buttons "focusable"

## [1.0.2] - 2016-10-02

### Changed
- dropped PHP version requirement to 5.5.9 (but **please** still use >= 5.6)

## [1.0.1] - 2016-08-30

### Fixed
- take into account `null` values for `datetime` and `datetimeSpan` methods

## 1.0.0 - 2016-02-22

### Added
- new helpers package

[unreleased]: https://github.com/browner12/helpers/compare/v3.4.0...HEAD
[3.4.0]: https://github.com/browner12/helpers/compare/v3.3.0...v3.4.0
[3.3.0]: https://github.com/browner12/helpers/compare/v3.2.0...v3.3.0
[3.2.0]: https://github.com/browner12/helpers/compare/v3.1.0...v3.2.0
[3.1.0]: https://github.com/browner12/helpers/compare/v3.0.0...v3.1.0
[3.0.0]: https://github.com/browner12/helpers/compare/v2.1.4...v3.0.0
[2.1.4]: https://github.com/browner12/helpers/compare/v2.1.3...v2.1.4
[2.1.3]: https://github.com/browner12/helpers/compare/v2.1.2...v2.1.3
[2.1.2]: https://github.com/browner12/helpers/compare/v2.1.1...v2.1.2
[2.1.1]: https://github.com/browner12/helpers/compare/v2.1.0...v2.1.1
[2.1.0]: https://github.com/browner12/helpers/compare/v2.0.0...v2.1.0
[2.0.0]: https://github.com/browner12/helpers/compare/v1.1.1...v2.0.0
[1.1.1]: https://github.com/browner12/helpers/compare/v1.1.0...v1.1.1
[1.1.0]: https://github.com/browner12/helpers/compare/v1.0.4...v1.1.0
[1.0.4]: https://github.com/browner12/helpers/compare/v1.0.3...v1.0.4
[1.0.3]: https://github.com/browner12/helpers/compare/v1.0.2...v1.0.3
[1.0.2]: https://github.com/browner12/helpers/compare/v1.0.1...v1.0.2
[1.0.1]: https://github.com/browner12/helpers/compare/v1.0.0...v1.0.1
