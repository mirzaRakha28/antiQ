<?php

    class Profil extends CI_Controller{
        public function index(){
            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('fitur_profil/profil');
            $this->load->view('templates/footer');
        }
    }

?>