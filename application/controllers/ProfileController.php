<?php

class ProfileController extends CI_Controller{
    
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
     
        $page = "ChangeProfile";

        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
            show_404();
        }   

        $data['title'] = "Change Password";

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer');

     
        }   
    }

    public function changePassword(){

        $logged_in = $this->session->userdata('logged_in');
        if($logged_in != TRUE || empty($logged_in))
        {
            #user not logged in
            $this->session->set_flashdata('error', 'Session has Expired');
            redirect('login'); # Login view
        }
        else
        {
         
            $page = "UserLogin";
    
            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                show_404();
            }   
    
            $data['title'] = "BLR Login";
    
            $this->load->view('templates/header', $data);
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer');
    
         
            }   
        }
    
}