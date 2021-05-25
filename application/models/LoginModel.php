<?php

class LoginModel extends CI_Model{

        public function __construct(){

            $this->load->helper(array('url', 'download'));
            $this->load->database();
        }

        public function login(){

            // $this->db->where('user_name', $username);
            $this->db->where('user_name', $this->input->post('user_name', true));
            $this->db->where('password', md5($this->input->post('password', true)));
            $result = $this->db->get('tbl_user');

            // $result = $query->row_array();

            // if (!empty($result) && password_verify($password, $result['password'])) {
            //     // if this username exists, and the input password is verified using password_verify
            //     return $result;
            // } else {
            //     return false;
            // }
            
            if($result->num_rows() == 1){
                return $result->row_array();

            }  else {
                return false;
        }
    }
}