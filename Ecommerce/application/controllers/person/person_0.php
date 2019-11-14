<?php

    class Person_0 extends CI_Controller {
        public function index(){
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('person/person_0');
            $this->load->view('templates/footer');
        }

        

    }

?>