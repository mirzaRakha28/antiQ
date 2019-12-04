<?php

    class Category extends CI_Controller{

        public function index (){
            $data['barang'] = $this->model_barang->tampil_data()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('fitur_categories/category',$data);
            $this->load->view('templates/footer');
        }
        public function keranjang ($id){
            $barang = $this->model_barang->find($id);
            $data = array(
                'id'      => $barang->id_barang,
                'qty'     => 1,
                'price'   => $barang->harga,
                'name'    => $barang->nama_barang
        );
        
        $this->cart->insert($data);
        redirect('fitur_categories/category');
        }

    }

?>