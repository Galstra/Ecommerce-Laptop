<?php

class Model_lowspec extends CI_model{

    public function tampil_data(){

        return $this->db->get('low_spec');
    }
}
?>