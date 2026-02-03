<?php

namespace App\Core\Providers;

use App\Core\Services\JsonService;
use App\Core\Services\JsonServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(JsonServiceInterface::class, JsonService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
