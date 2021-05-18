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

            $user_id = $this->LoginModel->login();

            if($user_id){
                $user_data = array(
                    
                    'first_name' => $user_id['first_name'],
                    'last_name' => $user_id['last_name '],
                    'full_name' => $user_id['first_name'].' '.$user_id['last_name'],
                    // 'access' => $user_id['is_admin'],
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
}

?>