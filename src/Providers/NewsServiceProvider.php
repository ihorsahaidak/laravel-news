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
use Illuminate\Routing\Router;

class NewsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Router $router)
    {
        $router->get('letest_news', ['as' => 'letest_news.index', 'uses' => 'Thesagaydak\News\Http\Controllers\NewsController@getIndex']);
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

        $this->loadViewsFrom(__DIR__ . '/../views', 'news');

        require __DIR__ . "/../routes.php";

        include_once __DIR__ . "/../Http/Controllers/NewsController.php";
    }
}