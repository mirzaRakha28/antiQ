<?php
    class Model_barang extends CI_Model{
        public function tampil_data(){
            return $this->db->get('tb_barang');
        }
<<<<<<< HEAD
        public function tambah_barang($data,$table){
            $this->db->insert($table,$data);
        }
=======
        public function find ($id){
            $result = $this->db->where('id_barang',$id)
                                ->limit(1)
                                ->get('tb_barang');
            if($result->num_rows() > 0){
                return $result->row();
            }else{
                return array();
            }
        }


>>>>>>> f0d21a0d9bf48dc83aef8866763fe9cf636d6a11
    }
?>