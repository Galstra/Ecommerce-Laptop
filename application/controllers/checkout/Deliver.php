<?php 
    class Deliver extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('model_deliver');
    }
    public function index(){

        $data['judul'] = 'Checkout Deliver';

        $this->load->view('partial/navbar');
        $this->load->view('partial/topbar');
        $this->load->view('partial/header', $data);
        $this->load->view('checkout/deliver');
        $this->load->view('partial/footer');
        
    }

    public function addDeliver() {
        $delivery = $this->input->post('delivery');

        // var_dump($delivery); die();

        $isJne = false; 
        $isGrab = false;
        $isGo  = false;

        switch ($delivery) {
            case 'jne':
               $isJne = true;
                break;

            case 'grabExpress':
                $isGrab = true;
                 break;
            case 'goSend' :
                $isGo = true;
                 break;  
        }       

        $dataDeliver = array(
            'grab_express' => $isGrab,
            'go_send' => $isGo,
            'jne' => $isJne
        );

        $this->model_deliver->addDeliver($dataDeliver);

        $data['judul'] = 'Checkout Payment';

        $this->load->view('partial/navbar');
        $this->load->view('partial/topbar');
        $this->load->view('partial/header', $data);
        $this->load->view('checkout/payment');
        $this->load->view('partial/footer');
    }
}
?>