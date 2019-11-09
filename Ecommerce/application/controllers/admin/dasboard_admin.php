<?php

    class Dasboard_admin extends CI_Controller{

        public function index (){
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('admin/dasboard');
            $this->load->view('templates/footer');
            


        }

    }

?>