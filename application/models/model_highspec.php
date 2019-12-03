<?php

class Model_highspec extends CI_model{

    public function tampil_data(){

        return $this->db->get('high_spec');
    }

    public function get_data($id_brg){

        $query = "SELECT * FROM high_spec WHERE id_barang = '".$id_brg."'";
        return $this->db->query($query)->row();
    }
}
?>