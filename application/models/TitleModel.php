<?php

class TitleModel extends CI_Model{

        public function __construct(){

            $this->load->helper(array('url', 'download'));
            $this->load->database();
            
        }

        public function fetchTitle($subject_id){
         
            $user_id = $this->session->user_id;
           

            $query = $this->db->query("SELECT s.subject as subject, s.subject_id as subject_id, t.title as title, t.title_id as title_id FROM tbl_subject s
            
            LEFT JOIN tbl_title t ON (s.subject_id = t.subject_id)
            LEFT JOIN tbl_subscription ss ON (t.title_id = ss.title_id)

            WHERE  t.subject_id IN 
            (SELECT subject_id FROM tbl_title WHERE subject_id = $subject_id)  AND ss.school_id = (SELECT school_id FROM tbl_user WHERE user_id = $user_id)");
            return $query->result_array();
          
    }

    public function titleView($title_id){
         
       
            $query = $this->db->query("SELECT tt.title as title FROM tbl_user us
            
            LEFT JOIN tbl_subscription sub ON (us.school_id = sub.school_id)
            LEFT JOIN tbl_title tt ON (sub.title_id = tt.title_id)

            WHERE tt.title_id = $title_id");
            return $query->result_array();
        
    }
}