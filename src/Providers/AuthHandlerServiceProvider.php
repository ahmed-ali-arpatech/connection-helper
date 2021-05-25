<?php

namespace Leads\Providers;

use Ccm\Helpers\Classes\AuthHandler;
use Illuminate\Support\ServiceProvider;

class AuthHandlerServiceProvider extends ServiceProvider
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
        $this->app->bind('AuthHandler',function() {
            return new AuthHandler;
        });
    }
}
