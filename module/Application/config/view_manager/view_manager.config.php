<?php

/** 
 * Base application with Laminas MVC framework
 * 
 * This file is the configuration of the view manager for the application module.
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

$confPath = Data::getModuleRoot() . '/config/view_manager/';

return [
    'doctype'             => 'HTML5',
    'template_map'        => include $confPath . 'template_map.config.php',
    'template_path_stack' => include $confPath . 'template_path_stack.config.php',
];