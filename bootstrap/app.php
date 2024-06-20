<?php

<<<<<<< HEAD
=======
use App\Http\Middleware\AdminMiddleware;
>>>>>>> 191058c (Pratikum Terakhir)
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
<<<<<<< HEAD
        //
=======
        $middleware->alias([
            'admin' => AdminMiddleware::class,
        ]);
>>>>>>> 191058c (Pratikum Terakhir)
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
