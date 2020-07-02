<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_loginuser extends CI_Model{
    function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
    }	

    public function get($username){
        $this->db->where('username', $username); // Untuk menambahkan Where Clause : username='$username'
        $result = $this->db->get('users')->row(); // Untuk mengeksekusi dan mengambil data hasil query
        return $result;
    }
}
