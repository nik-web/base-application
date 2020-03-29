<?php

/**
 * Base application with Laminas MVC framework
 * 
 * This file is the configuration of the template path stack resolver for the
 * application module.
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

$path = Data::getModuleRoot();

return [
    $path . '/view',
    $path .'/view/error',
];
