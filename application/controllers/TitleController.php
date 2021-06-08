<?php

class TitleController extends CI_Controller{
    
    public function index(){

    $logged_in = $this->session->userdata('logged_in');
    if($logged_in != TRUE || empty($logged_in))
    {
        #user not logged in
        $this->session->set_flashdata('error', 'Session has Expired');
        redirect('login'); # Login view
    }
    else
    {
     
        $this->load->model('TitleModel');
        $this->load->model('SubjectModel');
        $page = "TitlePage";


        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
            show_404();
        }   

        $subject_id =  $this->input->post('subject_id');
        $data['subject']=  $this->input->post('subject');
        $data['subject_name'] =  $this->SubjectModel->fetchSubjectName($subject_id);

        $data['subjects'] = $this->SubjectModel->fetchSubject();
        $data['titles'] = $this->TitleModel->fetchTitle($subject_id);
        $data['title'] = "Blended Learning Resources";

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer');

        }   
    }

    public function view(){

        $logged_in = $this->session->userdata('logged_in');
        if($logged_in != TRUE || empty($logged_in))
        {
            #user not logged in
            $this->session->set_flashdata('error', 'Session has Expired');
            redirect('login'); # Login view
        }
        else
        {
            $this->load->helper('directory');
            $this->load->model('TitleModel');
            $this->load->model('RecursiveModel');
            $this->load->model('ScanModel');
            $this->load->model('SubjectModel');

            $page = "TitleView";
    
    
            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                show_404();
            }   
            
            // $data['path'] = directory_map('./files/', 1);

            $title_id =  $this->input->post('title_id');
        
            // $titleview = $this->TitleModel->titleView($title_id);
            $data['titles'] = $this->TitleModel->titleView($title_id);

            $data['subjects'] = $this->SubjectModel->fetchSubject();
            $rootDir = 'assets/files';
            $filename =  $titlename;
            $data['path'] = $this->RecursiveModel->transferPath($rootDir);

            $data['file_path'] = $this->ScanModel->transferPath($rootDir);
       
            
            $data['title'] = "Blended Learning Resources";
    
            $this->load->view('templates/header', $data);
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer');
    
         
            }   
        }


        public function search(){

            $logged_in = $this->session->userdata('logged_in');
            if($logged_in != TRUE || empty($logged_in))
            {
                #user not logged in
                $this->session->set_flashdata('error', 'Session has Expired');
                redirect('login'); # Login view
            }
            else
            {
                $this->load->helper('directory');
                $this->load->model('SearchRecursiveModel');
                $this->load->model('SubjectModel');
           
    
                $page = "SearchView";
        
        
                if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                    show_404();
                }   
                
          
                $data['subjects'] = $this->SubjectModel->fetchSubject();
                $rootDir = 'assets/files';
                $filename = $this->input->post('search-field');
            
                $data['file'] = $this->SearchRecursiveModel->transferPath($rootDir,$filename);
        
    
                
                $data['title'] = "Blended Learning Resources";
        
                $this->load->view('templates/header', $data);
                $this->load->view('pages/'.$page, $data);
                $this->load->view('templates/footer');
        
             
                }   
            }
    

        
}