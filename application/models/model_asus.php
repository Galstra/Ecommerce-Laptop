<?php

class Model_asus extends CI_model{

    public function tampil_dataAsus(){

        return $this->db->get('tabel_asus');
    }

    public function get_data($id_brg){

        $query = "SELECT * FROM tabel_asus WHERE id_barang = '".$id_brg."'";
        return $this->db->query($query)->row();
    }

    /*public function get_data($merk_brg){

        $query = "SELECT * FROM tabel_asus WHERE merk_barang = '".$merk_brg."'";
        return $this->db->query($query)->row();
    }*/
}
?>