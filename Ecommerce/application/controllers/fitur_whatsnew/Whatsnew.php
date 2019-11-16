<?php

    class Whatsnew extends CI_Controller{

        public function index(){
            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('fitur_whatsnew/whatsnew');
            $this->load->view('templates/footer');
        }


    }



?>