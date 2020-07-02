<?php defined('BASEPATH') OR exit('No direct script access allowed');   

class Order extends MX_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('username')){
			redirect(base_url('user/loginuser'));
        }
		$this->load->model('m_order');
	}
	
	public function index(){
		$is_processed = $this->m_order->process();
		if($is_processed){
			$this->send_email();
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

	public function send_email(){
		// Konfigurasi email
		$email = $this->session->userdata('email');
		$config = [
			'mailtype' => 'html',
			'charset' => 'utf-8',
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.gmail.com',
			'smtp_user' => '***@gmail.com', // Ganti dengan email gmail kamu
			'smtp_pass' => '***', // Password gmail kamu
			'smtp_port' => 465,
			'crlf' => "\r\n",
			'newline' => "\r\n"
		];
			// Load library email dan konfigurasinya
		$this->load->library('email', $config);
			// Email dan nama pengirim
		$this->email->from('no-reply@wildan.com', 'dinustek.com| wildan');
		// Email penerima
		$this->email->to($email); // Ganti dengan email tujuan kamu
		// Lampiran email, isi dengan url/path file
		$this->email->attach('File.png');
		// Subject email
		$this->email->subject('Nota Pemesanan');

		// Isi email
		foreach($this->cart->contents() as $item){
			$this->email->message("Nota Pemesanan Anda : <br>"
			.$item['name']." Jumlah : ". $item['qty']." Harga : ".$item['price']);
		}
		
		// Tampilkan pesan sukses atau error
		if ($this->email->send()) {
			echo 'Sukses! email berhasil dikirim.';
		} else {
			echo 'Error! email tidak dapat dikirim.';
		}
	}
}