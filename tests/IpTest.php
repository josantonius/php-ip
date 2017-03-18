<?php 
/**
 * PHP class to get user IP.
 * 
 * @author     Josantonius - info@josantonius.com
 * @copyright  Copyright (c) 2017
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link       https://github.com/Josantonius/PHP-Ip
 * @since      1.0.0
 */

namespace Josantonius\Ip\Tests;

use Josantonius\Ip\Ip;

/**
 * Tests class for Ip library.
 *
 * @since 1.0.0
 */
class IpTest { 

    /**
     * Get user's ip
     *
     * @since 1.0.0
     */
    static function testGetIp() {

        var_dump(Ip::get()); 
    }
}
