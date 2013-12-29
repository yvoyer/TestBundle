<?php
/**
 * This file is part of the TestBundle.
 * 
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Bundle\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class StarController
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Bundle\TestBundle\Controller
 */
class StarController extends Controller
{
    /**
     * Add the $message to the error flash.
     *
     * @param string $message
     */
    protected function setFlashError($message)
    {
        $this->get('session')->getFlashBag()->add('error', $message);
    }

    /**
     * Add the $message to the notice flash.
     *
     * @param string $message
     */
    protected function setFlashNotice($message)
    {
        $this->get('session')->getFlashBag()->add('notice', $message);
    }

    /**
     * Add the $message to the success flash.
     *
     * @param string $message
     */
    protected function setFlashSuccess($message)
    {
        $this->get('session')->getFlashBag()->add('success', $message);
    }
}
