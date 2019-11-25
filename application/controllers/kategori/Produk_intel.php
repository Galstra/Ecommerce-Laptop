<?php 
    class Produk_intel extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){

        $list['barang']= $this->model_intel->tampil_data()->result();
        $this->load->view('partial/navbar');
        $this->load->view('partial/topbar');
        $this->load->view('partial/header');
        $this->load->view('kategori/produk_intel', $list);
        $this->load->view('partial/footer');
    }
}
?>