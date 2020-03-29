<?php

/**
 * Base application with Laminsas MVC framework
 * 
 * This file is the module configuration for the application module.
 *
 * @package Application
 * @subpackage Config
 * @author     Niklaus Höpfner <editor@nik-web.net>
 * @version    1.0.0
 * @since      1.0.0
 */

declare(strict_types=1);

namespace Application;

use Application\ValueObject\Data;

$path = $path = Data::getModuleRoot() . '/config/';

return [
    'controllers'     => include $path . 'controllers/controllers.config.php',
    'navigation'      => include $path . 'navigation/navigation.config.php',
    'router'          => include $path . 'router/router.config.php',
    'service_manager' => include $path . 'service_manager/service_manager.config.php',
    'view_manager'    => include $path . 'view_manager/view_manager.config.php',
];
