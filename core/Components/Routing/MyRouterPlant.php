<?php

namespace Aigletter\Framework\Components\Routing;

use Aigletter\Contracts\ComponentFactory;
use Ns\Router\Router as RouterAlias;


class MyRouterPlant extends ComponentFactory
{
    protected function createConcreteComponent()
    {
        return new RouterAlias($this->arguments);
    }
}