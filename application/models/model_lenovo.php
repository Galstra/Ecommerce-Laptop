<?php

class Model_lenovo extends CI_model{

    public function tampil_datalenovo(){

        return $this->db->get('tabel_lenovo');
    }
    public function get_data($id_brg){

        $query = "SELECT * FROM tabel_lenovo WHERE id_barang = '".$id_brg."'";
        return $this->db->query($query)->row();
    }
}
?>