<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
 class M_kasir extends CI_Model {

    public function get_order_by_id($id){
        $hasil = $this->db->where('order_id',$id)->limit(1)->get('orders');
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else {
            return false;
        }
    }

    public function get_detail_by_order($id){
        $hasil = $this->db->where('order_id',$id)->get('order_detail');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return false;
        }
    }

    public function bayarConfirm($id){
        $data = array(
            'status' => 'Paid'
        );
    
        $this->db->where('order_id', $id);
        return $this->db->update('orders', $data);
    }

    function getRows($params = array()){ 
        $this->db->select('*'); 
        $this->db->from('orders'); 
         
        if(array_key_exists("where", $params)){ 
            foreach($params['where'] as $key => $val){ 
                $this->db->where($key, $val);
            } 
        } 
         
        if(array_key_exists("search", $params)){ 
            // Filter data by searched keywords 
            if(!empty($params['search']['keywords'])){ 
                $this->db->like('customer_name', $params['search']['keywords']); 
                $this->db->or_like('table_number', $params['search']['keywords']); 
                $this->db->or_like('order_id', $params['search']['keywords']); 
            } 
        } 
         
        // Sort data by ascending or desceding order 
        if(!empty($params['search']['sortBy'])){ 
            $this->db->order_by('customer_name', $params['search']['sortBy']); 
        }else{ 
            $this->db->order_by('order_id', 'asc'); 
        } 
         
        if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){ 
            $result = $this->db->count_all_results(); 
        }else{ 
            if(array_key_exists("order_id", $params) || (array_key_exists("returnType", $params) && $params['returnType'] == 'single')){ 
                if(!empty($params['order_id'])){ 
                    $this->db->where('order_id', $params['order_id']); 
                } 
                $query = $this->db->get(); 
                $result = $query->row_array(); 
            }else{ 
                $this->db->order_by('order_id', 'desc'); 
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