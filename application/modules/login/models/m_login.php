<?php 

class M_login extends CI_Model{	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
    }	
    
    public function register($enc_password){
        // User data array
        $data = array(
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => $enc_password,
        );
     
        // Insert user
        return $this->db->insert('users', $data);
    }

    public function cek_session(){
        return $this->session->userdata('username');
    }

    public function get($username){
        $this->db->where('username', $username); // Untuk menambahkan Where Clause : username='$username'
        $result = $this->db->get('users')->row(); // Untuk mengeksekusi dan mengambil data hasil query
        return $result;
    }
       
}