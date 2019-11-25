<?php 
    class Produk_lenovo extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){

        $list['barang']= $this->model_lenovo->tampil_data()->result();
        $this->load->view('partial/navbar');
        $this->load->view('partial/topbar');
        $this->load->view('partial/header');
        $this->load->view('kategori/produk_lenovo', $list);
        $this->load->view('partial/footer');
    }
}
?>