<?php 
    class Produk_hp extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['judul'] = 'HP';
        $list['barang']= $this->model_hp->tampil_datahp()->result();

        $this->load->view('partial/navbar');
        $this->load->view('partial/topbar');
        $this->load->view('partial/header',$data);
        $this->load->view('kategori/produkhp' , $list);
        $this->load->view('partial/footer');
    }
    public function subDetail($id_brg){
        $data['judul'] = 'Halaman HP';
        $list['barang']= $this->model_hp->get_data($id_brg);

        $this->load->view('partial/navbar');
        $this->load->view('partial/topbar');
        $this->load->view('partial/header', $data);
        $this->load->view('produk/shop_detail', $list);
        $this->load->view('partial/footer');
    }
}
?>