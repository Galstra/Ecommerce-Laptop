<?php 
    class Produk_amd extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){

        $data['judul'] = 'AMD';
        $list['barang']= $this->model_barang->get_processor('AMD');
        
        $this->load->view('partial/navbar');
        $this->load->view('partial/topbar');
        $this->load->view('partial/header',$data);
        $this->load->view('kategori/produk_amd', $list);
        $this->load->view('partial/footer');
    }
    public function subDetail($id_brg){

        $data['judul'] = 'Halaman AMD';
        $list['barang']= $this->model_barang->get_data($id_brg);

        $this->load->view('partial/navbar');
        $this->load->view('partial/topbar');
        $this->load->view('partial/header', $data);
        $this->load->view('produk/shop_detail', $list);
        $this->load->view('partial/footer');
        
        
    }
}
?>