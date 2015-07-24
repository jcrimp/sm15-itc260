<?php
//Rss.php

class Rss extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Rss_model');
        $this->config->set_item('banner', 'RSS Feed');
        $this->config->set_item('title', 'Vocal Fry News');
    }//end construct
    
    public function index()
    {
        $data['rss'] = $this->Rss_model->get_rss();
        $data['title'] = 'RSS Feed - Vocal Fry News';
        $this->load->view('rss/index', $data);
        
        
    }//end index
    

    
}//end Rss