<?php

    class Model_message extends CI_Model{
        
        public function tampil_message($data,$table){
            return $this->db->get('tb_contact_us');;

        }

        public function tambah_message(){
            $this->db->insert('tb_contact_us');
        }
    }


?>