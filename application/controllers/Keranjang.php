<?php 
    class Keranjang extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $this->load->model('addcart');
        $list['barang']= $this->addcart->tampil_data()->result();
        $this->load->view('partial/navbar');
        $this->load->view('partial/topbar');
        $this->load->view('partial/header');
        $this->load->view('produk/keranjang',$list);
        $this->load->view('partial/footer');
    }
    public function addcart($add){
        $this->load->model('model_barang');
        $list= $this->model_barang->get_data($add);
        $data = array(
            'merk_barang' => $list->merk_barang,
            'harga' => $list->harga,
    );
        $this->load->model('addcart');
        $this->addcart->addproduk($data);
        redirect('keranjang/index');

    }
}
?>