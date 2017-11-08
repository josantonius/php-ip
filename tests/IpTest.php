<?php
/**
 * PHP class to get user IP.
 *
 * @author    Josantonius - <hello@josantonius.com>
 * @copyright 2017 (c) Josantonius - PHP-Ip
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
        $actual = $this->Ip;
        $this->assertInstanceOf('Josantonius\Ip\Ip', $actual);
    }

    /**
     * Validate IP.
     *
     * @since 1.1.3
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
     */
    public function testGetIp()
    {
        $this->assertContains(
            '8.11.0.8',
            Ip::get()
        );
    }
}
