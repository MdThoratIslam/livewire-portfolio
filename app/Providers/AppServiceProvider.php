<?php

namespace App\Providers;

use App\Models\User;
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
        view()->share('app_name', User::first()->name ?? "Md Thorat Islam");
        view()->share('app_version', '1.0.0');
        view()->share('app_author', 'Md Thorat Islam');
        view()->share('cover_image', asset('/assets/frontEnd/img/about.jpg'));
        view()->share('app_logo', asset('/assets/frontEnd/img/logo.png'));
        view()->share('profile_image', asset('https://via.placeholder.com/80x80.png'));
    }
}
