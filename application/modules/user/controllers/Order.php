<?php defined('BASEPATH') OR exit('No direct script access allowed');   

class Order extends MX_Controller {

	public function __construct(){
		parent::__construct();
		
		$this->load->model('m_order');
	}
	
	public function index(){
		$is_processed = $this->m_order->process();
		if($is_processed){
			$this->cart->destroy();
			redirect('user/order/success');
		} else {
			$this->session->set_flashdata('error','Failed to processed your order, please try again!');
			redirect('user/checkout');
		}
	}

	public function success(){
		$this->load->view('success');
    }
    
    public function clear_cart(){
		$this->cart->destroy();
		redirect(base_url('user/menu'));
	}
}