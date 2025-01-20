<?php

namespace App\Providers;

use App\Models\Post;
use App\Models\User;
use App\Models\Order;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Gate;
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
        Gate::define('admin', function (User $user) {
            return $user->is_admin;
        });

        Gate::define('update-post', function (User $user, Post $post) {
            return $user->id === $post->author_id || $user->is_admin;
        });

        Gate::define('create-post', function (User $user) {
            return $user;
        });

        Gate::define('user-cart', function (User $user, Order $order) {
            return $user->id === $order->user->id;
        });



    }
}
