<?php

    class Contact extends CI_Controller{

        public function index(){
            $data['message'] = $this->model_message->tambah_message()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('fitur_contact/contact',$data);
            $this->load->view('templates/footer');
        }


    
        public function tampil_message()
        {
            $nama       =$this->input->post('nama'); 
            $email      =$this->input->post('email');
            $message    =$this->input->post('message');
        
            $data = array(
                'nama'      =>  $nama,
                'email'     =>  $email,   
                'message'   =>  $message
            );
            $this->model_massage->tambah_message($data,'tb_contact_us');
            redirect('fitur_contact/contact/index');
        }


    }   
?>