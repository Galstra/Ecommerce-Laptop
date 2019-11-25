<?php

class Model_highspec extends CI_model{

    public function tampil_data(){

        return $this->db->get('high_spec');
    }
}
?>