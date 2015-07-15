<?php
//Rss.php

class Rss extends CI_Controller {
    
    public function index()
    {
        //$request = "http://rss.news.yahoo.com/rss/software";
        $request = "https://news.google.com/news?pz=1&cf=all&ned=us&hl=en&q=sea+sponge&output=rss";
        /*
        https://www.google.com/search?hl=en&gl=us&tbm=nws&authuser=0&q=sea+sponge&oq=sea+sponge&gs_l=news-cc.3..43j43i53.7281.9934.0.10164.12.7.1.4.5.0.112.391.6j1.7.0...0.0...1ac.1.bqZdAmp-3Es
        
        */
        $response = file_get_contents($request);
        $xml = simplexml_load_string($response);
        print '<h1>' . $xml->channel->title . '</h1>';
        foreach($xml->channel->item as $story)
        {
          echo '<a href="' . $story->link . '">' . $story->title . '</a><br />'; 
          echo '<p>' . $story->description . '</p><br /><br />';
        }
    }//end index
    
}//end Rss