<?php

class Model_intel extends CI_model{

    public function tampil_data(){

        return $this->db->get('tabel_intel');
    }
}
?>