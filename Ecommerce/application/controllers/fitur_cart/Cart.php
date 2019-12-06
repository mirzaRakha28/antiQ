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
        public function keranjang(){
          if($this->session->isLogin == true){
          $this->load->view('templates/header');
          $this->load->view('templates/navbar');
          $this->load->view('fitur_cart/cart');
          $this->load->view('templates/footer');
          }else{
            redirect('fitur_person/person_0');
          }
        }
        public function add_keranjang ($id){
          if($this->session->isLogin == true){
            $barang = $this->model_barang->find($id);
            $data = array(
                'id'      => $barang->id_barang,
                'qty'     => 1,
                'price'   => $barang->harga,
                'name'    => $barang->nama_barang,
                'gambar' => $barang->gambar
            );
            
            $this->cart->insert($data);
            redirect('fitur_categories/category');
          }else{
            redirect('fitur_person/person_0');
          }
        }
        public function add1_keranjang ($id){
          $barang = $this->model_barang->find($id);
          $data = array(
              'id'      => $barang->id_barang,
              'qty'     => 1,
              'price'   => $barang->harga,
              'name'    => $barang->nama_barang,
              'gambar' => $barang->gambar
          );
          
          $this->cart->insert($data);
          redirect('fitur_whatsnew/whatsnew');
        }
        public function hapus_data(){
          $this->cart->destroy();
          redirect('fitur_cart/cart/keranjang');
        }
      
  }	
?>