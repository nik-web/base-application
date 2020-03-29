<?php

/**
 * Base application with Laminas MVC framework
 * 
 * This file is the configuration for the navigation in the application module.
 *
 * @package Application
 * @subpackage Config
 * @author     Niklaus Höpfner <editor@nik-web.net>
 * @version    1.0.0
 * @since      1.0.0
 */

declare(strict_types=1);

namespace Application;

return[
    'main_nav'  => [
        [
            'label' => 'Home',
            'route' => 'home',
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
    'meta_nav'  => [
        [
            'label' => 'Impressum',
            'route' => 'imprint',
        ],
        [
            'label' => 'Datenschutz',
            'route' => 'privacy-policy',
        ],
    ],
];