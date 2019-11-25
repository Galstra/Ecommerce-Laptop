<?php

class Model_lenovo extends CI_model{

    public function tampil_data(){

        return $this->db->get('tabel_lenovo');
    }
}
?>