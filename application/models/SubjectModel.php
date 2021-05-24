<?php

class SubjectModel extends CI_Model{

        public function __construct(){

            $this->load->helper(array('url', 'download'));
            $this->load->database();
            
        }

        public function fetchSubject(){
         
            $user_id = $this->session->user_id;


            $query = $this->db->query("SELECT s.subject as subject, s.subject_id as subject_id FROM tbl_subject s
            
        
            LEFT JOIN tbl_subscription ss ON (s.subject_id = ss.subject_id)
           

            WHERE ss.school_id = (SELECT school_id FROM tbl_user WHERE user_id = $user_id)");

            return $query->result_array();
          
    }
}