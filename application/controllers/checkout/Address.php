<?php 
    class Address extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('model_address');
    }
    public function index(){

        $data['judul'] = 'Checkout Address';

        $this->load->view('partial/navbar');
        $this->load->view('partial/topbar');
        $this->load->view('partial/header', $data);
        $this->load->view('checkout/address');
        $this->load->view('partial/footer');
        
    }

    public function addAddress() {
        $namaDepan = $this->input->post('namaDepan');
        $namaBelakang = $this->input->post('namaBelakang');
        $alamat = $this->input->post('alamat');
        $kota = $this->input->post('kota');
        $provinsi = $this->input->post('provinsi');
        $negara = $this->input->post('negara');
        $telephone = $this->input->post('telephone');
        $email = $this->input->post('email');

        $dataAddress = array(
            'nama_depan' => $namaDepan,
            'nama_belakang' => $namaBelakang,
            'alamat' => $alamat,
            'kota' => $kota,
            'provinsi' => $provinsi,
            'negara' => $negara,
            'telephone' => $telephone,
            'email' => $email
        );

        $this->model_address->addAddress($dataAddress);

        $data['judul'] = 'Checkout Deliver';

        $this->load->view('partial/navbar');
        $this->load->view('partial/topbar');
        $this->load->view('partial/header', $data);
        $this->load->view('checkout/deliver');
        $this->load->view('partial/footer');
    }
}
?>