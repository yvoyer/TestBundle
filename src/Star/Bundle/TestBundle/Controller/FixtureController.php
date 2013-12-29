<?php
/**
 * This file is part of the TestBundle project.
 * 
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Bundle\TestBundle\Controller;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;

/**
 * Class FixtureController
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Bundle\TestBundle\Controller
 */
class FixtureController extends StarController
{
    public function indexAction()
    {
        $messages = '';
        $flashes = $this->container->get('session')->getFlashBag()->all();
        if (false === empty($flashes)) {
            foreach ($flashes as $message) {
                $messages .= $message;
            }
        }

        return new Response($messages);
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
 