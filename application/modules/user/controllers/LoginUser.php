<?php   
defined('BASEPATH') OR exit('No direct script access allowed');   
 
class LoginUser extends MX_Controller {       
    function __construct(){           
        parent::__construct();
        $this->load->model('m_user');
    }
 
    public function index(){
        $this->load->view("login_user");
    }

    function aksi_login(){
		$username = $this->input->post('nama');
        $password = $this->input->post('nomeja');
        $email = $this->input->post('email');
        if ($username == "" || $password == "" || $email == "") {
            $this->session->set_flashdata('login_failed', '<div class="alert alert-danger">Username, No.Meja atau Email kosong!</div>');
            redirect(base_url('user/loginuser'));
        }else{
            $session = array(
                'username' => $username, // Buat session username
                'nomeja' => $password,
                'email' => $email
            );
            $this->session->set_userdata($session);
            redirect(base_url("user"));
        }
    }
    
    function logout(){
		$this->session->sess_destroy();
		redirect(base_url('user/loginuser'));
	}
}