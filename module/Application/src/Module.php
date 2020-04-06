<?php

/**
 * Base application with Laminas MVC framework
 *  
 * @author     Niklaus Höpfner <editor@nik-web.net>
 * @link       https://github.com/nik-web/base-application
 * @license    http://opensource.org/licenses/MIT The MIT License (MIT)
 * @version    1.0.0
 * @since      1.0.0
 */

declare(strict_types=1);

namespace Application;

use Laminas\ModuleManager\Feature\ConfigProviderInterface;
use Laminas\ModuleManager\Feature\BootstrapListenerInterface;
use Laminas\EventManager\EventInterface;
use Application\ValueObject\Provider;

/**
 * Application module class
 * 
 * @package Application
 */

class Module implements ConfigProviderInterface, BootstrapListenerInterface
{
    
    /**
     * {@inheritDoc}
     */
    public function getConfig() : array
    {
        return include __DIR__ . '/../config/module.config.php';
    }
    
    /**
     * {@inheritDoc}
     */
    public function onBootstrap(EventInterface $e)
    {
        $viewModel = $e->getApplication()->getMvcEvent()->getViewModel();
        $siteCopyrightNotice = Provider::getCopyrightNotice();
        $viewModel->siteCopyrightNotice = $siteCopyrightNotice;
    }
}