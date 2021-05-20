<?php

class LoginLogModel extends CI_Model{

        public function __construct(){

            $this->load->helper(array('url', 'download'));
            $this->load->database();
            
        }

        public function insert(){

            $user_id = $this->session->user_id;
            $dateNow = date("m/d/Y H:i:s");

            $query = $this->db->query(" INSERT INTO tbl_user  (user_id, login_time)
            VALUES ('$user_id', ' $dateNow') ");
            return $query;
          
    }
}