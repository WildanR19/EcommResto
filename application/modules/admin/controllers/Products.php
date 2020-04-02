<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_products");
        $this->load->library('form_validation');
        $this->load->model('login/m_login');
    }

    public function index()
    {
        if($this->m_login->cek_session())
        {
            $data["products"] = $this->m_products->getAll();
            $this->load->view("admin/products/list", $data);
        }else{
            //jika session belum terdaftar, maka redirect ke halaman login
            redirect(base_url('login'));
        }
    }

    public function add()
    {
        if($this->m_login->cek_session()){
            $product = $this->m_products;
            $validation = $this->form_validation;
            $validation->set_rules($product->rules());

            if ($validation->run()) {
                $product->save();
                $this->session->set_flashdata('success', 'Berhasil disimpan');
            }

            $data['category'] = $this->m_products->getCategory();
            $this->load->view("admin/products/new_form", $data);
        }else{
            //jika session belum terdaftar, maka redirect ke halaman login
            redirect(base_url('login'));
        }
    }

    public function edit($id = null){
        if($this->m_login->cek_session()){
            if (!isset($id)) redirect('admin/products');
           
            $product = $this->m_products;
            $validation = $this->form_validation;
            $validation->set_rules($product->rules());
    
            if ($validation->run()) {
                $product->update();
                $this->session->set_flashdata('success', 'Berhasil disimpan');
            }
    
            $data["product"] = $product->getById($id);
            if (!$data["product"]) show_404();
            
            $this->load->view("admin/products/edit_form", $data);
        }else{
            //jika session belum terdaftar, maka redirect ke halaman login
            redirect(base_url('login'));
        }
    }

    public function delete($id=null){
        if($this->m_login->cek_session()){
            if (!isset($id)) show_404();
            
            if ($this->m_products->delete($id)) {
                redirect(base_url('admin/products'));
            }
        }else{
            //jika session belum terdaftar, maka redirect ke halaman login
            redirect(base_url('login'));
        }
    }
}