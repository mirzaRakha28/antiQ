<?php

    class Checkout extends CI_Controller{

        public function index (){
            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('fitur_checkout/Checkout.php');
            $this->load->view('templates/footer');
        }

    }

?>