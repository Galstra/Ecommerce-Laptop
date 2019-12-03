<?php

class Model_intel extends CI_model{

    public function tampil_data(){

        return $this->db->get('tabel_intel');
    }
    public function get_data($id_brg){

        $query = "SELECT * FROM tabel_intel WHERE id_barang = '".$id_brg."'";
        return $this->db->query($query)->row();
    }
}
?>