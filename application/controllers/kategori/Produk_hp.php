<?php 
    class Produk_hp extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){

        $list['barang']= $this->model_hp->tampil_datahp()->result();

        $this->load->view('partial/navbar');
        $this->load->view('partial/topbar');
        $this->load->view('partial/header');
        $this->load->view('kategori/produkhp' , $list);
        $this->load->view('partial/footer');
    }
}
?>