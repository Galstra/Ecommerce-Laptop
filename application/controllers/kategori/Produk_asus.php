<?php 
    class Produk_asus extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['judul'] = 'Asus';
        $list['barang']= $this->model_asus->tampil_dataasus()->result();

        $this->load->view('partial/navbar');
        $this->load->view('partial/topbar');
        $this->load->view('partial/header',$data);
        $this->load->view('kategori/produkAsus', $list);
        $this->load->view('partial/footer');
    }
}
?>