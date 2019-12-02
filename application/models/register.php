<?php

class Register extends CI_model{

    public function tampil_data(){

        return $this->db->get('user');
    }
    public function regisdata($data)
    {
        $this->db->insert('user',$data);
        
    }
}
?>