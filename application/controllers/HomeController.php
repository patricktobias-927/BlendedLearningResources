<?php

class HomeController extends CI_Controller{
    
    public function index(){

    $logged_in = $this->session->userdata('logged_in');
    if($logged_in != TRUE || empty($logged_in))
    {
        #user not logged in
        $this->session->set_flashdata('error', 'Session has Expired');
        redirect('login'); # Login view
    }
    else
    {
     

        $page = "Home";
        $this->load->model('TitleModel');
        $this->load->model('SubjectModel');

        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
            show_404();
        }   
        

        $data['subjects'] = $this->SubjectModel->fetchSubject();
        $title['title'] = "Blended Learning Resources";

        $this->load->view('templates/header', $title);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer');

     
        }   
    }
    
}