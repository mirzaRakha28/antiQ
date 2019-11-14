<?php

    class Contact extends CI_Controller{

        public function index (){
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('fitur_contact/contact');
            $this->load->view('templates/footer');
        }

    }

?>