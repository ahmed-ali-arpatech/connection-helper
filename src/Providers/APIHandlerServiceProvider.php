<?php

namespace Leads\Providers;

use Ccm\Helpers\Classes\APIHandler;
use Illuminate\Support\ServiceProvider;

class APIHandlerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('APIHandler',function() {
            return new APIHandler;
        });
    }
}
