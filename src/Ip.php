<?php 
/**
 * PHP class to get user IP.
 * 
 * @category   JST
 * @package    Ip
 * @subpackage Ip
 * @author     Tobias Sette Class - http://github.com/gnumoksha 
 * @copyright  Copyright (c) 2017 JST PHP Framework
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @version    1.1.0
 * @link       https://github.com/Josantonius/PHP-Ip
 * @since      File available since 1.0.0 - Update: 2017-01-30
 */

namespace Josantonius\Ip;

# use Josantonius\Ip\Exception\IpException;

/**
 * IP handler.
 *
 * @since 1.0.0
 */
class Ip { 

    /**
     * Get user's ip
     *
     * @since 1.0.0
     *
     * @return string|false → ip of the user or false in the case of not finding it
     */
    static function get() { 

        global $HTTP_VIA, 
               $REMOTE_ADDR,
               $HTTP_FORWARDED,
               $HTTP_X_FORWARDED,
               $HTTP_COMING_FROM,
               $HTTP_X_COMING_FROM, 
               $HTTP_FORWARDED_FOR,
               $HTTP_X_FORWARDED_FOR;

        /**
         * Obtain ip from the IP address of the server where the script is running
         */
        if (empty($REMOTE_ADDR)) { 

            if (!empty($_SERVER) && isset($_SERVER['REMOTE_ADDR'])) { 

                $REMOTE_ADDR = $_SERVER['REMOTE_ADDR']; 
            
            } else if (!empty($_ENV) && isset($_ENV['REMOTE_ADDR'])) { 

                $REMOTE_ADDR = $_ENV['REMOTE_ADDR']; 

            } else if (@getenv('REMOTE_ADDR')) { 

                $REMOTE_ADDR = getenv('REMOTE_ADDR'); 
            } 
        }

        /**
         * Check if the user is behind a proxy
         */
         if (empty($HTTP_X_FORWARDED_FOR)) { 

            if (!empty($_SERVER) && isset($_SERVER['HTTP_X_FORWARDED_FOR'])) { 

                $HTTP_X_FORWARDED_FOR = $_SERVER['HTTP_X_FORWARDED_FOR']; 

            } else if (!empty($_ENV) && isset($_ENV['HTTP_X_FORWARDED_FOR'])) { 

                $HTTP_X_FORWARDED_FOR = $_ENV['HTTP_X_FORWARDED_FOR']; 

            } else if (@getenv('HTTP_X_FORWARDED_FOR')) { 

                $HTTP_X_FORWARDED_FOR = getenv('HTTP_X_FORWARDED_FOR'); 
            } 
        } 

        if (empty($HTTP_X_FORWARDED)) { 

            if (!empty($_SERVER) && isset($_SERVER['HTTP_X_FORWARDED'])) { 

                $HTTP_X_FORWARDED = $_SERVER['HTTP_X_FORWARDED'];

             } else if (!empty($_ENV) && isset($_ENV['HTTP_X_FORWARDED'])) { 

                $HTTP_X_FORWARDED = $_ENV['HTTP_X_FORWARDED']; 

            } else if (@getenv('HTTP_X_FORWARDED')) { 

                $HTTP_X_FORWARDED = getenv('HTTP_X_FORWARDED'); 
            } 
        } 
        
        if (empty($HTTP_FORWARDED_FOR)) { 

            if (!empty($_SERVER) && isset($_SERVER['HTTP_FORWARDED_FOR'])) { 

                $HTTP_FORWARDED_FOR = $_SERVER['HTTP_FORWARDED_FOR']; 

            } else if (!empty($_ENV) && isset($_ENV['HTTP_FORWARDED_FOR'])) { 

                $HTTP_FORWARDED_FOR = $_ENV['HTTP_FORWARDED_FOR']; 

            } else if (@getenv('HTTP_FORWARDED_FOR')) { 

                $HTTP_FORWARDED_FOR = getenv('HTTP_FORWARDED_FOR'); 
            } 
        }
        
        if (empty($HTTP_FORWARDED)) { 

            if (!empty($_SERVER) && isset($_SERVER['HTTP_FORWARDED'])) { 

                $HTTP_FORWARDED = $_SERVER['HTTP_FORWARDED']; 

            } else if (!empty($_ENV) && isset($_ENV['HTTP_FORWARDED'])) { 

                $HTTP_FORWARDED = $_ENV['HTTP_FORWARDED']; 

            } else if (@getenv('HTTP_FORWARDED')) { 

                $HTTP_FORWARDED = getenv('HTTP_FORWARDED'); 
            } 
        }
        
        if (empty($HTTP_VIA)) { 

            if (!empty($_SERVER) && isset($_SERVER['HTTP_VIA'])) { 

                $HTTP_VIA = $_SERVER['HTTP_VIA']; 

            } else if (!empty($_ENV) && isset($_ENV['HTTP_VIA'])) { 

                $HTTP_VIA = $_ENV['HTTP_VIA']; 

            } else if (@getenv('HTTP_VIA')) { 

                $HTTP_VIA = getenv('HTTP_VIA'); 
            } 
        }
        
        if (empty($HTTP_X_COMING_FROM)) { 

            if (!empty($_SERVER) && isset($_SERVER['HTTP_X_COMING_FROM'])) { 

                $HTTP_X_COMING_FROM = $_SERVER['HTTP_X_COMING_FROM']; 

            } else if (!empty($_ENV) && isset($_ENV['HTTP_X_COMING_FROM'])) { 

               $HTTP_X_COMING_FROM = $_ENV['HTTP_X_COMING_FROM']; 

            } else if (@getenv('HTTP_X_COMING_FROM')) { 

                $HTTP_X_COMING_FROM = getenv('HTTP_X_COMING_FROM'); 
            } 
        } 
         
        if (empty($HTTP_COMING_FROM)) { 

            if (!empty($_SERVER) && isset($_SERVER['HTTP_COMING_FROM'])) { 

                $HTTP_COMING_FROM = $_SERVER['HTTP_COMING_FROM']; 

             } else if (!empty($_ENV) && isset($_ENV['HTTP_COMING_FROM'])) { 

                $HTTP_COMING_FROM = $_ENV['HTTP_COMING_FROM']; 

            } else if (@getenv('HTTP_COMING_FROM')) { 

                $HTTP_COMING_FROM = getenv('HTTP_COMING_FROM'); 
            } 
        }

        /**
         * Get the user's default ip
         */
        if (!empty($REMOTE_ADDR)) { 

            $direct_ip = $REMOTE_ADDR; 
        } 

        /**
         * Obtain the proxy ips sent by the user
         */
        $proxy_ip = ''; 

        if (!empty($HTTP_X_FORWARDED_FOR)) { 

            $proxy_ip = $HTTP_X_FORWARDED_FOR; 

        } else if (!empty($HTTP_X_FORWARDED)) { 

            $proxy_ip = $HTTP_X_FORWARDED; 

        } else if (!empty($HTTP_FORWARDED_FOR)) { 

            $proxy_ip = $HTTP_FORWARDED_FOR; 

        } else if (!empty($HTTP_FORWARDED)) { 

            $proxy_ip = $HTTP_FORWARDED; 

        } else if (!empty($HTTP_VIA)) { 

            $proxy_ip = $HTTP_VIA; 

        } else if (!empty($HTTP_X_COMING_FROM)) { 

            $proxy_ip = $HTTP_X_COMING_FROM; 

        } else if (!empty($HTTP_COMING_FROM)) { 

            $proxy_ip = $HTTP_COMING_FROM; 
        } 

        /**
         * Return ip if found or false if not found
         */
        $ip = empty(!$proxy_ip) ? $proxy_ip : $direct_ip;
        
        $is_ip = preg_match('|^([0-9]{1,3}\.){3,3}[0-9]{1,3}|', $ip, $regs)[0];

        return (isset($regs[0])) ? $regs[0] : false;
    } 
}