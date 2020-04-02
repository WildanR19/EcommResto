<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model{
private $_table = "products";

    public $product_id;
    public $name;
    public $price;
    public $image;
    public $description;
    public $category;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getByCat($category){
        return $this->db->get_where($this->_table, "FIND_IN_SET( '$category' , categories) ")->result();
    }
}