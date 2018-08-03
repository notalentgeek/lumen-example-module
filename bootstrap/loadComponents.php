<?php

/*
|--------------------------------------------------------------------------
| Load .env Module
|--------------------------------------------------------------------------
*/

try {
    (new Dotenv\Dotenv(__DIR__.'/../', '/.env.<module-name>'))->load();
} catch (Dotenv\Exception\InvalidPathException $e) {
    //
}

/*
|--------------------------------------------------------------------------
| Register Container Bindings
|--------------------------------------------------------------------------
|
| Now we will register a few bindings in the service container. We will
| register the exception handler and the console kernel. You may add
| your own bindings here if you like or you can make another file.
|
*/

$app->singleton(
    'Illuminate\Contracts\Debug\ExceptionHandler',
    'SIRCLO\ExampleModule\Exceptions\Handler'
);

$app->singleton(
    'Illuminate\Contracts\Console\Kernel',
    'SIRCLO\ExampleModule\Console\Kernel'
);

/*
|--------------------------------------------------------------------------
| Register Middleware
|--------------------------------------------------------------------------
|
| Next, we will register the middleware with the SIRCLO\ExampleModulelication. These can
| be global middleware that run before and after each request into a
| route or middleware that'll be assigned to some specific routes.
|
*/

// $app->middleware([
//    'SIRCLO\ExampleModule\Http\Middleware\ExampleMiddleware'
// ]);

// $app->routeMiddleware([
//     'auth' => 'SIRCLO\ExampleModule\Http\Middleware\Authenticate',
// ]);

/*
|--------------------------------------------------------------------------
| Register Service Providers
|--------------------------------------------------------------------------
|
| Here we will register all of the SIRCLO\ExampleModulelication's service providers which
| are used to bind services into the container. Service providers are
| totally optional, so you are not required to uncomment this line.
|
*/

// $app->register('SIRCLO\ExampleModule\Providers\SIRCLO\ExampleModuleServiceProvider');
// $app->register('SIRCLO\ExampleModule\Providers\AuthServiceProvider');
// $app->register('SIRCLO\ExampleModule\Providers\EventServiceProvider');
