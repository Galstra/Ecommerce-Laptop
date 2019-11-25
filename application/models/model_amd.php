<?php

class Model_amd extends CI_model{

    public function tampil_data(){

        return $this->db->get('tabel_amd');
    }
}
?>