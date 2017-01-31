<?php 
/**
 * PHP class to get user IP.
 * 
 * @category   JST
 * @package    Ip
 * @subpackage IpTest
 * @author     Josantonius - info@josantonius.com
 * @copyright  Copyright (c) 2017 JST PHP Framework
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @version    1.1.0
 * @link       https://github.com/Josantonius/PHP-Ip
 * @since      File available since 1.0.0 - Update: 2017-01-30
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