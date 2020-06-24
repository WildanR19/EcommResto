<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_products');
        $this->load->model('login/m_login');
    }

    public function index($num = '')
    {
        if($this->m_login->cek_session()){
            //konfigurasi pagination
            $config['base_url'] = site_url('admin/products/index');
            $config['total_rows'] = $this->db->count_all('products'); //total row
            $config['per_page'] = 5;  //show record per halaman
            $config["uri_segment"] = 4;  // uri parameter
            $choice = $config["total_rows"] / $config["per_page"];
            $config["num_links"] = floor($choice);
    
            //Style pagination
            $config['first_link']       = 'First';
            $config['last_link']        = 'Last';
            $config['next_link']        = 'Next';
            $config['prev_link']        = 'Prev';
            $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
            $config['full_tag_close']   = '</ul></nav></div>';
            $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
            $config['num_tag_close']    = '</span></li>';
            $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
            $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
            $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
            $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['prev_tagl_close']  = '</span>Next</li>';
            $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
            $config['first_tagl_close'] = '</span></li>';
            $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['last_tagl_close']  = '</span></li>';
    
            $this->pagination->initialize($config);
            $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
            
            $data['data'] = $this->m_products->get_produk_list($config["per_page"], $data['page']);
    
            $data['pagination'] = $this->pagination->create_links();

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
    
    public function search(){
        $keyword = $this->input->post('keyword');
        $product = $this->m_products->search($keyword);
        
        // Kita load file view.php sambil mengirim data siswa hasil query function search di SiswaModel
        $hasil = $this->load->view('view', array('products'=>$product), true);
        
        // Buat sebuah array
        $callback = array(
          'hasil' => $hasil, // Set array hasil dengan isi dari view.php yang diload tadi
        );
        echo json_encode($callback); // konversi varibael $callback menjadi JSON
      }
}