<?php 
    class Payment extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){

        $data['judul'] = 'Checkout Payment';

        $this->load->view('partial/navbar');
        $this->load->view('partial/topbar');
        $this->load->view('partial/header', $data);
        $this->load->view('checkout/payment');
        $this->load->view('partial/footer');
        
        
    }
}
?>