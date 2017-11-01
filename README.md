# PHP Ip library

[![Latest Stable Version](https://poser.pugx.org/josantonius/Ip/v/stable)](https://packagist.org/packages/josantonius/Ip) [![Latest Unstable Version](https://poser.pugx.org/josantonius/Ip/v/unstable)](https://packagist.org/packages/josantonius/Ip) [![License](https://poser.pugx.org/josantonius/Ip/license)](LICENSE) [![Codacy Badge](https://api.codacy.com/project/badge/Grade/9a38ca1727464eb2bbac06a1bb163bce)](https://www.codacy.com/app/Josantonius/PHP-Ip?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=Josantonius/PHP-Ip&amp;utm_campaign=Badge_Grade) [![Total Downloads](https://poser.pugx.org/josantonius/Ip/downloads)](https://packagist.org/packages/josantonius/Ip) [![Travis](https://travis-ci.org/Josantonius/PHP-Ip.svg)](https://travis-ci.org/Josantonius/PHP-Ip) [![PSR2](https://img.shields.io/badge/PSR-2-1abc9c.svg)](http://www.php-fig.org/psr/psr-2/) [![PSR4](https://img.shields.io/badge/PSR-4-9b59b6.svg)](http://www.php-fig.org/psr/psr-4/) [![CodeCov](https://codecov.io/gh/Josantonius/PHP-Ip/branch/master/graph/badge.svg)](https://codecov.io/gh/Josantonius/PHP-Ip)

[Versión en español](README-ES.md)

PHP class to get user IP.

---

- [Requirements](#requirements)
- [Installation](#installation)
- [Available Methods](#available-methods)
- [Quick Start](#quick-start)
- [Usage](#usage)
- [Tests](#tests)
- [TODO](#-todo)
- [Contribute](#contribute)
- [Repository](#repository)
- [License](#license)
- [Copyright](#copyright)

---

## Requirements

This library is supported by **PHP versions 5.6** or higher and is compatible with **HHVM versions 3.0** or higher.

## Installation

The preferred way to install this extension is through [Composer](http://getcomposer.org/download/).

To install **PHP Ip library**, simply:

    $ composer require Josantonius/Ip

The previous command will only install the necessary files, if you prefer to **download the entire source code** you can use:

    $ composer require Josantonius/Ip --prefer-source

You can also **clone the complete repository** with Git:

  $ git clone https://github.com/Josantonius/PHP-Ip.git

Or **install it manually**:

[Download Ip.php](https://raw.githubusercontent.com/Josantonius/PHP-Ip/master/src/Ip.php):

    $ wget https://raw.githubusercontent.com/Josantonius/PHP-Ip/master/src/Ip.php

## Available Methods

Available methods in this library:

### - Get user's IP:

```php
Ip::get();
```

**# Return** (string|false) → user IP or false

### - Validate IP:

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

### - Get user's IP:

```php
Ip::get();
```

### - Validate IP:

```php
$ip = Ip::get();

Ip::validate($ip);
```

## Tests 

To run [tests](tests) you just need [Composer](http://getcomposer.org/download/) and to execute the following:

    $ git clone https://github.com/Josantonius/PHP-Ip.git
    
    $ cd PHP-Ip

    $ composer install

Run unit tests with [PHPUnit](https://phpunit.de/):

    $ composer phpunit

Run [PSR2](http://www.php-fig.org/psr/psr-2/) code standard tests with [PHPCS](https://github.com/squizlabs/PHP_CodeSniffer):

    $ composer phpcs

Run all previous tests:

    $ composer tests

## ☑ TODO

- [x] Create tests
- [x] Improve documentation

## Contribute

1. Check for open issues or open a new issue to start a discussion around a bug or feature.
1. Fork the repository on GitHub to start making your changes.
1. Write one or more tests for the new feature or that expose the bug.
1. Make code changes to implement the feature or fix the bug.
1. Send a pull request to get your changes merged and published.

This is intended for large and long-lived objects.

## Repository

All files in this repository were created and uploaded automatically with [Reposgit Creator](https://github.com/Josantonius/BASH-Reposgit).

## License

This project is licensed under **MIT license**. See the [LICENSE](LICENSE) file for more info.

## Copyright

2017 Josantonius, [josantonius.com](https://josantonius.com/)

If you find it useful, let me know :wink:

You can contact me on [Twitter](https://twitter.com/Josantonius) or through my [email](mailto:hello@josantonius.com).
