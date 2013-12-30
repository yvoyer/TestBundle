<?php
/**
 * This file is part of the TestBundle.
 * 
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Bundle\TestBundle\Controller;

use Star\Bundle\TestBundle\Persistence\FlashMessage;

/**
 * Class StarController
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Bundle\TestBundle\Controller
 */
class StarController
{
    /**
     * @var FlashMessage
     */
    private $flash;

    /**
     * @param FlashMessage $flash
     */
    public function __construct(FlashMessage $flash)
    {
        $this->flash = $flash;
    }

    /**
     * @return FlashMessage
     */
    protected function getFlash()
    {
        return $this->flash;
    }

    /**
     * Add the $message to the error flash.
     *
     * @param string $message
     */
    protected function setFlashError($message)
    {
        $this->flash->addMessage('error', $message);
    }

    /**
     * Add the $message to the notice flash.
     *
     * @param string $message
     */
    protected function setFlashNotice($message)
    {
        $this->flash->addMessage('notice', $message);
    }

    /**
     * Add the $message to the success flash.
     *
     * @param string $message
     */
    protected function setFlashSuccess($message)
    {
        $this->flash->addMessage('success', $message);
    }
}
