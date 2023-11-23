<?php

namespace App\Providers;

use App\Services\HermanService;
use App\Services\TestService;
use Illuminate\Support\ServiceProvider;

class HermanServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(HermanService::class, function() {
            return new HermanService(1);
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
