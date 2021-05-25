<?php

class RecursiveController extends CI_Controller{
    
    public function transferPath(){
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
        
        $finalFilePath = getFilePath('files','PPH_PLUMA.pdf');

        if (trim($finalFilePath)!='notfound') {
            print_r($finalFilePath);
        }
        else{
            echo "file not found";
        }
    }   
}