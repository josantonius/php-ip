# PHP Ip library

[![Latest Stable Version](https://poser.pugx.org/josantonius/Ip/v/stable)](https://packagist.org/packages/josantonius/Ip)
[![License](https://poser.pugx.org/josantonius/Ip/license)](LICENSE)

[English version](README.md)

Biblioteca PHP para obtener la IP del usuario.

>Tras revisar el código después de unos años, no recomendaría el uso de la clase para un sitio en
>producción, ya que se dio preferencia a cabeceras fácilmente manipulables por el usuario para
>obtener la IP.

>Si la fiabilidad de la cabecera desde la que se obtendrá la IP no está garantizada, sería
>mejor utilizar $_SERVER['REMOTE_ADDR'] directamente o desarrollar una solución personalizada.

---

- [Requisitos](#requisitos)
- [Instalación](#instalación)
- [Métodos disponibles](#métodos-disponibles)
- [Cómo empezar](#cómo-empezar)
- [Uso](#uso)
- [Tests](#tests)
- [Patrocinar](#patrocinar)
- [Licencia](#licencia)

---

## Requisitos

Esta clase es soportada por versiones de **PHP 5.6** o superiores y es compatible con versiones de **HHVM 3.0** o superiores.

## Instalación

La mejor forma de instalar esta extensión es a través de [Composer](http://getcomposer.org/download/).

Para instalar **PHP Ip library**, simplemente escribe:

    composer require Josantonius/Ip

El comando anterior sólo instalará los archivos necesarios, si prefieres **descargar todo el código fuente** puedes utilizar:

    composer require Josantonius/Ip --prefer-source

También puedes **clonar el repositorio** completo con Git:

  $ git clone <https://github.com/Josantonius/PHP-Ip.git>

O **instalarlo manualmente**:

[Descargar Ip.php](https://raw.githubusercontent.com/Josantonius/PHP-Ip/master/src/Ip.php):

    wget https://raw.githubusercontent.com/Josantonius/PHP-Ip/master/src/Ip.php

## Métodos disponibles

Métodos disponibles en esta biblioteca:

### - Obtener IP del usuario

```php
Ip::get();
```

**# Return** (string|false) → IP o falso

### - Validar IP

```php
Ip::validate($ip);
```

| Atributo | Descripción | Tipo | Requerido | Predeterminado
| --- | --- | --- | --- | --- |
| $ip | Dirección IP a validar. | string | Sí | |

**# Return** (boolean)

## Cómo empezar

Para utilizar esta biblioteca con **Composer**:

```php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\Ip\Ip;
```

Si la instalaste **manualmente**, utiliza:

```php
require_once __DIR__ . '/Ip.php';

use Josantonius\Ip\Ip;
```

## Uso

Ejemplo de uso para esta biblioteca:

### - Obtener IP del usuario

```php
Ip::get();
```

### - Validar IP

```php
$ip = Ip::get();

Ip::validate($ip);
```

## Tests

Para ejecutar las [pruebas](tests) necesitarás [Composer](http://getcomposer.org/download/) y seguir los siguientes pasos:

    git clone https://github.com/Josantonius/PHP-Ip.git
    
    cd PHP-Ip

    composer install

Ejecutar pruebas unitarias con [PHPUnit](https://phpunit.de/):

    composer phpunit

Ejecutar pruebas de estándares de código [PSR2](http://www.php-fig.org/psr/psr-2/) con [PHPCS](https://github.com/squizlabs/PHP_CodeSniffer):

    composer phpcs

Ejecutar pruebas con [PHP Mess Detector](https://phpmd.org/) para detectar inconsistencias en el estilo de codificación:

    composer phpmd

Ejecutar todas las pruebas anteriores:

    composer tests

## Patrocinar

Si este proyecto te ayuda a reducir el tiempo de desarrollo,
[puedes patrocinarme](https://github.com/josantonius/lang/es-ES/README.md#patrocinar)
para apoyar mi trabajo :blush:

## Licencia

Este repositorio tiene una licencia [MIT License](LICENSE).

Copyright © 2017-2022, [Josantonius](https://github.com/josantonius/lang/es-ES/README.md#contacto)
