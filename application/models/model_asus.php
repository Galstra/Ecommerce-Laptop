<?php

class Model_asus extends CI_model{

    public function tampil_dataAsus(){

        return $this->db->get('tabel_asus');
    }
}
?>