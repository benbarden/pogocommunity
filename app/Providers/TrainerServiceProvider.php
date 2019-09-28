<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Services\TrainerService;

class TrainerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Services\TrainerService', function($app) {
            return new TrainerService();
        });
    }
}
