<?php

    class Person_0 extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->library('form_validation');
        }

        public function index (){
            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('fitur_person/person_0');
            $this->load->view('templates/footer');
        }

        public function registration()
        {

            $this->form_validation->set_rules('name', 'Name', 'required|trim');
            $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
                'is_unique' => 'This email has already registered!'
            ]);
            $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
                'matches' => 'Password dont match!',
                'min_length' => 'Password too short!'
            ]);
            $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
            if ($this->form_validation->run() == false) {
                $data['title'] = 'WPU User Registration';
                $this->load->view('templates/header');
                $this->load->view('templates/navbar');
                $this->load->view('fitur_person/person_1',$data);
                $this->load->view('templates/footer');
            } else {
                $email = $this->input->post('email', true);
                $alamat = $this->input->post('alamat', true);
                $data = [
                    'name' => htmlspecialchars($this->input->post('name', true)),
                    'email' => htmlspecialchars($email),
                    'image' => 'default.jpg',
                    'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                    'alamat' => htmlspecialchars($alamat),
                    'role_id' => 2,
                    'is_active' => 0,
                    'date_created' => time()
                ];
                // siapkan token
                $token = base64_encode(random_bytes(32));
                $user_token = [
                    'email' => $email,
                    'token' => $token,
                    'date_created' => time()
                ];
                $this->db->insert('db_user', $data);
                $this->db->insert('user_token', $user_token);
                $this->_sendEmail($token, 'verify');
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created. Please activate your account</div>');
                redirect('fitur_person/person_0');
            }

        }

    }

?>