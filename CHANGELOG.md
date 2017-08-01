# Changelog

All notable changes to `browner12/helpers` will be documented in this file.

Updates should follow the [Keep a CHANGELOG](http://keepachangelog.com/) principles.

## [UNRELEASED]

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

[unreleased]: https://github.com/browner12/helpers/compare/v2.0.0...HEAD
[2.0.0]: https://github.com/browner12/helpers/compare/v1.1.1...v2.0.0
[1.1.1]: https://github.com/browner12/helpers/compare/v1.1.0...v1.1.1
[1.1.0]: https://github.com/browner12/helpers/compare/v1.0.4...v1.1.0
[1.0.4]: https://github.com/browner12/helpers/compare/v1.0.3...v1.0.4
[1.0.3]: https://github.com/browner12/helpers/compare/v1.0.2...v1.0.3
[1.0.2]: https://github.com/browner12/helpers/compare/v1.0.1...v1.0.2
[1.0.1]: https://github.com/browner12/helpers/compare/v1.0.0...v1.0.1
