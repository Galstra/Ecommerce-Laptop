<?php 
    class Registrasi extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){

        $data['judul'] = 'Halaman Home';
        $list['barang']= $this->model_barang->tampil_data()->result();

        $this->load->view('partial/navbar');
        $this->load->view('partial/header', $data);
        $this->load->view('registrasi/register', $list);
        $this->load->view('partial/footer');
        
        
    }
}
?>