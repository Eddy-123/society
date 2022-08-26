<?php

namespace App\Providers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::define('update-post', function (User $user, Post $post) {
            return $user->id === $post->user_id;
        });

        Gate::define('destroy-post', function (User $user, Post $post) {
            return $user->id === $post->user_id;
        });
    }
}
