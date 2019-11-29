<?php 
    class Hpce2013tx extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){

        $data['judul'] = 'HP 14-CE2013TX';

        $this->load->view('partial/navbar');
        $this->load->view('partial/topbar');
        $this->load->view('partial/header', $data);
        $this->load->view('produk/shop_detail_ce2013tx');
        $this->load->view('partial/footer');
        
        
    }
}
?>