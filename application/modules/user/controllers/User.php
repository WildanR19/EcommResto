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
        $this->load->view("v_menu", $data);
    }

    function services(){
        $data["products"] = $this->m_user->getAll();
        $this->load->view("v_chart", $data);
    }

    function add_to_cart(){ //fungsi Add To Cart
        $data = array(
            'id' => $this->input->post('product_id'), 
            'name' => $this->input->post('name'), 
            'price' => $this->input->post('price'), 
            'qty' => $this->input->post('quantity'), 
        );
        $this->cart->insert($data);
        echo $this->show_cart(); //tampilkan cart setelah added
    }
 
    function show_cart(){ //Fungsi untuk menampilkan Cart
        $output = '';
        $no = 0;
        foreach ($this->cart->contents() as $items) {
            $no++;
            $output .='
                <tr>
                    <td>'.$items['name'].'</td>
                    <td>'.number_format($items['price']).'</td>
                    <td>'.$items['qty'].'</td>
                    <td>'.number_format($items['subtotal']).'</td>
                    <td><button type="button" id="'.$items['rowid'].'" class="hapus_cart btn btn-danger btn-xs">Batal</button></td>
                </tr>
            ';
        }
        $output .= '
            <tr>
                <th colspan="3">Total</th>
                <th colspan="2">'.'Rp '.number_format($this->cart->total()).'</th>
            </tr>
        ';
        return $output;
    }
 
    function load_cart(){ //load data cart
        echo $this->show_cart();
    }
 
    function hapus_cart(){ //fungsi untuk menghapus item cart
        $data = array(
            'rowid' => $this->input->post('row_id'), 
            'qty' => 0, 
        );
        $this->cart->update($data);
        echo $this->show_cart();
    }
 
    function menuByCategory(){
        $category=$this->input->post('category');
        $data = $this->m_user->getByCat($category);
        echo json_encode($data);
    }
}
?>