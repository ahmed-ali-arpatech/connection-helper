<?php
namespace Ccm\Helper\Providers;

use Ccm\Helper\Classes\AuthHandler;
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
