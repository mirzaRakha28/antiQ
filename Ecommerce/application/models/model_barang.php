<?php
    class Model_barang extends CI_Model{
        public function tampil_data(){
            return $this->db->get('tb_barang');
        }
        public function tambah_barang($data,$table){
            $this->db->insert($table,$data);
        }
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
        public function getData($id){
            $query = "SELECT * FROM tb_barang where id_barang = '".$id."'";
            return $this->db->query($query)->row();
        }


    }
?>