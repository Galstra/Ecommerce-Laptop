<?php 
    class Medspec extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){

        $list['barang']= $this->model_medspec->tampil_data()->result();
        $this->load->view('partial/navbar');
        $this->load->view('partial/topbar');
        $this->load->view('partial/header');
        $this->load->view('kategori/mediumspec', $list);
        $this->load->view('partial/footer');
    }
}
?>