<?php 
    class Payment extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('model_payment');
    }
    public function index(){

        $data['judul'] = 'Checkout Payment';

        $this->load->view('partial/navbar');
        $this->load->view('partial/topbar');
        $this->load->view('partial/header', $data);
        $this->load->view('checkout/payment');
        $this->load->view('partial/footer');        
        
    }

    public function addPayment() {
        $payment = $this->input->post('payment');

        // var_dump($delivery); die();

        $isOvo = false; 
        $isGopay = false;
        $isTransfer  = false;

        switch ($payment) {
            case 'ovo':
               $isOvo = true;
                break;
            case 'gopay':
                $isGopay = true;
                 break;
            case 'transfer' :
                $isTransfer = true;
                 break;  
        }       

        $dataPayment = array(
            'ovo' => $isOvo,
            'go_pay' => $isGopay,
            'transfer' => $isTransfer
        );

        $this->model_payment->addPayment($dataPayment);

        $data['judul'] = 'Order Review';

        $this->load->view('partial/navbar');
        $this->load->view('partial/topbar');
        $this->load->view('partial/header', $data);
        $this->load->view('checkout/review');
        $this->load->view('partial/footer');
    }
}
?>