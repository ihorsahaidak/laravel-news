<?php

/**
 * Created by PhpStorm.
 * User: igorsagaydak
 * Date: 5/12/17
 * Time: 7:04 PM
 */

namespace Thesagaydak\News\Providers;

use Illuminate\Support\ServiceProvider;
use Thesagaydak\News\Http\Controllers\NewsController;


class NewsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        require __DIR__ . "/../routes.php";
        $this->app->make('Thesagaydak\News\Http\Controllers\NewsController');
        $this->loadViewsFrom(__DIR__ . '/../views', 'news');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('news', function () {
            return new NewsController();
        });

    }
}