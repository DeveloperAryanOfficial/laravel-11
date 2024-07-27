<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

use App\Http\Middleware\AuthenticationCheck;
use App\Http\Middleware\FirstCheck;
use App\Http\Middleware\SecondCheck;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Adding middleware as globally
        // $middleware -> append(AuthenticationCheck::class);


        // Created Group Midleware
        // $middleware -> appendToGroup('MiddleGroup',[
        //     FirstCheck::class,
        //     SecondCheck::class,
        // ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
