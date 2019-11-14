<?php

    class Whatnew extends CI_Controller{

        public function index (){
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('fitur_whatnew/whatnew');
            $this->load->view('templates/footer');
        }

    }

?>