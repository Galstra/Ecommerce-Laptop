<?php

class Model_address extends CI_model{

    public function addAddress($data){

        $this->db->insert('checkout_address', $data);
    }
}
?>