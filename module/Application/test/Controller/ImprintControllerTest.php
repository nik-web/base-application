<?php

/**
 * This file is part of base application with Laminas MVC framework
 *
 * @package    ApplicationTest\Controller
 * @author     Niklaus Höpfner <editor@nik-web.net>
 * @link       https://github.com/nik-web/base-application
 * @license    https://opensource.org/licenses/BSD-3-Clause The BSD-3-Clause License
 * @version    1.0.0
 * @since      1.0.0
 */

declare(strict_types=1);

namespace ApplicationTest\Controller;

use Application\Controller\ImprintController;
use Application\ValueObject\Provider;
use Laminas\Stdlib\ArrayUtils;
use Laminas\Test\PHPUnit\Controller\AbstractHttpControllerTestCase;

/**
 * ImprintControllerTest class
 * 
 * @package ApplicationTest\Controller
 * @author  Niklaus Höpfner <editor@nik-web.net>
 * 
 */
class ImprintControllerTest extends AbstractHttpControllerTestCase
{
    public function setUp() : void
    {
        // The module configuration should still be applicable for tests.
        // You can override configuration here with test case specific values,
        // such as sample view templates, path stacks, module_listener_options,
        // etc.
        $configOverrides = [];

        $this->setApplicationConfig(ArrayUtils::merge(
            include __DIR__ . '/../../../../config/application.config.php',
            $configOverrides
        ));

        parent::setUp();
    }

    public function testIndexActionCanBeAccessed() : void
    {
        $this->dispatch('/imprint', 'GET');
        $this->assertResponseStatusCode(200);
        $this->assertModuleName('application');
        $this->assertControllerName(ImprintController::class); // as specified in router's controller name alias
        $this->assertControllerClass('ImprintController');
        $this->assertMatchedRouteName('imprint');
    }

    public function testIndexActionViewModelTemplateRenderedWithinLayout() : void
    {
        $this->dispatch('/imprint', 'GET');
        $this->assertQuery('h1, #main-header');
    }

    public function testInvalidRouteDoesNotCrash() : void
    {
        $this->dispatch('/invalid/route', 'GET');
        $this->assertResponseStatusCode(404);
    }
    
    public function testHasSiteExportedProviderConstants() : void
    {
        $mailer = new \ReflectionClass(Provider::class);
        $this->assertArrayHasKey('TAX_ID_NUMBER', $mailer->getConstants());
    }
}
