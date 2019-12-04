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
    public function get_data($id_brg){

        $query = "SELECT * FROM wishlist WHERE id_barang = '".$id_brg."'";
        return $this->db->query($query)->row();
    }
}
?>