<?php

/**
 * This file is part of base application with Laminas MVC framework
 * 
 * This configuration of the application module is passed on to the
 * corresponding components by the ServiceManager.
 *
 * @package    Application  
 * @author     Niklaus Höpfner <editor@nik-web.net>
 * @link       https://github.com/nik-web/base-application
 * @license    https://opensource.org/licenses/BSD-3-Clause The BSD-3-Clause License
 * @version    1.0.0
 * @since      1.0.0
 */

declare(strict_types=1);

namespace Application;

use Laminas\Router\Http\Literal;
use Laminas\ServiceManager\Factory\InvokableFactory;

return [
    'router' => [
        'routes' => [
            'home'          => [
                'type'    => Literal::class,
                'options' => [
                    'route'       => '/',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                    ],
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action'     => 'index',
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
                        'controller' => Controller\PrivacyPolicyController::class,
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
                        'controller' => Controller\ImprintController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],       
    'controllers' => [
        'factories' => [
            Controller\IndexController::class         => InvokableFactory::class,
            Controller\PrivacyPolicyController::class => InvokableFactory::class,
            Controller\ImprintController::class       => InvokableFactory::class,
        ],
    ],
    'view_manager' => [
        'doctype'            => 'HTML5',
        'exception_template' => 'error/index',
        'not_found_template' => 'error/404',
        'template_map'       => [
            'layout/layout'                    => __DIR__ . '/../view/layout/layout.phtml',
            'error/index'                      => __DIR__ . '/../view/error/index.phtml',
            'error/404'                        => __DIR__ . '/../view/error/404.phtml',
            'application/index/index'          => __DIR__ . '/../view/application/index/index.phtml',
            'application/privacy-policy/index' => __DIR__ . '/../view/application/privacy-policy/index.phtml',
            'application/imprint/index'        => __DIR__ . '/../view/application/imprint/index.phtml',
            'partial/nav-bar/brand'            => __DIR__ . '/../view/partial/nav-bar/brand.phtml',
            'partial/nav-bar/main'             => __DIR__ . '/../view/partial/nav-bar/main.phtml',
            'partial/nav-bar/meta'             => __DIR__ . '/../view/partial/nav-bar/meta.phtml',
        ],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
    'view_helpers'  => [                                         
        'aliases'   => [
            'provider_name'    => View\Helper\ProviderName::class,
            'provider_address' => View\Helper\ProviderAddress::class,
            'provider_contact' => View\Helper\ProviderContactData::class,
            'copyright_notice' => View\Helper\CopyrightNotice::class,
        ],
        'factories' => [
            View\Helper\ProviderName::class        => InvokableFactory::class,
            View\Helper\ProviderAddress::class     => InvokableFactory::class,
            View\Helper\ProviderContactData::class => InvokableFactory::class,
            View\Helper\CopyrightNotice::class     => InvokableFactory::class,
        ],
        
    ],
    'navigation' => [
        'brand' => [
            [
                'label' => 'My Brand',
                'route' => 'home',
            ],
        ],
        'main'  => [
            [
                'label' => 'Home',
                'route' => 'home',
                'order' => 10,
            ],
            'info' => [
                'label' => 'Info',
                'id'    => 'info_dropdown',
                'uri'   => '#',
                'order' => 15,
                'pages' => [
                    'imprint' => [
                        'label'  => 'Impressum',
                        'route'  => 'imprint',
                        'target' => '_self',
                    ],
                    'privacy_policy' => [
                        'label'  => 'Datenschutz',
                        'route'  => 'privacy-policy',
                        'target' => '_self',
                    ],
                ],
            ],
        ],
        'meta'  => [
            [
                'label' => 'Impressum',
                'route' => 'imprint',
                'order' => 10,
            ],
            [
                'label' => 'Datenschutz',
                'route' => 'privacy-policy',
                'order' => 15,
            ],
        ],
    ],
    'service_manager' => [
        'factories' => [
            //'brand' => Service\Factory\BrandNavFactory::class,
        ],
    ],
];
