<?php 
    defined('BASEPATH') OR exit('No direct script access allowed'); 
 
    class Profile extends MX_Controller { 
 
        function __construct(){           
            parent::__construct();
            $this->load->model('login/m_login');
        }

        public function index()  {   
            if($this->m_login->cek_session()){
                $this->load->view('v_profile');  
            }else{
                //jika session belum terdaftar, maka redirect ke halaman login
                redirect(base_url('login'));
            }
        } 
    }
    
?>