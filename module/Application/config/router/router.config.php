<?php

/**
 * Base application with Laminas MVC framework
 * 
 * This file is the configuration of the router for the application module.
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
use Laminas\Router\Http\Literal;

return [
    'routes' => [
        'home' => [
            'type' => Literal::class,
            'options' => [
                'route'    => '/',
                'constraints' => [
                    'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                    'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                ],
                'defaults' => [
                    'controller' => IndexController::class,
                    'action'     => 'index',
                ],
            ],
        ],
        'imprint' => [
            'type' => Literal::class,
            'options' => [
                'route'    => '/imprint',
                'constraints' => [
                    'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                    'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                ],
                'defaults' => [
                    'controller' => IndexController::class,
                    'action'     => 'imprint',
                ],
            ],
        ],
        'privacy-policy' => [
            'type' => Literal::class,
            'options' => [
                'route'    => '/privacy-policy',
                'constraints' => [
                    'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                    'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                ],
                'defaults' => [
                    'controller' => IndexController::class,
                    'action'     => 'privacy-policy',
                ],
            ],
        ],
    ],
];