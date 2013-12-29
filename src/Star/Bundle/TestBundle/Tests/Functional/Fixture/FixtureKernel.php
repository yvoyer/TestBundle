<?php
/**
 * This file is part of the TestBundle project.
 * 
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

//namespace Star\Bundle\TestBundle\Tests\Functional\Fixture;

use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Bundle\BundleInterface;
use Symfony\Component\HttpKernel\Kernel;

/**
 * Class FixtureKernel
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Bundle\TestBundle\Tests\Functional\Fixture
 */
class FixtureKernel extends Kernel
{
    /**
     * Returns an array of bundles to registers.
     *
     * @return BundleInterface[] An array of bundle instances.
     *
     * @api
     */
    public function registerBundles()
    {
        $bundles = array(
            new \Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new \Star\Bundle\TestBundle\StarTestBundle(),
        );

        return $bundles;
    }

    /**
     * Loads the container configuration
     *
     * @param LoaderInterface $loader A LoaderInterface instance
     *
     * @api
     */
    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__ . '/config/config.yml');
        $loader->load('@FrameworkBundle/Resources/config/test.xml');
    }
}
 