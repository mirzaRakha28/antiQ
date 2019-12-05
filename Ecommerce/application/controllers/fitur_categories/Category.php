<?php

    class Category extends CI_Controller{

        public function index (){
            $data['barang'] = $this->model_barang->tampil_data()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('fitur_categories/category',$data);
            $this->load->view('templates/footer');
        }
       
        public function home_utensils(){
            $data['home_utensils'] = $this->model_kategori->data_utensils()->result();
             $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('fitur_categories/home_utensils',$data);
            $this->load->view('templates/footer');
        }
        public function electronic(){
            $data['electronic'] = $this->model_kategori->data_electronic()->result();
             $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('fitur_categories/electronic',$data);
            $this->load->view('templates/footer');
        }
        public function vehicle(){
            $data['vehicle'] = $this->model_kategori->data_vehicle()->result();
             $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('fitur_categories/vehicle',$data);
            $this->load->view('templates/footer');
        }
        public function phone(){
            $data['phone'] = $this->model_kategori->data_phone()->result();
             $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('fitur_categories/phone',$data);
            $this->load->view('templates/footer');
        }
        public function book(){
            $data['book'] = $this->model_kategori->data_book()->result();
             $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('fitur_categories/book',$data);
            $this->load->view('templates/footer');
        }
        public function fashion(){
            $data['fashion'] = $this->model_kategori->data_fashion()->result();
             $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('fitur_categories/fashion',$data);
            $this->load->view('templates/footer');
        }   
    }

?>