<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_products extends CI_Model
{
    private $_table = "tbl_produk";

    public $id_produk;
    public $nama;
    public $deskripsi;
    public $harga;
    public $gambar = "default.jpg";
    public $kategori;

    public function rules()
    {
        return [
            ['field' => 'nama_produk',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'harga',
            'label' => 'Harga',
            'rules' => 'numeric'],
            
            ['field' => 'deskripsi',
            'label' => 'Deskripsi',
            'rules' => 'required'],

            ['field' => 'kategori',
            'label' => 'Kategori',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_produk" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_produk = uniqid();
        $this->nama = $post["nama"];
        $this->harga = $post["harga"];
        $this->deskripsi = $post["deskripsi"];
        $this->kategori = $post["kategori"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_produk = $post["id"];
        $this->nama = $post["name"];
        $this->harga = $post["harga"];
        $this->deskripsi = $post["deskripsi"];
        $this->kategori = $post["kategori"];
        return $this->db->update($this->_table, $this, array('id_produk' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_produk" => $id));
    }
}