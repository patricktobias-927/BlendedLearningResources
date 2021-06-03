<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Syncer extends CI_Controller {

    protected $rootDir;
    
    public function __construct()
    {
        #TODO: CHECK IF USER LOGGED IN?
        parent::__construct();
        $this->rootDir = RESOURCES_PATH; #CONFIGURE IN INDEX.PHP
    }
        

	public function index()
	{
		$this->load->helper('directory');
        $map = custom_directory_map( $this->rootDir . 'FILIPINO/PPH_PLUMA_G5/Q1/TEACHERS RESOURCES/', 1 );

        #echo '<pre>';
        #print_r( $map );
        #print_r( $this->_array_value_exists_wildcard( $map, 'b*', 'key-value' ));
        echo '<pre>';
        print_r( $this->_quick_filter( $this->rootDir, 'documents' ));
        
	}

    public function open_dir($sort = 'asis')
    {
        $dir = $this->input->get( 'd', TRUE );

        if( !empty( $dir ))
        {
            $finalDir = $this->rootDir . $dir;

            #TODO: VERIFY IF HAS ACCESS IN SUBJECT/TITLE TO DATABASE

            $this->load->helper('directory');
            $map = $sort == 'asis' ? custom_directory_map( $finalDir, 1) : custom_directory_map( $finalDir, 1, FALSE, TRUE ); #OPEN DIR, DEPTH 1

            if($sort == 'grouped')  #GROUP PER FILE TYPE
            {
                $rFileTypes = array_keys( $map['fileTypes'] );
                
                foreach( $rFileTypes as $ext )
                {
                    if( $ext != 'directory' )
                    {
                        $map['fileLists'][$ext] = array();
                        $filtered = $this->_quick_filter( $finalDir, $ext );
                        $map['fileLists'][$ext] = $filtered['filesList'];
                    }
                }
            }

            #GET DIRECTORY LAST MODIFIED
            $lastModified = date( 'M d, Y', filemtime( $finalDir ));
            $map['details'] = array(
                    'last-update' => $lastModified
                );
            
            echo '<pre>';
            print_r( $map );
            #echo json_encode( $map );
        }
    }

    #PUBLIC FILTER Patrick
    public function filter()
    {
        $type = $this->input->post('type');
            #LOOP THROUGH TAGGED TITLES
            $this->load->model('SubjectModel');
            $data['subjects'] = $this->SubjectModel->fetchSubject();
            // $this->_quick_filter( $this->rootDir, 'pdfs' );

            #PATRICK
            $data['arrayFiles'] = $this->_quick_filter($this->rootDir, $type);

            //FILTER FILE PATH
            $data['filteredFiles'] = $this->_quick_filter( $this->rootDir, $type );
        

            $data['title'] = 'Quick Filter';
            
            $this->load->model('SubjectModel');
            $data['subjects'] = $this->SubjectModel->fetchSubject();

            $page = 'QuickFilter';
            
            $this->load->view('templates/header', $data);
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer');


    }

    #PUBLIC ORIGINAL FILTER
    // public function filter($type = '', $directory = '')
    // {
    //     if( !empty( $type ))
    //     {
    //         #LOOP THROUGH TAGGED TITLES

    //         $this->_quick_filter( $this->rootDir, 'pdfs' );
    //     }
    // }

    public function dl()
    {
        #$paths = $this->input->post( 'p', TRUE ); #PASS JSON FROM AJAX (STRINGIFY ARRAY LIST OF )
        $paths = '[
                "FILIPINO/PPH_PLUMA_G5/Q1/TEACHERS RESOURCES/user_guide/search.html",
                "FILIPINO/PPH_PLUMA_G5/Q1/TEACHERS RESOURCES/user_guide/tutorial"
            ]';
        
        $paths = json_decode( $paths );

        #TODO: VERIFY ACCESS TO TITLES

        if( !empty( $paths ))
        {
            if( count($paths) == 1 )
            {
                $finalPath = $this->rootDir . $paths[0];

                if( !is_dir( $finalPath ))
                {
                    $this->load->helper('download');
                    force_download( $finalPath, NULL );
                }
                else
                {
                    $zippedFiles = $this->_zipper( $paths );
                }
            }
            else
            {
                $zippedFiles = $this->_zipper( $paths );
            }
        }
        else
        {
            echo 'No file to download';
        }
    }

    #PRIVATE FUNCTIONS
    private function _zipper($paths = array())
    {
        $this->load->library('zip');

        foreach( $paths as $cPath )
        {
            $finalPath = $this->rootDir . $cPath;
            
            if(is_dir( $finalPath ))
            {
                $this->zip->read_dir( $finalPath, FALSE );
            }
            else
            {
                $this->zip->read_file( $finalPath );
            }
        }

        $filename = 'blrp-download-' . date('Ymd') . chr(rand(65,90)) . random_int(000001,999999) . '.zip';
        $this->zip->download( $filename );
    }

    private function _rsearch($folder, $regPattern, $isSearch = TRUE) {

        $dir = new RecursiveDirectoryIterator($folder);
        $ite = $isSearch == TRUE ? new RecursiveIteratorIterator($dir) : new RecursiveIteratorIterator($dir, \FileSystemIterator::CURRENT_AS_SELF);
        $files = new RegexIterator($ite, $regPattern, RegexIterator::GET_MATCH);
        $fileList = array();
        $fileTypeList = array();

        foreach($files as $file) {

            $file[0] = str_replace('\\', '/', $file[0]);
            if(!array_key_exists( $file[1], $fileTypeList))
            {
                $fileTypeList[$file[1]] = 1;
            }
            else
            {
                $fileTypeList[$file[1]]++;
            }

            array_pop($file); #CUSTOM CODE
            
            if( $isSearch == FALSE )
            {
                $rFilename = explode( '/', $file[0] );
			    $filename = end($rFilename);
                $file[0] = $filename;
            }

            $fileList = array_merge($fileList, str_replace('\\', '/', $file ));
        }

        return array(
            'fileTypes' => $fileTypeList,
            'filesList' => $fileList
        );
    }

    private function _quick_filter($dir, $type)
    {
        $x = FALSE;
        $rFilterTypes = array(
            'images' => "jpg|jpeg|png|gif|tiff",
            'webpages' => "html|htm",
            'documents' => "doc|docx|txt",
            'presentations' => "ppt|pptx",
            'pdfs' => "pdf",
            'videos' => "mp4|mov|wmv|avi"
        );

        if( !empty( $dir ) && !empty( $type ))
        {
            if( array_key_exists( $type, $rFilterTypes ))
            {
                $type = $rFilterTypes[$type];
            }
            else
            {
                $x = TRUE;
            }
            
            $files = $x == TRUE ? $this->_rsearch($dir, '/^.*\.(' . $type . ')$/i', FALSE) : $this->_rsearch($dir, '/^.*\.(' . $type . ')$/i');
            #$files = glob( $finalDir, GLOB_BRACE);

            return !empty( $files ) ? $files : FALSE;
        }
    }

    private function _array_value_exists_wildcard ( $array, $search, $return = '' ) 
    {
        $search = str_replace( '\*', '.*?', preg_quote( $search, '/' ) );
        $result = preg_grep( '/^' . $search . '$/i', array_values( $array ) );
        if ( $return == 'key-value' )
            return array_intersect( $array, $result );

        return $result;
    }

}
