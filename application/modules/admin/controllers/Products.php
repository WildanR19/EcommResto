<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('username')){
			redirect('login');
		}
        $this->load->library('form_validation');
        $this->load->library('ajax_pagination'); 
        $this->load->model('m_products');
        $this->load->model('login/m_login');
         
        $this->perPage = 5;
    }

    public function index(){
        if($this->m_login->cek_session()){
            $data = array(); 
         
            // Get record count 
            $conditions['returnType'] = 'count'; 
            $totalRec = $this->m_products->getRows($conditions); 
            
            // Pagination configuration 
            $config['target']      = '#dataList'; 
            $config['base_url']    = base_url('admin/products/ajaxPaginationData'); 
            $config['total_rows']  = $totalRec;
            $config['per_page']    = $this->perPage; 
            $config['link_func']   = 'searchFilter'; 
            
            // Initialize pagination library 
            $this->ajax_pagination->initialize($config); 
            
            // Get records 
            $conditions = array( 
                'limit' => $this->perPage 
            ); 
            $data['products'] = $this->m_products->getRows($conditions); 
            
            // Load the list page view 
            $this->load->view('products/list', $data);
        }else{
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
            $this->load->view("products/new_form", $data);
        }else{
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
            
            $this->load->view("products/edit_form", $data);
        }else{
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
            redirect(base_url('login'));
        }
    }
    
    function ajaxPaginationData(){ 
        // Define offset 
        $page = $this->input->post('page');
        if(!$page){ 
            $offset = 0; 
        }else{ 
            $offset = $page; 
        } 
         
        // Set conditions for search and filter 
        $keywords = $this->input->post('keywords'); 
        $sortBy = $this->input->post('sortBy'); 
        if(!empty($keywords)){ 
            $conditions['search']['keywords'] = $keywords; 
        } 
        if(!empty($sortBy)){ 
            $conditions['search']['sortBy'] = $sortBy; 
        } 
         
        // Get record count 
        $conditions['returnType'] = 'count'; 
        $totalRec = $this->m_products->getRows($conditions); 
         
        // Pagination configuration 
        $config['target']      = '#dataList'; 
        $config['base_url']    = base_url('admin/products/ajaxPaginationData'); 
        $config['total_rows']  = $totalRec; 
        $config['per_page']    = $this->perPage; 
        $config['link_func']   = 'searchFilter'; 
         
        // Initialize pagination library 
        $this->ajax_pagination->initialize($config); 
         
        // Get records 
        $conditions['start'] = $offset; 
        $conditions['limit'] = $this->perPage; 
        unset($conditions['returnType']); 
        $data['products'] = $this->m_products->getRows($conditions); 
         
        // Load the data list view 
        $this->load->view('products/ajax-data', $data, false); 
    }
}