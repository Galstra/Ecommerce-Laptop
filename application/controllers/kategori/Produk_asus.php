<?php 
    class Produk_asus extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['judul'] = 'Asus';
        $list['barang']= $this->model_barang->get_merk('ASUS');

        $this->load->view('partial/navbar');
        $this->load->view('partial/topbar');
        $this->load->view('partial/header',$data);
        $this->load->view('kategori/produkAsus', $list);
        $this->load->view('partial/footer');
    }

    public function subDetail($id_brg){

        $data['judul'] = 'ASUS ROG Strix Scar III';
        $list['barang']= $this->model_barang->get_data($id_brg);

        $this->load->view('partial/navbar');
        $this->load->view('partial/topbar');
        $this->load->view('partial/header', $data);
        $this->load->view('produk/shop_detail', $list);
        $this->load->view('partial/footer');
        
        
    }
}
?>