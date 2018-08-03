<?php

$namespace = '';
if (isset($this)) 
{
    $namespace = 'SIRCLO\Testimonial\Http\Controllers\\';   
    $router = $this->app->router; 
}

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// Testimonial
$router->group(['prefix' => 'api/v1/example-modules'], function() use($namespace, $router)
{
    $router->get('hello-world', function() { return 'Hello World'; });
    //
});

