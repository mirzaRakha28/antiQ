<?php

    class Whatsnew extends CI_Controller{

        public function index(){
            $data['barang'] = $this->model_barang->tampil_data()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('fitur_whatsnew/whatsnew',$data);
            $this->load->view('templates/footer');
        }


    }



?>