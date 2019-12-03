<?php 
    class Produk_lenovo extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){

        $data['judul'] = 'Lenovo';
        $list['barang']= $this->model_barang->get_merk('Lenovo');

        $this->load->view('partial/navbar');
        $this->load->view('partial/topbar');
        $this->load->view('partial/header',$data);
        $this->load->view('kategori/produk_lenovo', $list);
        $this->load->view('partial/footer');
    }
    public function subDetail($id_brg){



        $data['judul'] = 'Halaman Lenovo';

        $list['barang']= $this->model_barang->get_data($id_brg);

        $this->load->view('partial/navbar');
        $this->load->view('partial/topbar');
        $this->load->view('partial/header', $data);
        $this->load->view('produk/shop_detail', $list);
        $this->load->view('partial/footer');
        
        
    }
}
?>