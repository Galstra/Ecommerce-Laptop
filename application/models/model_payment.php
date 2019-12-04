<?php

class Model_payment extends CI_model{

    public function addPayment($data){

        $this->db->insert('checkout_payment', $data);
    }
}
?>