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
        $page = "TitlePage";


        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
            show_404();
        }   

        $subject_id =  $this->input->post('subject_id');

        $data['title'] = $this->TitleModel->fetchTitle($subject_id);
        $title['title'] = "Blended Learning Resources";

        $this->load->view('templates/header', $title);
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

            $page = "TitleView";
    
    
            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                show_404();
            }   
            
            $data['path'] = directory_map('./files/', 1);

            $title_id =  $this->input->post('title_id');
            $titlename =  $this->input->post('title');
            // $titleview = $this->TitleModel->titleView($title_id);
            $data['title'] = $this->TitleModel->titleView($title_id);
            $rootDir = 'files';
            $filename =  $titlename;
            $data['path'] = $this->RecursiveModel->transferPath($rootDir,$filename);
            // $data['path'] = 'files/PPH_PLUMA.pdf';
            // $path = $this->RecursiveModel->transferPath()->getFilePath('files','PPH_PLUMA.pdf');

            // if (trim($path)!='notfound') {
            //     print_r($path);
            // }
            // else{
            //     echo "file not found";
            // }

            
            $title['title'] = "Blended Learning Resources";
    
            $this->load->view('templates/header', $title);
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer');
    
         
            }   
        }

    

        
}