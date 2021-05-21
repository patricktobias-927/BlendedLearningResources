<?php

class SubjectModel extends CI_Model{

        public function __construct(){

            $this->load->helper(array('url', 'download'));
            $this->load->database();
            
        }

        public function fetchSubject(){
         
            $user_id = $this->session->user_id;

            $query = $this->db->query("SELECT s.subject as subject FROM tbl_subject s
            
            LEFT JOIN  tbl_title t ON (s.subject_id = t.subject_id)
            LEFT JOIN tbl_subscription ss ON (t.subject_id = ss.subject_id)
            
            
            WHERE ss.school_id = (SELECT school_id FROM tbl_user WHERE user_id = $user_id)");

            return $query->result_array();
          
    }
}