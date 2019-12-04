<?php

class Model_deliver extends CI_model{

    public function addDeliver($data){

        $this->db->insert('checkout_deliver', $data);
    }
}
?>