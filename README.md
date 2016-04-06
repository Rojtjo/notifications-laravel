# Notifier

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Easily send notifications.

## Installation

```
$ composer require rojtjo/notifier-laravel
```

## Usage

Register the service provider in `config/app.php`:

```php
    \Rojtjo\Notifier\Laravel\NotifierServiceProvider::class,
```

Add the middleware to the kernel in `app/Http/Kernel.php`:

```php
    \Rojtjo\Notifier\Laravel\ShareNotificationsWithView::class,
```

## Documentation

Coming soon

## Security

If you discover any security related issues, please email me@rojvroemen.com instead of using the issue tracker.

[ico-version]: https://img.shields.io/packagist/v/Rojtjo/notifier-laravel.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/Rojtjo/notifier-laravel/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/rojtjo/notifier-laravel.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/rojtjo/notifier-laravel.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/Rojtjo/notifier-laravel.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/Rojtjo/notifier-laravel
[link-travis]: https://travis-ci.org/Rojtjo/notifier-laravel
[link-scrutinizer]: https://scrutinizer-ci.com/g/rojtjo/notifier-laravel/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/rojtjo/notifier-laravel
[link-downloads]: https://packagist.org/packages/Rojtjo/notifier-laravel
