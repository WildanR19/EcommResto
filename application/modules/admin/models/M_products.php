<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_products extends CI_Model
{
    private $_table = "products";

    public $product_id;
    public $name;
    public $price;
    public $image = "default.jpg";
    public $description;
    public $category;

    public function rules()
    {
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'price',
            'label' => 'Price',
            'rules' => 'numeric'],
            
            ['field' => 'description',
            'label' => 'Description',
            'rules' => 'required'],

            ['field' => 'category',
            'label' => 'Category',
            'rules' => 'required']
        ];
    }

    /*public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }*/
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["product_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->product_id = uniqid();
        $this->name = $post["name"];
        $this->price = $post["price"];
        $this->image = $this->_uploadImage();
        $this->description = $post["description"];
        $this->category = $post["category"];

        helper_log("add", "Insert Product : ". $this->name);
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->product_id = $post["id"];
        $this->name = $post["name"];
        $this->price = $post["price"];
        if(!empty($_FILES["image"]["name"])){
            $this->image = $this->_uploadImage();
        }else{
            $this->image = $post["old_image"];
        }
        $this->description = $post["description"];
        $this->category = $post["category"];

        helper_log("update", "Update Product");

        return $this->db->update($this->_table, $this, array('product_id' => $post['id']));
    }

    public function delete($id)
    {
        helper_log("delete", "Delete Product".$this->name);
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("product_id" => $id));
    }

    private function _uploadImage(){
        $config['upload_path']          = './gambar/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->product_id;
        $config['overwrite']			= true;
        $config['max_size']             = 1024; // 1MB
        //$config['max_width']            = 1024;
        //$config['max_height']           = 768;
    
        $this->load->library('upload', $config);
    
        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }
        
        return "default.jpg";
    }

    private function _deleteImage($id){
        $product = $this->getById($id);
        if ($product->image != "default.jpg") {
            $filename = explode(".", $product->image)[0];
            return array_map('unlink', glob(FCPATH."gambar/$filename.*"));
        }
    }

    function getCategory(){
        return $this->db->get('category')->result();
    }

    function get_produk_list($limit, $start){
        $query = $this->db->get($this->_table, $limit, $start);
        return $query;
    }
    
    function getRows($params = array()){ 
        $this->db->select('*'); 
        $this->db->from($this->_table); 
         
        if(array_key_exists("where", $params)){ 
            foreach($params['where'] as $key => $val){ 
                $this->db->where($key, $val);
            } 
        } 
         
        if(array_key_exists("search", $params)){ 
            // Filter data by searched keywords 
            if(!empty($params['search']['keywords'])){ 
                $this->db->like('name', $params['search']['keywords']); 
            } 
        } 
         
        // Sort data by ascending or desceding order 
        if(!empty($params['search']['sortBy'])){ 
            $this->db->order_by('name', $params['search']['sortBy']); 
        }else{ 
            $this->db->order_by('product_id', 'asc'); 
        } 
         
        if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){ 
            $result = $this->db->count_all_results(); 
        }else{ 
            if(array_key_exists("product_id", $params) || (array_key_exists("returnType", $params) && $params['returnType'] == 'single')){ 
                if(!empty($params['product_id'])){ 
                    $this->db->where('product_id', $params['product_id']); 
                } 
                $query = $this->db->get(); 
                $result = $query->row_array(); 
            }else{ 
                $this->db->order_by('product_id', 'desc'); 
                if(array_key_exists("start",$params) && array_key_exists("limit",$params)){ 
                    $this->db->limit($params['limit'],$params['start']); 
                }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){ 
                    $this->db->limit($params['limit']); 
                } 
                 
                $query = $this->db->get(); 
                $result = ($query->num_rows() > 0)?$query->result_array():FALSE; 
            } 
        } 
         
        // Return fetched data 
        return $result; 
    } 
}