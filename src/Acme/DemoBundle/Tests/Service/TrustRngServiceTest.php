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

namespace Acme\DemoBundle\Tests\Service;


use Acme\DemoBundle\Service\TrustRngService;

class TrustRngServiceTest extends \PHPUnit_Framework_TestCase
{

    public function testWhenRandomOne()
    {

        $rngFake = $this->prophesize('\Acme\DemoBundle\Service\RngInterface');

        $rngFake->rand(1, 6)
            ->shouldBecalled()
            ->willReturn(1);

        $service = new TrustRngService();
        $service->setRng($rngFake->reveal());

        $this->assertFalse($service->isHappy());
    }

    public function testWhenRandomSix()
    {

        $rngFake = $this->prophesize('\Acme\DemoBundle\Service\RngInterface');

        $rngFake->rand(1, 6)
            ->shouldBecalled()
            ->willReturn(6);

        $service = new TrustRngService();
        $service->setRng($rngFake->reveal());

        $this->assertTrue($service->isHappy());
    }
}
