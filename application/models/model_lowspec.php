<?php

class Model_lowspec extends CI_model{

    public function tampil_data(){

        return $this->db->get('low_spec');
    }

    public function get_data($id_brg){

        $query = "SELECT * FROM low_spec WHERE id_barang = '".$id_brg."'";
        return $this->db->query($query)->row();
    }
}
?>