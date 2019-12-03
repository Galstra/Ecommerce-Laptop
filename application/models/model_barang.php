<?php

class Model_barang extends CI_model{

    public function tampil_data(){

        return $this->db->get('tabel_barang');
    }

    public function get_data($id_brg){
        
        $query = "SELECT * FROM tabel_barang WHERE id_barang = '".$id_brg."'";
        return $this->db->query($query)->row();
    }
    public function get_cart($nama){

        $query = "SELECT * FROM tabel_barang WHERE merk_barang = '".$nama."'";
        return $this->db->query($query)->row();
    }
    public function get_merk($nama){

        $query = "SELECT * FROM tabel_barang WHERE actual_merk = '".$nama."'";
        return $this->db->query($query)->result();
    }
    public function get_processor($nama){

        $query = "SELECT * FROM tabel_barang WHERE processor= '".$nama."'";
        return $this->db->query($query)->result();
    }
    public function get_lowspec($harga){

        $query = "SELECT * FROM tabel_barang WHERE harga <= '".$harga."'";
        return $this->db->query($query)->result();

    }
    public function get_highspec($harga){

        $query = "SELECT * FROM tabel_barang WHERE harga >= '".$harga."'";
        return $this->db->query($query)->result();

    }
    public function get_medspec($harga,$harga1){

        $query = "SELECT * FROM tabel_barang WHERE harga >'".$harga."'and  harga <'".$harga1."'";
        return $this->db->query($query)->result();

    }


}
?>