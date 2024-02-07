<?php

namespace App\Providers;

use App\Models\Article;
use App\Models\Programming;
use App\Models\Tag;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
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
        Paginator::useBootstrap();
        View::share('tag', Tag::all());
        View::share('programming', Programming::all());
        View::share('trending_article', Article::orderBy('view_count', 'desc')->take(4)->get());
        View::share('love_article', Article::orderBy('view_count', 'desc')->take(4)->get());
    }
}