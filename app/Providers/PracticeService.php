<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class PracticeService extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Services\PracticeInterface', 'App\Services\PracticeService');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
