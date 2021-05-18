<?php

class HomeController extends CI_Controller{
    
    public function index(){
        
            $page = "Home";

            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                show_404();
            }   
    
            $data['title'] = "Blended Learning Resources";
    
            $this->load->view('templates/header', $data);
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer');

     
    }   
}