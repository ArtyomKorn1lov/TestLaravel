<?php

namespace App\Modules\Contacts\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\Modules\Contacts\Repositories\ContactsRepositoryInterface;
use App\Modules\Contacts\Repositories\ContactsRepository;
use App\Modules\Contacts\Repositories\FeedbackRepositoryInterface;
use App\Modules\Contacts\Repositories\FeedbackRepository;

class ContactServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(ContactsRepositoryInterface::class, ContactsRepository::class);
        $this->app->bind(FeedbackRepositoryInterface::class, FeedbackRepository::class);
    }

    public function boot(): void
    {
        Blade::componentNamespace('App\\Modules\\Contacts\\View\\Components', 'contacts');
    }
}
