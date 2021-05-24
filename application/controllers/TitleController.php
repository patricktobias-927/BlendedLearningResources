<?php

class TitleController extends CI_Controller{
    
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
     
        $this->load->model('TitleModel');
        $page = "TitlePage";


        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
            show_404();
        }   

        $subject_id =  $this->input->post('subject_id');

        $data['title'] = $this->TitleModel->fetchTitle($subject_id);
        $title['title'] = "Blended Learning Resources";

        $this->load->view('templates/header', $title);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer');

     
        }   
    }
    

    public function view(){

        $logged_in = $this->session->userdata('logged_in');
        if($logged_in != TRUE || empty($logged_in))
        {
            #user not logged in
            $this->session->set_flashdata('error', 'Session has Expired');
            redirect('login'); # Login view
        }
        else
        {
         
            $this->load->model('TitleModel');
            $page = "TitlePage";
    
    
            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                show_404();
            }   
    
            $subject_id =  $this->input->post('subject_id');
            
            $data['title'] = $this->TitleModel->fetchTitle($subject_id);
            $title['title'] = "Blended Learning Resources";
    
            $this->load->view('templates/header', $title);
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer');
    
         
            }   
        }
}