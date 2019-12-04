<?php

class Addcart extends CI_model{

    public function tampil_data(){
        $this->db->where('nama_user',$this->session->nama);
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
    public function get_kupon($data){

        $this->db->where('no_kupon', $data);
        return$this->db->get('kupon')->row();
    }
    public function add_kupon($data)
    {
        $this->db->where('nama_user',$this->session->nama);
        $this->db->update('shopcart',$data);

        
    }

}
?>