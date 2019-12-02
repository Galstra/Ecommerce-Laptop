<?php

class Model_medspec extends CI_model{

    public function tampil_data(){

        return $this->db->get('med_spec');
    }

    public function get_data($id_brg){

        $query = "SELECT * FROM med_spec WHERE id_barang = '".$id_brg."'";
        return $this->db->query($query)->row();
    }
}
?>