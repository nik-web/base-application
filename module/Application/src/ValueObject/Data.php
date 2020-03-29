<?php

/**
 * Base application with Laninas MVC framework
 *
 * @package Application
 * @subpackage Application\ValueObject  
 * @author     Niklaus Höpfner <editor@nik-web.net>
 * @version    1.0.0
 * @since      1.0.0
 */

namespace Application\ValueObject;

/**
 * Module Application data class
 *
 * @package Application
 * @subpackage Application\ValueObject
 */
class Data {
    
    /**
     * Get application module root pathname
     * 
     * @return string $pathname absolute pathname
     */
    static function getModuleRoot()
    {
        $pathname = realpath(__DIR__ . '/../../');
        
        return $pathname;
    }
}
