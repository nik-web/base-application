<?php

/**
 * Base application with Laminas MVC framework
 * 
 * This file is the configuration of the service manager for the application module.
 *
 * @package Application
 * @subpackage Config
 *  
 * @author     Niklaus Höpfner <editor@nik-web.net>
 * @version    1.0.0
 * @since      1.0.0
 */

declare(strict_types=1);

namespace Application;

return[
    'factories' => [
        'main_nav'  => Service\Factory\MainNavFactory::class,
        'meta_nav'  => Service\Factory\MetaNavFactory::class,
    ],
];