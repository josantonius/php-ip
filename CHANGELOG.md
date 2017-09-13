# CHANGELOG

## 1.1.4 - 2017-09-14

* Unit tests supported by `PHPUnit` were added.

* The repository was synchronized with Travis CI to implement continuous integration.

* Type attributes were deleted from HTML tags. Since HTML5 doesn't longer necessary.
 
* Added `Ip/src/bootstrap.php` file

* Added `Ip/tests/bootstrap.php` file.

* Added `Ip/phpunit.xml.dist` file.
* Added `Ip/_config.yml` file.
* Added `Ip/.travis.yml` file.

* Deleted `Josantonius\Ip\Tests\IpTest::testGetIp()` method.

* Added `Josantonius\Ip\Test\IpTest::testValidateIp()` method.
* Added `Josantonius\Ip\Test\IpTest::testValidateWrongIp()` method.
* Added `Josantonius\Ip\Test\IpTest::testGetIp()` method.

## 1.1.3 - 2017-07-16

* Deleted `Josantonius\Ip\Exception\IpException` class.
* Deleted `Josantonius\Ip\Exception\Exceptions` abstract class.
* Deleted `Josantonius\Ip\Exception\IpException->__construct()` method.

## 1.1.2 - 2017-07-09

* Added `Josantonius\Ip\Ip::validate()` method.

## 1.1.1 - 2017-03-18

* Some files were excluded from download and comments and readme files were updated.

## 1.1.0 - 2017-01-30

* Compatible with PHP 5.6 or higher.

## 1.0.0 - 2017-01-30

* Compatible only with PHP 7.0 or higher. In the next versions, the library will be modified to make it compatible with PHP 5.6 or higher.

## 1.0.0 - 2017-01-17

* Added `Josantonius\Ip\Ip` class.
* Added `Josantonius\Ip\Ip::get()` method.

## 1.0.0 - 2017-01-17

* Added `Josantonius\Ip\Exception\IpException` class.
* Added `Josantonius\Ip\Exception\Exceptions` abstract class.
* Added `Josantonius\Ip\Exception\IpException->__construct()` method.

## 1.0.0 - 2017-01-17

* Added `Josantonius\Ip\Tests\IpTest` class.
* Added `Josantonius\Ip\Tests\IpTest::testGetIp()` method.
