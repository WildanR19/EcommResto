<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kasir extends MX_Controller{
    public function __construct(){
        parent::__construct();
        if(!$this->session->userdata('username')){
			redirect('login');
        } 
        $this->load->library('ajax_pagination'); 
        $this->load->model('m_kasir');

        $this->perPage = 10;
    }

    public function index(){
        $data = array(); 
        // Get record count 
        $conditions['returnType'] = 'count'; 
        $totalRec = $this->m_kasir->getRows($conditions); 
        
        // Pagination configuration 
        $config['target']      = '#dataList'; 
        $config['base_url']    = base_url('admin/kasir/ajaxPaginationData'); 
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage; 
        $config['link_func']   = 'searchFilter'; 
        
        // Initialize pagination library 
        $this->ajax_pagination->initialize($config); 
        
        // Get records 
        $conditions = array( 
            'limit' => $this->perPage 
        ); 
        $data['order'] = $this->m_kasir->getRows($conditions); 
            
		$this->load->view('kasir/pembayaran', $data);
	}

    public function detail($id){
        $data['order'] = $this->m_kasir->get_order_by_id($id);
        $data['detail']  = $this->m_kasir->get_detail_by_order($id);
		$this->load->view('kasir/detail_pembayaran', $data);
    }

    public function bayar($id=null){
        if (!isset($id)) redirect('admin/kasir');
       
        if ($this->m_kasir->bayarConfirm($id)) {
            redirect(base_url('admin/kasir'));
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
        $totalRec = $this->m_kasir->getRows($conditions); 
         
        // Pagination configuration 
        $config['target']      = '#dataList'; 
        $config['base_url']    = base_url('admin/kasir/ajaxPaginationData'); 
        $config['total_rows']  = $totalRec; 
        $config['per_page']    = $this->perPage; 
        $config['link_func']   = 'searchFilter'; 
         
        // Initialize pagination library 
        $this->ajax_pagination->initialize($config); 
         
        // Get records 
        $conditions['start'] = $offset; 
        $conditions['limit'] = $this->perPage; 
        unset($conditions['returnType']); 
        $data['order'] = $this->m_kasir->getRows($conditions); 
         
        // Load the data list view 
        $this->load->view('kasir/order-data', $data, false); 
    }
}