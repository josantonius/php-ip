<?php
/**
 * PHP class to get user IP.
 *
 * @author     Tobias Sette Class - http://github.com/gnumoksha
 * @author     Josantonius - hello@josantonius.com
 * @copyright  Copyright (c) 2017
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link       https://github.com/Josantonius/PHP-Ip
 * @since      1.0.0
 */

namespace Josantonius\Ip;

/**
 * IP handler.
 *
 * @since 1.0.0
 */
class Ip
{
    /**
     * Gets the key value from globals
     *
     * @since 1.1.3
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

    /**
     * Get user's ip
     *
     * @since 1.0.0
     *
     * @return string|false → user IP
     */
    public static function get()
    {
        $possibleKeys = [
            'HTTP_X_FORWARDED_FOR',
            'HTTP_X_FORWARDED',
            'HTTP_FORWARDED_FOR',
            'HTTP_FORWARDED',
            'HTTP_VIA',
            'HTTP_X_COMING_FROM',
            'HTTP_COMING_FROM',
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
     * Validate ip.
     *
     * @since 1.1.3
     *
     * @param string $ip
     *
     * @return boolean
     */
    public static function validate($ip)
    {
        return filter_var($ip, FILTER_VALIDATE_IP) ? true : false;
    }
}
