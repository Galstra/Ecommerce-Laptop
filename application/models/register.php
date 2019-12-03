<?php

class Register extends CI_model{

    public function tampil_data(){

        return $this->db->get('tabel_user');
    }
    public function regisdata($data)
    {
        $this->db->insert('tabel_user',$data);
        
    }
}
?>