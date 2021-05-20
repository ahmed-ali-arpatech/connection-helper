<?php

namespace Eurokat\Helper;

use Illuminate\Support\ServiceProvider;

class HelperServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->make('Ccm\Helpers\Greeter');        
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {  

        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');


        if (file_exists($file = app_path('Helpers/helpers.php')))
        {
            require $file;
        }
    }
}
