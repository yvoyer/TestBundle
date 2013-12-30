<?php
/**
 * This file is part of the TestBundle project.
 * 
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Bundle\TestBundle\Persistence;

use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * Class FlashMessage
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Bundle\TestBundle\Persistence
 */
class FlashMessage
{
    /**
     * @var FlashBagInterface
     */
    private $flashBag;

    /**
     * @param Session $session
     */
    public function __construct(Session $session)
    {
        $this->flashBag = $session->getFlashBag();
    }

    /**
     * @param string $type
     * @param string $message
     */
    public function addMessage($type, $message)
    {
        $this->flashBag->add($type, $message);
    }

    /**
     * @return string
     */
    public function toString()
    {
        $messageStr = '';
        foreach ($this->flashBag->all() as $type => $messages) {
            foreach ($messages as $message) {
                $messageStr .= "{$type}: $message";
            }
        }

        return $messageStr;
    }
}
 