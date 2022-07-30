# PHP Ip library

[![Latest Stable Version](https://poser.pugx.org/josantonius/Ip/v/stable)](https://packagist.org/packages/josantonius/Ip)
[![License](https://poser.pugx.org/josantonius/Ip/license)](LICENSE)

[Versión en español](README-ES.md)

PHP class to get user IP.

>After reviewing the code after a few years, I would not recommend the use of the class for a
>production site, as preference was given to headers easily manipulated by the user to get the IP.

>If the reliability of the header from which the IP will be obtained is not guaranteed,
>it is better to use $_SERVER['REMOTE_ADDR'] directly or develop a custom solution.

---

- [Requirements](#requirements)
- [Installation](#installation)
- [Available Methods](#available-methods)
- [Quick Start](#quick-start)
- [Usage](#usage)
- [Tests](#tests)
- [Sponsor](#Sponsor)
- [License](#license)

---

## Requirements

This library is supported by **PHP versions 5.6** or higher and is compatible with **HHVM versions 3.0** or higher.

## Installation

The preferred way to install this extension is through [Composer](http://getcomposer.org/download/).

To install **PHP Ip library**, simply:

    composer require Josantonius/Ip

The previous command will only install the necessary files, if you prefer to **download the entire source code** you can use:

    composer require Josantonius/Ip --prefer-source

You can also **clone the complete repository** with Git:

  $ git clone <https://github.com/Josantonius/PHP-Ip.git>

Or **install it manually**:

[Download Ip.php](https://raw.githubusercontent.com/Josantonius/PHP-Ip/master/src/Ip.php):

    wget https://raw.githubusercontent.com/Josantonius/PHP-Ip/master/src/Ip.php

## Available Methods

Available methods in this library:

### - Get user's IP

```php
Ip::get();
```

**# Return** (string|false) → user IP or false

### - Validate IP

```php
Ip::validate($ip);
```

| Attribute | Description | Type | Required | Default
| --- | --- | --- | --- | --- |
| $ip | IP address to be validated. | string | Yes | |

**# Return** (boolean)

## Quick Start

To use this library with **Composer**:

```php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\Ip\Ip;
```

Or If you installed it **manually**, use it:

```php
require_once __DIR__ . '/Ip.php';

use Josantonius\Ip\Ip;
```

## Usage

Example of use for this library:

### - Get user's IP

```php
Ip::get();
```

### - Validate IP

```php
$ip = Ip::get();

Ip::validate($ip);
```

## Tests

To run [tests](tests) you just need [composer](http://getcomposer.org/download/) and to execute the following:

    git clone https://github.com/Josantonius/PHP-Ip.git
    
    cd PHP-Ip

    composer install

Run unit tests with [PHPUnit](https://phpunit.de/):

    composer phpunit

Run [PSR2](http://www.php-fig.org/psr/psr-2/) code standard tests with [PHPCS](https://github.com/squizlabs/PHP_CodeSniffer):

    composer phpcs

Run [PHP Mess Detector](https://phpmd.org/) tests to detect inconsistencies in code style:

    composer phpmd

Run all previous tests:

    composer tests

## Sponsor

If this project helps you to reduce your development time,
[you can sponsor me](https://github.com/josantonius#sponsor) to support my open source work :blush:

## License

This repository is licensed under the [MIT License](LICENSE).

Copyright © 2017-2022, [Josantonius](https://github.com/josantonius#contact)
