<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // $middleware->redirectGuestsTo('/login');
        // $middleware->redirectUsersTo('/dashboard');

        $middleware->alias([
            'otp.verified' => \App\Http\Middleware\EnsureOtpIsVerified::class,
            'password.change' => \App\Http\Middleware\RedirectIfPasswordChangeRequired::class,
            'otp.not_verified' => \App\Http\Middleware\RedirectIfOtpVerified::class,
            'no.cache' => \App\Http\Middleware\PreventBackHistory::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
