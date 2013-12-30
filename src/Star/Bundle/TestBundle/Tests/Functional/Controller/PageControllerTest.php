<?php
/**
 * This file is part of the TestBundle project.
 * 
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Bundle\TestBundle\Tests\Functional\Controller;

use Star\Bundle\TestBundle\Tests\IntegrationTestCase;

/**
 * Class PageControllerTest
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Bundle\TestBundle\Tests\Functional\Controller
 */
class PageControllerTest extends IntegrationTestCase
{
    /**
     * @dataProvider provideSupportedTypeMessage
     */
    public function testShouldSaveTheMessageForTheNextRequest($type)
    {
        $this->request("/{$type}/my-{$type}");
        $this->getClient()->followRedirect();

        $content = $this->getCrawler()->text();
        $this->assertContains($type, $content);
        $this->assertContains('my-' . $type, $content);
    }

    public function provideSupportedTypeMessage()
    {
        return array(
            array('error'),
            array('success'),
            array('notice'),
        );
    }
}
 