<?php

class Model_msi extends CI_model{

    public function tampil_data(){

        return $this->db->get('tabel_msi');
    }
}
?>