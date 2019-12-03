<?php 
    class Produk_intel extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['judul'] = 'Intel';
        $list['barang']= $this->model_intel->tampil_data()->result();

        $this->load->view('partial/navbar');
        $this->load->view('partial/topbar');
        $this->load->view('partial/header',$data);
        $this->load->view('kategori/produk_intel', $list);
        $this->load->view('partial/footer');
    }
    public function subDetail($id_brg){
        $data['judul'] = 'Halaman Intel';
        $list['barang']= $this->model_intel->get_data($id_brg);

        $this->load->view('partial/navbar');
        $this->load->view('partial/topbar');
        $this->load->view('partial/header', $data);
        $this->load->view('produk/shop_detail', $list);
        $this->load->view('partial/footer');
    }
}
?>