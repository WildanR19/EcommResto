<?php   
defined('BASEPATH') OR exit('No direct script access allowed');   
 
class User extends MX_Controller {       
    function __construct(){           
        parent::__construct();
        $this->load->model('m_user');
    }
 
    public function index(){
        $this->load->view("v_home");
    }

    function menu(){
        $data["products"] = $this->m_user->getAll();
        $data["categories"] = $this->m_user->getByCat($category);
        $this->load->view("v_menu", $data);
    }
    
}
?>