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
    public function testShouldSaveTheMessageForTheNextRequest()
    {
        // Todo cahnger config de session pour tests session
        $crawler = $this->request('/error/my-error');
//        $crawler = $this->request('/');

//        var_dump($crawler);
    }
}
 