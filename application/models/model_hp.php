<?php

class Model_hp extends CI_model{

    public function tampil_datahp(){

        return $this->db->get('tabel_hp');
    }
}
?>