<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\RoleAdmin;
use App\Http\Middleware\RoleCustomer;
use App\Http\Middleware\RoleTekhnician;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'auth' => Authenticate::class,
            'role.admin' => RoleAdmin::class,
            'role.customer' => RoleCustomer::class,
            'role.teknisi' => RoleTekhnician::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();