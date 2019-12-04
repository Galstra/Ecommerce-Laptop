<?php 
    class Medspec extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['judul'] = 'Medium Specification';
        $list['barang']= $this->model_barang->get_medspec(10000000,20000000);
        
        $this->load->view('partial/navbar');
        $this->load->view('partial/topbar');
        $this->load->view('partial/header',$data);
        $this->load->view('kategori/mediumspec', $list);
        $this->load->view('partial/footer');
    }

    public function subDetail($id_brg){

        $data['judul'] = 'Medium Specification';
        $list['barang']= $this->model_barang->get_data($id_brg);

        $this->load->view('partial/navbar');
        $this->load->view('partial/topbar');
        $this->load->view('partial/header', $data);
        $this->load->view('produk/shop_detail', $list);
        $this->load->view('partial/footer');
        
        
    }
}
?>