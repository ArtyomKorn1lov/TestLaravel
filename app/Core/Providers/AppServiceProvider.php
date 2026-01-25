<?php

namespace App\Core\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::componentNamespace('App\\Modules\\General\\View\\Components', 'general');
        Blade::componentNamespace('App\\Modules\\News\\View\\Components', 'news');
        Blade::componentNamespace('App\\Modules\\Contacts\\View\\Components', 'contacts');
    }
}
