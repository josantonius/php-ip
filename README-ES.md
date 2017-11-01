# PHP Ip library

[![Latest Stable Version](https://poser.pugx.org/josantonius/Ip/v/stable)](https://packagist.org/packages/josantonius/Ip) [![Latest Unstable Version](https://poser.pugx.org/josantonius/Ip/v/unstable)](https://packagist.org/packages/josantonius/Ip) [![License](https://poser.pugx.org/josantonius/Ip/license)](LICENSE) [![Codacy Badge](https://api.codacy.com/project/badge/Grade/9a38ca1727464eb2bbac06a1bb163bce)](https://www.codacy.com/app/Josantonius/PHP-Ip?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=Josantonius/PHP-Ip&amp;utm_campaign=Badge_Grade) [![Total Downloads](https://poser.pugx.org/josantonius/Ip/downloads)](https://packagist.org/packages/josantonius/Ip) [![Travis](https://travis-ci.org/Josantonius/PHP-Ip.svg)](https://travis-ci.org/Josantonius/PHP-Ip) [![PSR2](https://img.shields.io/badge/PSR-2-1abc9c.svg)](http://www.php-fig.org/psr/psr-2/) [![PSR4](https://img.shields.io/badge/PSR-4-9b59b6.svg)](http://www.php-fig.org/psr/psr-4/) [![CodeCov](https://codecov.io/gh/Josantonius/PHP-Ip/branch/master/graph/badge.svg)](https://codecov.io/gh/Josantonius/PHP-Ip)

[English version](README.md)

Biblioteca PHP para obtener la IP del usuario.

---

- [Requisitos](#requisitos)
- [Instalación](#instalación)
- [Métodos disponibles](#métodos-disponibles)
- [Cómo empezar](#cómo-empezar)
- [Uso](#uso)
- [Tests](#tests)
- [Tareas pendientes](#-tareas-pendientes)
- [Contribuir](#contribuir)
- [Repositorio](#repositorio)
- [Licencia](#licencia)
- [Copyright](#copyright)

---

## Requisitos

Esta clase es soportada por versiones de **PHP 5.6** o superiores y es compatible con versiones de **HHVM 3.0** o superiores.

## Instalación 

La mejor forma de instalar esta extensión es a través de [Composer](http://getcomposer.org/download/).

Para instalar **PHP Ip library**, simplemente escribe:

    $ composer require Josantonius/Ip

El comando anterior sólo instalará los archivos necesarios, si prefieres **descargar todo el código fuente** puedes utilizar:

    $ composer require Josantonius/Ip --prefer-source

También puedes **clonar el repositorio** completo con Git:

  $ git clone https://github.com/Josantonius/PHP-Ip.git

O **instalarlo manualmente**:

[Descargar Ip.php](https://raw.githubusercontent.com/Josantonius/PHP-Ip/master/src/Ip.php):

    $ wget https://raw.githubusercontent.com/Josantonius/PHP-Ip/master/src/Ip.php

## Métodos disponibles

Métodos disponibles en esta biblioteca:

### - Obtener IP del usuario:

```php
Ip::get();
```

**# Return** (string|false) → IP o falso

### - Validar IP:

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

### - Obtener IP del usuario:

```php
Ip::get();
```

### - Validar IP:

```php
$ip = Ip::get();

Ip::validate($ip);
```

## Tests 

Para ejecutar las [pruebas](tests) necesitarás [Composer](http://getcomposer.org/download/) y seguir los siguientes pasos:

    $ git clone https://github.com/Josantonius/PHP-Ip.git
    
    $ cd PHP-Ip

    $ composer install

Ejecutar pruebas unitarias con [PHPUnit](https://phpunit.de/):

    $ composer phpunit

Ejecutar pruebas de estándares de código [PSR2](http://www.php-fig.org/psr/psr-2/) con [PHPCS](https://github.com/squizlabs/PHP_CodeSniffer):

    $ composer phpcs

Ejecutar todas las pruebas anteriores:

    $ composer tests

## ☑ Tareas pendientes

- [x] Completar tests
- [x] Mejorar la documentación

## Contribuir

1. Comprobar si hay incidencias abiertas o abrir una nueva para iniciar una discusión en torno a un fallo o función.
1. Bifurca la rama del repositorio en GitHub para iniciar la operación de ajuste.
1. Escribe una o más pruebas para la nueva característica o expón el error.
1. Haz cambios en el código para implementar la característica o reparar el fallo.
1. Envía pull request para fusionar los cambios y que sean publicados.

Esto está pensado para proyectos grandes y de larga duración.

## Repositorio

Los archivos de este repositorio se crearon y subieron automáticamente con [Reposgit Creator](https://github.com/Josantonius/BASH-Reposgit).

## Licencia

Este proyecto está licenciado bajo **licencia MIT**. Consulta el archivo [LICENSE](LICENSE) para más información.

## Copyright

2017 Josantonius, [josantonius.com](https://josantonius.com/)

Si te ha resultado útil, házmelo saber :wink:

Puedes contactarme en [Twitter](https://twitter.com/Josantonius) o a través de mi [correo electrónico](mailto:hello@josantonius.com).