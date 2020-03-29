<?php

/**
 * Base application with Laminas MVC framework
 * 
 * This file is the configuration of the template map resolver for the
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

$viewPath = Data::getModuleRoot() . '/view/';

$templateMap = [
    'layout/layout' => $viewPath . 'layout/layout.phtml',
    // Default templatename: "error"
    'error' => $viewPath . 'error/error.phtml',
    '404' => $viewPath . 'error/404.phtml',
    'application/index/index' => $viewPath . 'application/index/index.phtml',
    'application/index/imprint' => $viewPath . 'application/index/imprint.phtml',
    'application/index/privacy-policy' => $viewPath
        . 'application/index/privacy-policy.phtml',
    'partials/nav-bars/brand' => $viewPath . 'partials/nav-bars/brand.phtml',
    'partials/nav-bars/main' => $viewPath . 'partials/nav-bars/main.phtml',
    'partials/nav-bars/meta' => $viewPath . 'partials/nav-bars/meta.phtml',
];

return $templateMap;