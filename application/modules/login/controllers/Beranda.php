<?php 
    defined('BASEPATH') OR exit('No direct script access allowed'); 
 
    class Beranda extends MX_Controller { 
 
        public function index()  {   
            $this->load->view('account/beranda');  
        } 
    }
    
?>