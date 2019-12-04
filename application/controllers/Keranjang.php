<?php 
    class Keranjang extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['judul'] = 'Shopcart';
        $this->load->model('addcart');
        $list['barang']= $this->addcart->tampil_data()->result();
        $this->load->view('partial/navbar');
        $this->load->view('partial/topbar');
        $this->load->view('partial/header',$data);
        $this->load->view('produk/keranjang',$list);
        $this->load->view('partial/footer');
    }
    public function addcart($add){

        if($this->session->isLogin){

            $this->load->model('model_barang');
            $list= $this->model_barang->get_data($add);
            $data = array(
                'gambar'=>$list->gambar,
                'merk_barang' => $list->merk_barang,
                'harga' => $list->harga,
                'nama_user'=> $this->session->nama,
            );
        }
        else{
            echo "<script>alert('Anda harus login terlebihi dahulu')</script>";
            redirect(base_url('home'),'refresh');
        }

        $this->load->model('addcart');
        $this->addcart->addproduk($data);
        redirect('keranjang/index');

    }
    public function hapuscart($data){
        $this->load->model('addcart');
        $this->addcart->hapus($data);
        redirect('keranjang/index');

    }
}
?>