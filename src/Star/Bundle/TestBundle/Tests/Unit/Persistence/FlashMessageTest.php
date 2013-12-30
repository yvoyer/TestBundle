<?php
/**
 * This file is part of the TestBundle project.
 * 
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Bundle\TestBundle\Tests\Unit\Persistence;

use Star\Bundle\TestBundle\Persistence\FlashMessage;
use Star\Component\Test\UnitTestCase;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Storage\MockArraySessionStorage;

/**
 * Class FlashMessageTest
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Bundle\TestBundle\Tests\Unit\Persistence
 */
class FlashMessageTest extends UnitTestCase
{
    /**
     * @var FlashMessage
     */
    private $sut;

    /**
     * @var FlashBagInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    private $flashBag;

    public function setUp()
    {
        $this->flashBag = $this->getMock('Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface');
        $this->flashBag
            ->expects($this->atLeastOnce())
            ->method('getName')
            ->will($this->returnValue('name'));

        $session = new Session(new MockArraySessionStorage(), null, $this->flashBag);

        $this->sut = new FlashMessage($session);
    }

    /**
     * @param string $type
     * @param string $message
     *
     * @dataProvider provideMessagesData
     */
    public function testShouldAddTheMessage($type, $message)
    {
        $this->flashBag
            ->expects($this->once())
            ->method('add')
            ->with($type, $message);

        $this->sut->addMessage($type, $message);
    }

    public function provideMessagesData()
    {
        return array(
            array('notice', 'I am a notice'),
            array('success', 'I am a success'),
            array('error', 'I am an error'),
        );
    }
}
 