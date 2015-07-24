<?php
//Rss_model.php

class Rss_model extends CI_Model {


    public function get_rss($slug = FALSE)
    {

            $request = "https://news.google.com/news?pz=1&cf=all&ned=us&hl=en&q=vocal+fry&output=rss";
        /*
        https://www.google.com/search?hl=en&gl=us&tbm=nws&authuser=0&q=sea+sponge&oq=sea+sponge&gs_l=news-cc.3..43j43i53.7281.9934.0.10164.12.7.1.4.5.0.112.391.6j1.7.0...0.0...1ac.1.bqZdAmp-3Es
        
        */
        $response = file_get_contents($request);
        $xml = simplexml_load_string($response);
        
        
        return $xml;
    }//end get_rss()
    
}//end Rss_model