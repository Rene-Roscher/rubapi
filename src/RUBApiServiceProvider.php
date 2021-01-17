<?php

namespace RServices\RUBApi;

use Illuminate\Support\ServiceProvider;

class RUBApiServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->singleton('rubapi', function () {
            return new RUBApi;
        });
    }
}
