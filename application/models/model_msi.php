<?php

class Model_msi extends CI_model{

    public function tampil_data(){

        return $this->db->get('tabel_msi');
    }
    public function get_data($id_brg){

        $query = "SELECT * FROM tabel_msi WHERE id_barang = '".$id_brg."'";
        return $this->db->query($query)->row();
    }
}
?>