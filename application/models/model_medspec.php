<?php

class Model_medspec extends CI_model{

    public function tampil_data(){

        return $this->db->get('med_spec');
    }
}
?>