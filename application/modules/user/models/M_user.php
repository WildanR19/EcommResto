<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model{
private $_table = "products";

    public $product_id;
    public $name;
    public $price;
    public $image;
    public $description;
    public $category;

    public function getAll(){
        return $this->db->get($this->_table)->result();
    }
    
    public function get_produk_list($limit, $start){
        $query = $this->db->get($this->_table, $limit, $start);
        return $query;
    }
    
    public function get_produk_pasta($limit, $start){
        $hasil=$this->db->query("SELECT * FROM $this->_table WHERE category='Pasta'",$limit, $start);
        return $hasil;
    }

    public function get_produk_pizza($limit, $start){
        $hasil=$this->db->query("SELECT * FROM $this->_table WHERE category='Pizza'",$limit, $start);
        return $hasil;
    }

    public function get_produk_drink($limit, $start){
        $hasil=$this->db->query("SELECT * FROM $this->_table WHERE category='Minuman'",$limit, $start);
        return $hasil;
    }

    public function get_produk_other($limit, $start){
        $hasil=$this->db->query("SELECT * FROM $this->_table WHERE category='Lainnya'",$limit, $start);
        return $hasil;
    }
}