<?php

namespace Example;

use Invoker\Invoker;
use Psr\Container\ContainerInterface;

abstract class BasePersonController
{
    protected $container;
    protected $invoker;

    public function __construct(ContainerInterface $container, Invoker $invoker)
    {
        $this->container = $container;
        $this->invoker = $invoker;
    }

    public function handle($name)
    {
        $handle = $this->container->get($name);

        $this->invoker->call([$handle, 'run']);
    }
}
