<?php 
    class Wishlist extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['judul'] = 'Wishlist';
        $this->load->model('addwish');
        $list['barang']= $this->addwish->tampil_data()->result();
        $this->load->view('partial/navbar');
        $this->load->view('partial/topbar');
        $this->load->view('partial/header',$data);
        $this->load->view('wishlist/wishlist',$list);
        $this->load->view('partial/footer');
    }
    public function addwish($add){

        if($this->session->isLogin){

            $this->load->model('model_barang');
            $list= $this->model_barang->get_data($add);
            $data = array(
                'gambar'=>$list->gambar,
                'merk_barang' => $list->merk_barang,
                'harga' => $list->harga,
                'nama_user'=> $this->session->nama
            );
        }
        else{
            echo "<script>alert('Anda harus login terlebihi dahulu')</script>";
            redirect(base_url('home'),'refresh');
        }

        $this->load->model('addwish');
        $this->addwish->addproduk($data);
        redirect('wishlist/index');

    }
    public function hapuscart($data){
        $this->load->model('addcart');
        $this->addwish->hapus($data);
        redirect('wishlist/index');

    }
}

?>