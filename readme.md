# Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

This repository contains Laravel **(5.3)** itself with additional feature for:

- Laravel Echo
- Laravel Redis
- Laravel Passport

Also some modifications for front-end lovers:

- Disable CDN, use local assets for faster page load
- Blade, CSS (SASS and LESS) and JS using 2 space indentation
- Moving in-style CSS in Blade template to SASS resource

And for coding standard concern:

- Using facade instead of global function
- More configurable configuration via environment detection

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## Installation

- Install via git:

```
git clone https://github.com/krisanalfa/larafront
```

- Or install via composer:

```
composer create-project --prefer-dist krisanalfa/larafront blog
```

- Install project assets and libraries:

```
composer install
bower install
npm install
```

- Compile assets:

```
gulp
```

- Setup passport:

```
php artisan passport:install
```

- Configure your database configuration in your `.env` file. Then do database migration as follow:

```
php artisan migrate
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
