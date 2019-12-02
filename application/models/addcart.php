<?php

class Addcart extends CI_model{

    public function tampil_data(){

        return $this->db->get('shopcart');
    }
    public function addproduk($data)
    {
        
        $this->db->insert('shopcart',$data);
        
    }
}
?>