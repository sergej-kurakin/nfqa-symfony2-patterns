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
 * Interface RngInterface
 *
 * @package Acme\DemoBundle\Service
 */
interface RngInterface
{

    /**
     * @param integer $min
     * @param integer $max
     * @return integer
     */
    public function rand($min, $max);
}
