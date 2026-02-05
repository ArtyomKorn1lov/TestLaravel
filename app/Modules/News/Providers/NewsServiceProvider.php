<?php

namespace App\Modules\News\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use App\Modules\News\Repositories\NewsRepositoryInterface;
use App\Modules\News\Repositories\NewsRepository;
use App\Modules\News\Repositories\ProjectRepositoryInterface;
use App\Modules\News\Repositories\ProjectRepository;

class NewsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(NewsRepositoryInterface::class, NewsRepository::class);
        $this->app->bind(ProjectRepositoryInterface::class, ProjectRepository::class);
    }

    public function boot(): void
    {
        Blade::componentNamespace('App\\Modules\\News\\View\\Components', 'news');
    }
}
