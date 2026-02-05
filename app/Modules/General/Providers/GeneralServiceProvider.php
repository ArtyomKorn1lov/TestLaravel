<?php

namespace App\Modules\General\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use App\Modules\General\Repositories\BannerRepositoryInterface;
use App\Modules\General\Repositories\BannerRepository;

class GeneralServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(BannerRepositoryInterface::class, BannerRepository::class);
    }

    public function boot(): void
    {
        Blade::componentNamespace('App\\Modules\\General\\View\\Components', 'general');
    }
}
