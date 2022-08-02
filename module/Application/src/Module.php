<?php

/**
 * This file is part of base application with Laminas MVC framework
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

use Laminas\ModuleManager\Feature\ConfigProviderInterface;

/**
 * Moodule class
 * 
 * @package Application
 * @author  Niklaus Höpfner <editor@nik-web.net>
 */

class Module implements ConfigProviderInterface
{
    
    /**
     * {@inheritDoc}
     */
    public function getConfig() : array
    {
        return include __DIR__ . '/../config/module.config.php';
    }
}
