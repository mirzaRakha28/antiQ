<?php

    class Cart extends CI_Controller{
        public function index(){
          $this->load->model('model_cart');
          $data['barang'] = $this->model_cart->show_data()->result();
          $this->load->view('templates/header');
          $this->load->view('templates/navbar');
          $this->load->view('fitur_cart/cart',$data);
          $this->load->view('templates/footer');
        }
        public function add($produk){
            $this->load->model('model_barang');
            $list = $this->model_barang->getData($produk);
            $data = array(
                'gambar' => $list->gambar,
                'nama_barang' => $list->nama_barang,
                'harga'=>$list->harga
            );
          $this->load->model('model_cart');
          $this->model_cart->add_produk($data);
          redirect('fitur_categories/category');
        }
 		}
 		

?>