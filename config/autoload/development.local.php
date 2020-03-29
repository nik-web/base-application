<?php

/**
 * Base application with Laminas MVC framework
 * 
 * This configuration override module configuration use this only by development.
 *  
 * @author     Niklaus Höpfner <editor@nik-web.net>
 * @version    1.0.0
 * @since      1.0.0
 */

return [
    'view_manager' => [
        'display_exceptions'       => true, // Default by Laminas MVC framework is false
        'display_not_found_reason' => true,
    ],
];
