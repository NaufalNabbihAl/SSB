<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $middleware = [
        // Global middleware
    ];

    protected $middlewareGroups = [
        'web' => [
            // Middleware for web group
        ],

        'api' => [
            // Middleware for API group
        ],
    ];

    protected $routeMiddleware = [
        
        
        'role' => \App\Http\Middleware\CheckRole::class,
        
    ];
}