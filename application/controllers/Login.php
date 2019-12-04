<?php 
    class Login extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){

        $data['judul'] = 'Halaman Login';
        

        $this->load->view('partial/navbar');
        $this->load->view('partial/topbar');
        $this->load->view('partial/header', $data);
        $this->load->view('home/home');
        $this->load->view('partial/footer');
        
        
    }

    public function cek_login()
    {
        $email= $this->input->post("email");
        $password= $this->input->post("password");
        
        $this->db->where("email",$email);
        $this->db->where("password",$password);
        
        $list = $this->db->get("tabel_user")->row_array();
        if($list){
            $this->session->isLogin=TRUE;
            $this->session->nama=$list['nama'];
            redirect(base_url('home'),'refresh');

        }
        else{
            echo "<script>alert('email atau password anda salah')</script>";
            redirect(base_url('home'),'refresh');
        }

    }
    public function logout()
    {
        $this->session->isLogin=FALSE;
        $this->session->nama="";
        redirect(base_url('home'),'refresh');
    }
}
?>
    
