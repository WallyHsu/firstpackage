<?php

namespace Wally\First;

use Illuminate\Support\ServiceProvider;

class FirstPackageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->app->make(FirstPackageController::class);

        include(__DIR__ . '/routes.php');
    
        //$this->loadViewsFrom(__DIR__ . '/views', 'HelloWorld');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
