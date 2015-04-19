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

namespace Acme\DemoBundle\Service;

/**
 * Class TrustRngService
 *
 * @package Acme\DemoBundle\Service
 */
class TrustRngService
{

    /**
     * @var RngInterface
     */
    protected $rng;

    /**
     * @param RngInterface $rng
     */
    public function setRng(RngInterface $rng)
    {
        $this->rng = $rng;
    }

    /**
     * Detect happiness of the class
     *
     * @return bool
     */
    public function isHappy()
    {
        $rn = $this->rng->rand(1, 6);

        if ($rn == 6) {
            return true;
        }

        return false;
    }
}
