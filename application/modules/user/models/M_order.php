<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_order extends CI_Model{

    public function process(){
        //create new invoice

		$order = array(
            'order_id'      => uniqid(),
			'date'		    => date('Y-m-d H:i:s'),
            'status'	    => 'unpaid',
            'customer_name' => 'nana',
            'table_number'  => '2',
            'notes'         => 'gpl'
		);
		$this->db->insert('orders', $order);
		$order_id = $order['order_id'];
		
		// put ordered items in orders table
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
	
    public function all()
    {
        //Get all invoices from Invoices table
        $hasil = $this->db->get('invoices');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return false;
        }
    }

    public function get_invoice_by_id($order_id)
    {
        $hasil = $this->db->where('id',$order_id)->limit(1)->get('invoices');
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else {
            return false;
        }
    }

    public function get_orders_by_invoice($order_id)
    {
        $hasil = $this->db->where('invoice_id',$order_id)->get('orders');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return false;
        }
    }
}