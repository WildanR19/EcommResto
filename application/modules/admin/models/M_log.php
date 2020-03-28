<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class M_log extends CI_Model {
 
    private $_table = "activity_log";

    public $user_log;
    public $event_log;
    public $date_log;
    public $desc_log;

    public function save_log($param){
        $sql        = $this->db->insert_string('activity_log',$param);
        $ex         = $this->db->query($sql);
        return $this->db->affected_rows($sql);
    }

    public function get_log(){
        return $this->db->get($this->_table)->result();
    }
}