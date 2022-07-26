<?php

namespace App\Providers;

// use App\Repositories\RepositoryInterface\CustomerInterface;
// use App\Repositories\CustomerRepository;
use App\Repositories\RepositoryInterface\UserInterface;
use App\Repositories\UserRepository;

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
        $this->app->bind(UserInterface::class, UserRepository::class);
        // $this->app->bind(CustomerInterface::class, CustomerRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
