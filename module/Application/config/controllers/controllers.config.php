<?php

/**
 * Base application with Laminas MVC framework
 * 
 * This file is the configuration of the controllers for the application module.
 *
 * @package Application
 * @subpackage Config
 * @author     Niklaus Höpfner <editor@nik-web.net>
 * @version    1.0.0
 * @since      1.0.0
 */

declare(strict_types=1);

namespace Application;

use Application\Controller\IndexController;
use Laminas\ServiceManager\Factory\InvokableFactory;

return[
    'factories' => [
        IndexController::class => InvokableFactory::class,
    ],
];
