<?php

class LoginModel extends CI_Model{

        public function __construct(){

            $this->load->helper(array('url', 'download'));
            $this->load->database();
        }

        public function login(){

            $this->db->where('user_name', $this->input->post('user_name', true));
            $this->db->where('password', $this->input->post('password', true));
            $result = $this->db->get('tbl_user');

            if($result->num_rows() == 1){
                return $result->row_array();

            }  else {
                return false;
        }
    }
}