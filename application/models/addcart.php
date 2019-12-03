<?php

class Addcart extends CI_model{

    public function tampil_data(){

        return $this->db->get('shopcart');
    }
    public function addproduk($data)
    {
        
        $this->db->insert('shopcart',$data);
        
    }
    public function hapus($data){

        $this->db->where('id_barang', $data);
        $this->db->delete('shopcart');
    }
}
?>