<?php

Route::get("letest_news", ['as' => 'index', 'uses' => 'Thesagaydak\News\Http\Controllers\NewsController@getIndex']);