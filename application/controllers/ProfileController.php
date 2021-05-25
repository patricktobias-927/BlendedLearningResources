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
            $this->load->library('encryption');

            //ENCRYPT
            // $key = bin2hex($this->encryption->create_key(16));
        
            // $options = [
            //     'cost' => 12
            //     // 'salt' => $key,
            // ];
            // $password =  password_hash($this->input->post('confirmed_password'), PASSWORD_BCRYPT, $options);
           
            // $user_id = $this->input->post('user_id');
            $new_password =  $this->input->post('new_password');
        
            $user_id = $this->session->user_id;
            $password =  md5($this->input->post('confirmed_password'));
          
            $this->form_validation->set_rules('new_password', 'new_password', 'required');
            $this->form_validation->set_rules('confirmed_password', 'confirmed_password', 'required|callback_check_equal_less['.$this->input->post('new_password').']');
        
                
            if($this->form_validation->run() == FALSE){

                $page = "ChangeProfile";
    
                $data['title'] = "BLR Login";
               
                if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                    show_404();
                }   
        
    
                $this->session->set_flashdata('failed_change','Passwords are not the same!');
                redirect('changePassword');
        
            }else{

                $page = "ChangeProfile";
    
                $data['title'] = "BLR Login";
               
                $this->ProfileModel->changePassword($user_id,$password);

                $this->session->set_flashdata('changed_password', 'Password changed!');

                $this->load->view('templates/header', $data);
                $this->load->view('pages/'.$page, $data);
                $this->load->view('templates/footer');

            }
              
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
        public function check_equal_less($new_password,$password)
        {
            if ($new_password !== $password)
            {
               
                $this->form_validation->set_message('check_equal_less', 'Passwords are not the same!');
                return false;       
            }
            return true;
        }
      
}