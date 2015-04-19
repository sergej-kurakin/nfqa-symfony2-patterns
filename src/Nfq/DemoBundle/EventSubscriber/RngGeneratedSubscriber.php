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

namespace Nfq\DemoBundle\EventSubscriber;

use Acme\DemoBundle\AcmeDemoEvents;
use Acme\DemoBundle\Event\RngGenerated;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Class RngGeneratedSubscriber
 *
 * @package Nfq\DemoBundle\EventSubscriber
 */
class RngGeneratedSubscriber implements EventSubscriberInterface
{

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            AcmeDemoEvents::RNG_GENERATED => 'onRngGenerated',
        ];
    }

    /**
     * Record RNG result
     *
     * @param RngGenerated $event
     */
    public function onRngGenerated(RngGenerated $event)
    {
        $rn = $event->getRn();

        file_put_contents('./../data/'.microtime(true).'.txt', $rn);
    }
}
