<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_order extends CI_Model{

    public function process(){
        
		$user = $this->session->userdata('username');
		$meja = $this->session->userdata('nomeja');
		$order = array(
            'order_id'      => uniqid(),
			'date'		    => date('Y-m-d H:i:s'),
            'status'	    => 'unpaid',
            'customer_name' => $user,
            'table_number'  => $meja
		);
		$this->db->insert('orders', $order);
		$order_id = $order['order_id'];
		
		foreach($this->cart->contents() as $item){
			$data = array(
				'order_id'		    => $order_id,
				'product_id'		=> $item['id'],
				'product_name'		=> $item['name'],
				'qty'				=> $item['qty'],
				'price'				=> $item['price']
			);
			$this->db->insert('order_detail', $data);
		}
		
		return TRUE;
	}
	
}