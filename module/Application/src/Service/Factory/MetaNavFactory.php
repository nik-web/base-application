<?php

/**
 * Base application with Laminas MVC framework
 *  
 * @author     Niklaus Höpfner <editor@nik-web.net>
 * @version    1.0.0
 * @since      1.0.0
 */

namespace Application\Service\Factory;

use Laminas\Navigation\Service\AbstractNavigationFactory;

/**
 * MetaNavFactory
 *
 * @package Application
 * @subpackage Application\Service\Factory
 */
class MetaNavFactory extends AbstractNavigationFactory
{
    /**
     * Returns config name of the meta navigation
     * 
     * @return string
     */
    public function getName()
    {
        return 'meta_nav';
    }
}