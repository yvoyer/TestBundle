<?php
/**
 * This file is part of the TestBundle project.
 * 
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Bundle\TestBundle\Tests\Unit\Controller;

use Star\Bundle\TestBundle\Controller\StarController;
use Star\Bundle\TestBundle\Tests\UnitTestCase;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * Class StarControllerTest
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Bundle\TestBundle\Tests\Unit\Controller
 */
class StarControllerTest extends UnitTestCase
{
    /**
     * @var StarController
     */
    private $controller;

    /**
     * @var Session
     */
    private $session;

    public function setUp()
    {
//        $this->session = $this->getMock('');
        $this->controller = new StarController($this->session);
    }

    /**
     * @param $type
     * @param $message
     *
     * @dataProvider provideMessagesData
     */
    public function testShouldAddTheMessage($type, $message)
    {
        $this->markTestIncomplete('Use FlashBag or Session mock');
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
 