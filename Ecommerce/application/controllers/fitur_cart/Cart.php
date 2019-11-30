<?php

    class Cart extends CI_Controller{

        public function index (){
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('fitur_cart/cart');
            $this->load->view('templates/footer');
        }

    }

?>