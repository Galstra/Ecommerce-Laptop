<?php 
    class Produk_amd extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){

        $data['judul'] = 'AMD';
        $list['barang']= $this->model_amd->tampil_data()->result();
        
        $this->load->view('partial/navbar');
        $this->load->view('partial/topbar');
        $this->load->view('partial/header',$data);
        $this->load->view('kategori/produk_amd', $list);
        $this->load->view('partial/footer');
    }
}
?>