<?php
/**
 * This file is part of the TestBundle project.
 * 
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Bundle\TestBundle;

use Star\Bundle\TestBundle\DependencyInjection\TestBundleExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class StarTestBundle
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Bundle\TestBundle
 */
class StarTestBundle extends Bundle
{
    /**
     * Returns the bundle's container extension.
     *
     * @return ExtensionInterface|null The container extension
     *
     * @throws \LogicException
     *
     * @api
     */
    public function getContainerExtension()
    {
        return new TestBundleExtension();
    }
}
 