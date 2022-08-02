<?php

/**
 * This file is part of base application with Laminas MVC framework
 *
 * @package    Application\Controller
 * @author     Niklaus Höpfner <editor@nik-web.net>
 * @link       https://github.com/nik-web/base-application
 * @license    https://opensource.org/licenses/BSD-3-Clause The BSD-3-Clause License
 * @version    1.0.0
 * @since      1.0.0
 */

declare(strict_types=1);

namespace Application\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;
use Application\ValueObject\Provider;

/**
 * ImprintController class
 * 
 * @package Application\Controller
 * @author  Niklaus Höpfner <editor@nik-web.net>
 */
class ImprintController extends AbstractActionController
{
    /**
     * This action will display the imprint web page.
     * 
     * @return ViewModel
     */
    public function indexAction()
    {
        return new ViewModel([
            'taxIdNumber' => Provider::TAX_ID_NUMBER,
        ]);
    }
}
