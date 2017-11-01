<?php
/**
 * PHP class to get user IP.
 *
 * @author    Josantonius - <hello@josantonius.com>
 * @copyright 2017 (c) Josantonius - PHP-DataType
 * @license   https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link      https://github.com/Josantonius/PHP-Ip
 * @since     1.1.3
 */

namespace Josantonius\Ip;

use PHPUnit\Framework\TestCase;

/**
 * Tests class for Ip library.
 *
 * @since 1.1.3
 */
final class IpTest extends TestCase
{
    /**
     * Validate IP.
     *
     * @since 1.1.3
     *
     * @return void
     */
    public function testValidateIp()
    {
        $this->assertTrue(
            Ip::validate('8.11.0.8')
        );
    }

    /**
     * Validate wrong IP.
     *
     * @since 1.1.3
     *
     * @return void
     */
    public function testValidateWrongIp()
    {
        $this->assertFalse(
            Ip::validate('08.11.0.8')
        );
    }

    /**
     * Get user IP.
     *
     * @since 1.1.3
     *
     * @return void
     */
    public function testGetIp()
    {
        $this->assertContains(
            '8.11.0.8',
            Ip::get()
        );
    }
}
