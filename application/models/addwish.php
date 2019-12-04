<?php

class Addwish extends CI_model{

    public function tampil_data(){
        $this->db->where('nama_user',$this->session->nama);
        return $this->db->get('wishlist');
    }
    public function addproduk($data)
    {
        
        $this->db->insert('wishlist',$data);

        
    }
    public function hapus($data){

        $this->db->where('id_barang', $data);
        $this->db->delete('wishlist');
    }
}
?>