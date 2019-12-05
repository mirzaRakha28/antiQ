<?php
	class Model_cart extends CI_Model {
		public function add_produk($data){
			$this->db->insert('tb_cart',$data);
		}
		public function show_data(){
			return $this->db->get('tb_cart');
		}
    }
?>