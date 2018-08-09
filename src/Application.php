<?php

namespace Example;

use Invoker\InvokerInterface;
use Psr\Container\ContainerInterface;

class Application
{
    private $invoker;
    private $container;

    public function __construct(InvokerInterface $invoker, ContainerInterface $container)
    {
        $this->invoker = $invoker;
        $this->container = $container;
    }

    public function run()
    {
        $this->invoker->call(['Example\MainController', 'index']);
    }
}
