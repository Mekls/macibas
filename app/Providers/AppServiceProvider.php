<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

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
        Paginator::defaultView('pagination::default');

        Gate::define('crud-actions', function (User $user) {
            return $user->user_role_id === 1;
        });

        Gate::define('view-info', function (User $user) {
            return ($user->user_role_id === 1 or $user->user_role_id === 2);
        });
    }
}
