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

    public function change(){

            $this->load->model('ProfileModel');

            // $user_id = $this->input->post('user_id');
            $password =  $this->input->post('confirmed_password');
            $user_id = $this->session->user_id;
            // $password =  $this->input->post('confirmed_password');
         
            
            $page = "ChangeProfile";

            $data['title'] = "BLR Login";
            $this->load->view('templates/header', $data);
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer');
    
            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                show_404();
            }   
          
            
       
            $this->ProfileModel->changePassword($user_id,$password);
        
          
       
            // $this->session->unset_userdata('firstname');
            // $this->session->unset_userdata('lastname');
            // $this->session->unset_userdata('fullname');
            // $this->session->unset_userdata('user_name');
            // $this->session->unset_userdata('password');
            // $this->session->unset_userdata('school_code');
            // $this->session->unset_userdata('logged_in');
            
            // $this->load->driver('cache');
            // // $this->session->sess_destroy();
            // $this->cache->clean();
            // ob_clean();
    
            // redirect('login');
      
            }   
      
    
}