<?php

class Login extends CI_model{

    public function tampil_data(){

        return $this->db->get('user');
    }
    
}
?>