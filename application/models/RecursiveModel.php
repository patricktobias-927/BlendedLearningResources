<?php

class RecursiveModel extends CI_Model{

    public function __construct(){

        $this->load->helper(array('url', 'download'));
        $this->load->database();
        
    }
    
    public function transferPath($rootDir,$filename){
            function getFilePath($rootDir,$filename){
 
            $dirF = $rootDir.'/'.$filename;
            if (file_exists($dirF)) {
             return $dirF;
        
            }
        
            $dirs = array_filter(glob($rootDir.'/*'), 'is_dir');
            $countOfFolders = count($dirs);
            $filepath='';
        
            foreach ($dirs as $key => $value) {
        
                $searchKey = $value.'/'.$filename;
        
                $nextPath = $value;
                if (file_exists($ffile = getFilePath($nextPath,$filename))) {
                    return $ffile;
                }
        
            }
        
            return 'notfound';
            
        }
        
        $finalFilePath = getFilePath($rootDir,$filename);
        return   $finalFilePath;
        // if (trim($finalFilePath)!='notfound') {
        //     print_r($finalFilePath);
        // }
        // else{
        //     echo "file not found";
        // }
    }   
}