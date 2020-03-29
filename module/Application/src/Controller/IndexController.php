<?php

/**
 * Base application with Laninas MVC framework
 *
 * @package Application
 * @subpackage Application\Controller  
 * @author     Niklaus Höpfner <editor@nik-web.net>
 * @version    1.0.0
 * @since      1.0.0
 */

declare(strict_types=1);

namespace Application\Controller;

use Application\ValueObject\Provider;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

/**
 * IndexController
 *
 * @package Application
 * @subpackage Application\Controller
 */
class IndexController extends AbstractActionController
{
    /**
     * This action will display the imprint web page.
     * 
     * @return ViewModel
     */
    public function imprintAction()
    {
        return new ViewModel([
            'lastName'          => Provider::LAST_NAME,
            'firstName'         => Provider::FIRST_NAME,
            'companyForm'       => Provider::COMPANY_FORM,
            'businessType'      => Provider::BUSINESS_TYPE,
            'street'            => Provider::STREET,
            'houseNumber'       => Provider::HOUSE_NUMBER,
            'postcode'          => Provider::POSTCODE,
            'city'              => Provider::CITY,
            'country'           => Provider::COUNTRY,
            'phoneNumber'       => Provider::PHONE_NUMBER,
            'faxNumber'         => Provider::FAX_NUMBER,
            'mobilePhoneNumber' => Provider::MOBILE_PHONE_NUMBER,
            'contactEmail'      => Provider::CONTACT_EMAIL,
            'taxIdNumber'       => Provider::TAX_ID_NUMBER,
        ]);
    }
    
    /**
     * This action will display the privacy policy web page.
     * 
     * @return ViewModel
     */
    public function privacyPolicyAction()
    {
        return new ViewModel([
            
        ]);
    }
}