<?php

    class Dasboard_admin extends CI_Controller{

        public function index (){
            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('fitur_admin/dasboard');
            $this->load->view('templates/footer');
        }

    }

?>