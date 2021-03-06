<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use \App\Models\Tag;

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
        view()->composer('post.form', function ($view) {
            $view->with('tags', Tag::all());
        });
    }
}
