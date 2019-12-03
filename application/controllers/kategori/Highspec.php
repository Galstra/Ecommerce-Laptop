<?php 
    class Highspec extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['judul'] = 'High Specification';
        $list['barang']= $this->model_highspec->tampil_data()->result();

        $this->load->view('partial/navbar');
        $this->load->view('partial/topbar');
        $this->load->view('partial/header', $data);
        $this->load->view('kategori/highspec', $list);
        $this->load->view('partial/footer');
    }
    public function subDetail($id_brg){
        $data['judul'] = 'High Spec';
        $list['barang']= $this->model_highspec->get_data($id_brg);

        $this->load->view('partial/navbar');
        $this->load->view('partial/topbar');
        $this->load->view('partial/header', $data);
        $this->load->view('produk/shop_detail', $list);
        $this->load->view('partial/footer');
    }
}
?>