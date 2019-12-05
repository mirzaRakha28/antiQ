<?php 


class Model_kategori extends CI_Model{

    public function data_utensils(){
        return $this->db->get_where("tb_barang",array('kategori' => 'home utensils'));
    }
    public function data_fashion(){
        return $this->db->get_where("tb_barang",array('kategori' => 'fashion'));
    }
    public function data_vehicle(){
        return $this->db->get_where("tb_barang",array('kategori' => 'vehicle'));
    }
    public function data_electronic(){
        return $this->db->get_where("tb_barang",array('kategori' => 'electronic'));
    }
    public function data_phone(){
        return $this->db->get_where("tb_barang",array('kategori' => 'phone'));
    }
    public function data_book(){
        return $this->db->get_where("tb_barang",array('kategori' => 'book'));
    }
    
}

?>
