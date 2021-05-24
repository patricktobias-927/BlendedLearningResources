<?php

class TitleModel extends CI_Model{

        public function __construct(){

            $this->load->helper(array('url', 'download'));
            $this->load->database();
            
        }

        public function fetchTitle($subject_id){
         
            $user_id = $this->session->user_id;
           

            $query = $this->db->query("SELECT s.subject as subject, s.subject_id as subject_id, t.title as title FROM tbl_subject s
            
            LEFT JOIN tbl_title t ON (s.subject_id = t.subject_id)
            LEFT JOIN tbl_subscription ss ON (s.subject_id = ss.subject_id)
           

            WHERE ss.school_id = (SELECT school_id FROM tbl_user WHERE user_id = $user_id) AND t.subject_id IN 
            (SELECT subject_id FROM tbl_title WHERE subject_id = $subject_id)");
            return $query->result_array();
          
    }
}