<?php
/**
 * This file is part of the TestBundle project.
 * 
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Bundle\TestBundle\Tests\Functional\Fixture\Controller;

use Star\Bundle\TestBundle\Controller\StarController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class FixtureController
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Bundle\TestBundle\Tests\Functional\Fixture\Controller
 */
class FixtureController extends StarController
{
    public function indexAction()
    {
        return new Response($this->getFlash()->toString());
    }

    public function errorAction($message)
    {
        $this->setFlashError($message);

        return $this->redirectToIndex();
    }

    public function noticeAction($message)
    {
        $this->setFlashNotice($message);

        return $this->redirectToIndex();
    }

    public function successAction($message)
    {
        $this->setFlashSuccess($message);

        return $this->redirectToIndex();
    }

    /**
     * @return RedirectResponse
     */
    private function redirectToIndex()
    {
        return new RedirectResponse('/');
    }
}
 