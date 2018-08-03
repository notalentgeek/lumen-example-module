<?php

namespace SIRCLO\ExampleModule\Providers;

use Laravel\Lumen\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'SIRCLO\ExampleModule\Events\ExampleEvent' => [
            'SIRCLO\ExampleModule\Listeners\ExampleListener',
        ],
    ];
}
