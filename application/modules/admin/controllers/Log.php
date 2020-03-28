<?php   
defined('BASEPATH') OR exit('No direct script access allowed');   

class Log extends MX_Controller {       

    private $_table = "activity_log";

    public function __construct()
    {
        parent::__construct();
        $this->load->model('login/m_login');
        $this->load->model('admin/m_log');
    }

    public function index()
    {
        if($this->m_login->cek_session())
        {
            $data["logs"] = $this->m_log->get_log();
            $this->load->view("admin/v_log", $data);
        }else{
            //jika session belum terdaftar, maka redirect ke halaman login
            redirect(base_url('login'));
        }
    }
}