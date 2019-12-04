<?php
    class Search_model extends CI_Model{
        public function fetch_data($query){
            $this->db->select("*");
            $this->db->from("tb_barang");
            if ($query != ''){
                $this->db->like("gambar",$query);
                $this->db->or_like("nama_barang",$query);
                $this->db->or_like("keterangan",$query);
                $this->db->or_like("kategori",$query);
                $this->db->or_like("harga",$query);
                $this->db->or_like("stock",$query);
            }
            $this->db->order_by('id_barang', 'DESC');
            return $this->db->get();
        }
    }
?>
