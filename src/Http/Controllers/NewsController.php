<?php

namespace Thesagaydak\News\Http\Controllers;

use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function getIndex()
    {
        $link = 'http://www.pravda.com.ua/rss/view_mainnews/'; // the link to XML news file
        $feed = implode(file($link));
        $xml = simplexml_load_string($feed);
        $json = json_encode($xml);
        $array = json_decode($json,TRUE);
        return  view('news::running_news_line', compact('array'));
    }
}