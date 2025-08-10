<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;

class FilamentThemeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Add custom CSS to Filament admin panel
        View::composer('filament::components.layouts.base', function ($view) {
            $view->with('styles', [
                asset('css/filament-custom.css'),
            ]);
        });
    }
}
