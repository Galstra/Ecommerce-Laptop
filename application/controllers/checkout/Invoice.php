<?php 
    class Invoice extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){

        $data['judul'] = 'Invoice'; 
        $this->load->model('addcart');
        $list['barang']= $this->addcart->tampil_data()->result();

        $this->load->view('partial/navbar');
        $this->load->view('partial/topbar');
        $this->load->view('partial/header', $data);
        $this->load->view('checkout/invoice',$list);
        $this->load->view('partial/footer');
        
    }
    }
    ?>