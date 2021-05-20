<?php

class LoginController extends CI_Controller{

    public function login(){
           
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');
        $this->form_validation->set_rules('user_name', 'Username', 'required'); 
        $this->form_validation->set_rules('password', 'Password', 'required'); 
        if($this->form_validation->run() == FALSE){
    
            
            $page = "UserLogin";
            $data['title'] = 'BLR Login';


                if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                    show_404();
                }   

                $this->load->view('templates/header', $data);
                $this->load->view('pages/'.$page);
                $this->load->view('templates/footer');

        }else{
            
            $this->load->model('LoginModel');
            $user_id = $this->LoginModel->login();

            if($user_id){
                $user_data = array(
                    'user_id' => $user_id['user_id'],
                    'first_name' => $user_id['first_name'],
                    'last_name' => $user_id['last_name'],
                    'full_name' => $user_id['first_name'].' '.$user_id['last_name'],
                    'user_name' => $user_id['user_name'],
                    'password' => $user_id['password'],
                    'school_code' => $user_id['school_code'],
                    'logged_in' => true
                );
                    $this->session->set_userdata($user_data);
                    $this->session->set_flashdata('user_loggedin', 'You are now logged in as '.$this->session->fullname);
                    redirect('home');
                }else{

                    $this->session->set_flashdata('failed_login','Login is invalid');
                    redirect('login');
            }
        }
    }

    public function logout(){

        $this->session->unset_userdata('firstname');
        $this->session->unset_userdata('lastname');
        $this->session->unset_userdata('fullname');
        $this->session->unset_userdata('user_name');
        $this->session->unset_userdata('password');
        $this->session->unset_userdata('school_code');
        $this->session->unset_userdata('logged_in');
        
        $this->load->driver('cache');
        $this->session->sess_destroy();
        $this->cache->clean();
        ob_clean();

        redirect('login');
    }
}

?>