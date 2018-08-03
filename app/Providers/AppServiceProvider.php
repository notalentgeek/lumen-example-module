<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function boot()
    {
        require_once __DIR__.'/../../vendor/autoload.php';
        require_once __DIR__.'/../../vendor/bootstrap/loadComponents.php';

        // Load controllers here
        // $this->app->make('Example\Controller');
    }
}
