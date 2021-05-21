<?php

class ProfileModel extends CI_Model{

        public function __construct(){

            $this->load->helper(array('url', 'download'));
            $this->load->database();
            
        }

        public function changePassword($user_id,$password){
         
            // $user_id = $this->session->user_id;
            // $data =  $this->input->post('confirmed_password');
            // $password =  $_POST['confirmed_password'];

            $query = $this->db->query("UPDATE `tbl_user` SET `password` = '$password' WHERE `user_id` = $user_id");
        
            return $query;
         
    }
}