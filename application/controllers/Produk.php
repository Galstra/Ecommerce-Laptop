<?php 
    class Produk extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){

        $list['barang']= $this->model_barang->tampil_data()->result();
        $this->load->view('partial/navbar');
        $this->load->view('partial/topbar');
        $this->load->view('partial/header');
        $this->load->view('produk/index',$list);
        $this->load->view('partial/footer');
    }
}
?>