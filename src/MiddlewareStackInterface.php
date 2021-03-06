<?php

namespace Schnittstabil\Psr7\MiddlewareStack;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\RequestInterface;

/**
 * MiddlewareStack operations.
 */
interface MiddlewareStackInterface
{
    /**
     * Push a middleware onto the top of this stack.
     *
     * @param callable $newTopMiddleware the middleware to be pushed onto the top.
     *
     * @return static
     */
    public function add(callable $newTopMiddleware);

    /**
     * Invoke stacked middlewares.
     *
     * @param RequestInterface|mixed  $request  request object
     * @param ResponseInterface|mixed $response response object
     * @param callable                $next     next middleware
     *
     * @return ResponseInterface PSR7 response object
     */
    public function __invoke($request, $response, callable $next);
}
