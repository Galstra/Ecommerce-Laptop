<?php

class Model_amd extends CI_model{

    public function tampil_data(){

        return $this->db->get('tabel_amd');
    }
    
    public function get_data($id_brg){

        $query = "SELECT * FROM tabel_amd WHERE id_barang = '".$id_brg."'";
        return $this->db->query($query)->row();
    }
}
?>