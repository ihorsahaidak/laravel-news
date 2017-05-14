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
        $array = json_decode($json, TRUE);
        return  view('news::running_news_line', compact('array'));

        /*$news_line = '
        <marquee style="bottom: 0px; left: 0px; position: fixed"
             onmouseover="this.stop();"
             onmouseout="this.start();"
             behavior="scroll"
             bgcolor="#ccc"
             direction="left"
             scrollamount="6"
             height="20"
             loop="infinite"
             width="100%">
        ';

        foreach ($array['channel']['item'] as $item) {
            $news_line .= '<a href="' . $item['link'] . '" target="_blank">' . $item['title'] . '</a>
                <strong>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</strong>';
        }

        $news_line .= '</marquee>';

        return $news_line;*/
    }
}