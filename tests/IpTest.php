<?php
/**
 * PHP class to get user IP.
 *
 * @author    Josantonius - <hello@josantonius.com>
 * @copyright 2017 - 2018 (c) Josantonius - PHP-Ip
 * @license   https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link      https://github.com/Josantonius/PHP-Ip
 * @since     1.1.3
 */
namespace Josantonius\Ip;

use PHPUnit\Framework\TestCase;

/**
 * Tests class for Ip library.
 */
final class IpTest extends TestCase
{
    /**
     * Ip instance.
     *
     * @since 1.1.6
     *
     * @var object
     */
    protected $Ip;

    /**
     * Set up.
     *
     * @since 1.1.6
     */
    public function setUp()
    {
        parent::setUp();

        $this->Ip = new Ip;
    }

    /**
     * Check if it is an instance of Ip.
     *
     * @since 1.1.6
     */
    public function testIsInstanceOfIp()
    {
        $this->assertInstanceOf('Josantonius\Ip\Ip', $this->Ip);
    }

    /**
     * Validate IP.
     */
    public function testValidateIp()
    {
        $ip = $this->Ip;

        $this->assertTrue(
            $ip::validate('8.11.0.8')
        );
    }

    /**
     * Validate wrong IP.
     */
    public function testValidateWrongIp()
    {
        $ip = $this->Ip;

        $this->assertFalse(
            $ip::validate('08.11.0.8')
        );
    }

    /**
     * Get user IP.
     */
    public function testGetIp()
    {
        $ip = $this->Ip;

        $this->assertContains(
            '8.11.0.8',
            $ip::get()
        );
    }
}
