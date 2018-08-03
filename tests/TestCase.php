<?php

abstract class TestCase extends Laravel\Lumen\Testing\TestCase
{
    /**
     * Creates the application.
     *
     * @return \Laravel\Lumen\SIRCLO\ExampleModulelication
     */
    public function createSIRCLO\ExampleModulelication()
    {
        return require __DIR__.'/../bootstrap/app.php';
    }
}
