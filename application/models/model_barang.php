<?php

class Model_barang extends CI_model{

    public function tampil_data(){

        return $this->db->get('tabel_barang');
    }

    public function get_data($id_brg){
        
        $query = "SELECT * FROM tabel_barang WHERE id_barang = '".$id_brg."'";
        return $this->db->query($query)->row();
    }
}
?>