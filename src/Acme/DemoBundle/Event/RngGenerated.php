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

namespace Acme\DemoBundle\Event;


use Symfony\Component\EventDispatcher\Event;

class RngGenerated extends Event
{

    /**
     * @var integer
     */
    protected $rn;

    public function __construct($rn)
    {
        $this->rn = $rn;
    }

    /**
     * @return int
     */
    public function getRn()
    {
        return $this->rn;
    }

    /**
     * @param int $rn
     */
    public function setRn($rn)
    {
        $this->rn = $rn;
    }
}
