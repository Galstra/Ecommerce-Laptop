<?php 
    class Customer_register extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){

        $data['judul'] = 'Register customer';
        $list['barang']= $this->model_barang->tampil_data()->result();

        $this->load->view('partial/navbar');
        $this->load->view('partial/topbar');
        $this->load->view('partial/header', $data);
        $this->load->view('deliver/customer_register', $list);
        $this->load->view('partial/footer');
        
        


    }
    public function register(){
        $data=[
            'username'=>$this->input->post('username'),
            'email'=>$this->input->post('email'),
            'password'=>$this->input->post('sandi')
            

        ];
        $this->load->model('register');
        $this ->register->regisdata($data);

    }
}



?>