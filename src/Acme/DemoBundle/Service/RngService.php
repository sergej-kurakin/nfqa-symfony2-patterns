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

use Acme\DemoBundle\AcmeDemoEvents;
use Acme\DemoBundle\Event\RngGenerated;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Class RngService
 *
 * @package Acme\DemoBundle\Service
 */
class RngService implements RngInterface
{

    /**
     * @var EventDispatcherInterface
     */
    protected $eventDispatcher;

    /**
     * @param EventDispatcherInterface $eventDispatcher
     */
    public function setEventDispatcher(EventDispatcherInterface $eventDispatcher)
    {
        $this->eventDispatcher = $eventDispatcher;
    }

    /**
     * {@inheritdoc}
     */
    public function rand($min, $max)
    {
        $rn = mt_rand($min, $max);

        $event = new RngGenerated($rn);
        $this->eventDispatcher->dispatch(AcmeDemoEvents::RNG_GENERATED, $event);

        return $rn;
    }
}
