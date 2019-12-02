<?php 
    class Deliver extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){

        $data['judul'] = 'Checkout Deliver';

        $this->load->view('partial/navbar');
        $this->load->view('partial/topbar');
        $this->load->view('partial/header');
        $this->load->view('checkout/deliver');
        $this->load->view('partial/footer');
        
        
    }
}
?>