<?php

    class Person_1 extends CI_Controller{

        public function index (){
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('fitur_person/person_1');
            $this->load->view('templates/footer');
        }

    }

?>