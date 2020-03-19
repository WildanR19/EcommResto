<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MX_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
		$this->load->library(array('form_validation','session'));
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

			redirect(base_url("main/dashboard"));
			$this->session->set_flashdata('success', 'Anda Berhasil Login');

		}else{
			$this->session->set_flashdata('login_failed', '<div class="alert alert-danger">Username Atau Password salah!</div>');
		   	redirect(base_url('login'));
		}
	}

	public function register(){
		$data['title'] = 'Sign Up';
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[12]|is_unique[users.username]');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
		$this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

		if($this->form_validation->run() === FALSE){
			$this->load->view('v_register', $data);
		} else {
			// Encrypt password
			$enc_password = md5($this->input->post('password'));

			$this->m_login->register($enc_password);

			// Set message
			$this->session->set_flashdata('user_registered', 'You are now registered and can log in');

			redirect(base_url('login'));
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}