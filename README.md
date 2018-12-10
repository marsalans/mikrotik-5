# Mikrotik

[![Build Status](https://travis-ci.org/wesleydeveloper/mikrotik.svg?branch=master)](https://travis-ci.org/wesleydeveloper/mikrotik)
[![styleci](https://styleci.io/repos/CHANGEME/shield)](https://styleci.io/repos/CHANGEME)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/wesleydeveloper/mikrotik/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/wesleydeveloper/mikrotik/?branch=master)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/CHANGEME/mini.png)](https://insight.sensiolabs.com/projects/CHANGEME)
[![Coverage Status](https://coveralls.io/repos/github/wesleydeveloper/mikrotik/badge.svg?branch=master)](https://coveralls.io/github/wesleydeveloper/mikrotik?branch=master)

[![Packagist](https://img.shields.io/packagist/v/wesleydeveloper/mikrotik.svg)](https://packagist.org/packages/wesleydeveloper/mikrotik)
[![Packagist](https://poser.pugx.org/wesleydeveloper/mikrotik/d/total.svg)](https://packagist.org/packages/wesleydeveloper/mikrotik)
[![Packagist](https://img.shields.io/packagist/l/wesleydeveloper/mikrotik.svg)](https://packagist.org/packages/wesleydeveloper/mikrotik)

Package description: CHANGE ME

## Installation

Install via composer
```bash
composer require wesleydeveloper/mikrotik
```

### Register Service Provider

**Note! This and next step are optional if you use laravel>=5.5 with package
auto discovery feature.**

Add service provider to `config/app.php` in `providers` section
```php
Wesleydeveloper\Mikrotik\ServiceProvider::class,
```

### Register Facade

Register package facade in `config/app.php` in `aliases` section
```php
'Mikrotik' => Wesleydeveloper\Mikrotik\Facades\Mikrotik::class,
```

### Publish Configuration File

```bash
php artisan vendor:publish --provider="Wesleydeveloper\Mikrotik\ServiceProvider" --tag="config"
```

## Usage

CHANGE ME

## Security

If you discover any security related issues, please email 
instead of using the issue tracker.

## Credits

- [](https://github.com/wesleydeveloper/mikrotik)
- [All contributors](https://github.com/wesleydeveloper/mikrotik/graphs/contributors)

This package is bootstrapped with the help of
[melihovv/laravel-package-generator](https://github.com/melihovv/laravel-package-generator).
