<?php

use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\AdminTeacherMiddleware;
use App\Http\Middleware\EmailVerifiedMiddleware;
use App\Http\Middleware\TeacherMiddleware;
use App\Http\Middleware\VerifyTokenMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'admin' => AdminMiddleware::class,
            'teacher' => TeacherMiddleware::class,
            'admin_teacher' => AdminTeacherMiddleware::class,
            'verify_token' => VerifyTokenMiddleware::class,
            'email_verified' => EmailVerifiedMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();


