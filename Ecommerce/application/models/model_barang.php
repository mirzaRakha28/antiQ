<?php

    class Model_barang extends CI_Model{

        public function tampil_data(){
            return $this->db->get('tb_barang');

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


    }



?>