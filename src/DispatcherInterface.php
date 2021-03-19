<?php

namespace Interop\Routing;

use Psr\Http\Message\ServerRequestInterface;

interface DispatcherInterface
{
    public function dispatch(ServerRequestInterface $request): callable;
}
