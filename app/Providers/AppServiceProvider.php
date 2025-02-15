<?php

namespace App\Providers;

use App\View\Components\PublicHeader;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

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
        Blade::component("output", PublicHeader::class);
        Blade::component("shaique", PublicHeader::class);
    }
}
