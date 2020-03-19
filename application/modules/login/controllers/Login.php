<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MX_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
	}

	function index(){
		$this->load->view('v_login');
	}

	function aksi_login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$where = array(
			'email' => $email,
			'password' => md5($password)
			);
		$cek = $this->m_login->cek_login("users",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $email,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("users"));

		}else{
			echo "email dan password salah !";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}