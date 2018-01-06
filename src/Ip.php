<?php
/**
 * PHP class to get user IP.
 *
 * @author    MASNathan - <https://github.com/MASNathan>
 * @author    Josantonius - <hello@josantonius.com>
 * @copyright 2017 - 2018 (c) Josantonius - PHP-Ip
 * @license   https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link      https://github.com/Josantonius/PHP-Ip
 * @since     1.0.0
 */
namespace Josantonius\Ip;

/**
 * IP handler.
 */
class Ip
{
    /**
     * Get user's IP.
     *
     * @return string|false → user IP
     */
    public static function get()
    {
        $possibleKeys = [
            'HTTP_X_FORWARDED_FOR',
            'HTTP_X_FORWARDED',
            'HTTP_X_CLUSTER_CLIENT_IP',
            'HTTP_FORWARDED_FOR',
            'HTTP_FORWARDED',
            'HTTP_VIA',
            'HTTP_X_COMING_FROM',
            'HTTP_COMING_FROM',
            'HTTP_X_REAL_IP',
            'REMOTE_ADDR',
        ];

        foreach ($possibleKeys as $key) {
            if ($ip = static::getGlobalValue($key)) {
                return $ip;
            }
        }

        return false;
    }

    /**
     * Validate IP.
     *
     * @since 1.1.2
     *
     * @param string $ip → IP address to be validated
     *
     * @return bool
     */
    public static function validate($ip)
    {
        return filter_var($ip, FILTER_VALIDATE_IP) ? true : false;
    }

    /**
     * Gets the key value from globals.
     *
     * @since 1.1.4
     *
     * @param string $key
     *
     * @return string|null
     */
    protected static function getGlobalValue($key)
    {
        if (isset($_SERVER[$key]) && static::validate($_SERVER[$key])) {
            return $_SERVER[$key];
        }

        if (isset($_ENV[$key]) && static::validate($_ENV[$key])) {
            return $_ENV[$key];
        }

        if (@getenv($key) && static::validate(getenv($key))) {
            return getenv($key);
        }

        return null;
    }
}
