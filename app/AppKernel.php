<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    protected $plugins = array();

    public function __construct($environment, $debug)
    {
        parent::__construct($environment, $debug);
        date_default_timezone_set('Asia/Shanghai');
    }

    public function registerBundles()
    {
        $bundles = array();
        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }

}
