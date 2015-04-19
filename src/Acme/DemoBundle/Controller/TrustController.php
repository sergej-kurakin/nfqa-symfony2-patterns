<?php
/**
 * @copyright C UAB NFQ Technologies 2015
 *
 * This Software is the property of NFQ Technologies
 * and is protected by copyright law – it is NOT Freeware.
 *
 * Any unauthorized use of this software without a valid license key
 * is a violation of the license agreement and will be prosecuted by
 * civil and criminal law.
 *
 * Contact UAB NFQ Technologies:
 * E-mail: info@nfq.lt
 * http://www.nfq.lt
 *
 */

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class TrustController extends Controller
{

    public function trustAction()
    {

        $trust = $this->get('acme.service.trust_rng');

        $res = 'Unhappy...';
        if($trust->isHappy()) {
            $res = 'Happy!!!';
        }

        return new Response($res, 200, ['Content-type' => 'text/plain']);
    }
}
