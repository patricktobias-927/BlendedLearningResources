<?php

class ProfileModel extends CI_Model{

        public function __construct(){

            $this->load->helper(array('url', 'download'));
            $this->load->database();
            
        }

        public function changePassword(){

            $user_id = $this->session->user_id;
            $data =  $this->input->post('confirmed_password');
    
            $query = $this->db->query("UPDATE tbl_user SET password = '$data' WHERE user_id = $user_id");
            return $query;
          
    }
}