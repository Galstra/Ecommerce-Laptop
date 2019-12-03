<?php

class Model_hp extends CI_model{

    public function tampil_datahp(){

        return $this->db->get('tabel_hp');
    }
    public function get_data($id_brg){

        $query = "SELECT * FROM tabel_hp WHERE id_barang = '".$id_brg."'";
        return $this->db->query($query)->row();
    }


}
?>