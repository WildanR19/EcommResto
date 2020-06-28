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
        //konfigurasi pagination all
        $config['base_url'] = site_url('user/menu/index'); //site url
        $config['total_rows'] = $this->db->count_all('products'); //total row
        $config['per_page'] = 6;  //show record per halaman
        $config["uri_segment"] = 4;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        //Style pagination
        $config['first_link']       = '';
        $config['last_link']        = '';
        $config['next_link']        = '&gt;';
        $config['prev_link']        = '&lt;';
        $config['full_tag_open']    = '<div class="block-27"><ul>';
        $config['full_tag_close']   = '</ul></div>';
        $config['num_tag_open']     = '<li><span>';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="active"><span>';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li><span>';
        $config['next_tag_close']  = '</span></li>';
        $config['prev_tag_open']    = '<li><span>';
        $config['prev_tag_close']  = '</span></li>';
        $config['first_tag_open']   = '';
        $config['first_tag_close'] = '';
        $config['last_tag_open']    = '';
        $config['last_tag_close']  = '';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        
        $data['products'] = $this->m_user->get_produk_list($config["per_page"], $data['page']);
        $data['pasta'] = $this->m_user->get_produk_pasta($config["per_page"], $data['page']);
        $data['pizza'] = $this->m_user->get_produk_pizza($config["per_page"], $data['page']);
        $data['drink'] = $this->m_user->get_produk_drink($config["per_page"], $data['page']);
        $data['other'] = $this->m_user->get_produk_other($config["per_page"], $data['page']);

        $data['pagination'] = $this->pagination->create_links();
        
        $this->load->view('v_menu', $data);
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