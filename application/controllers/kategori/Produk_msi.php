<?php 
    class Produk_msi extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){

        $list['barang']= $this->model_barang->get_merk('MSI');
        $data['judul'] = 'MSI';

        $this->load->view('partial/navbar');
        $this->load->view('partial/topbar');
        $this->load->view('partial/header',$data);
        $this->load->view('kategori/produk_msi', $list);
        $this->load->view('partial/footer');
    }
    public function subDetail($id_brg){



        $data['judul'] = 'Halaman MSI';

        $list['barang']= $this->model_barang->get_data($id_brg);

        $this->load->view('partial/navbar');
        $this->load->view('partial/topbar');
        $this->load->view('partial/header', $data);
        $this->load->view('produk/shop_detail', $list);
        $this->load->view('partial/footer');
        
        
    }
}
?>