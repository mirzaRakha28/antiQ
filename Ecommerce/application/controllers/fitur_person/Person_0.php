<?php

    class Person_0 extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->library('form_validation');
        }

        public function index (){
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'trim|required'); 
            if($this->form_validation->run() == false){
                $this->load->view('templates/header');
                $this->load->view('templates/navbar');
                $this->load->view('fitur_person/person_0');
                $this->load->view('templates/footer');
            }
            else {
                $this->login_users();
            }
        }



        public function registration()
        {

            $this->form_validation->set_rules('name', 'Name', 'required|trim');
            $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
                'is_unique' => 'This email has already registered!'
            ]);
            $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
            $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
                'matches' => 'Password dont match!',
                'min_length' => 'Password too short!'
            ]);
            $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
            if ($this->form_validation->run() == false) {
                $this->load->view('templates/header');
                $this->load->view('templates/navbar');
                $this->load->view('fitur_person/person_1');
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
                $this->db->insert('user', $data);
                redirect('fitur_person/person_0/index');
            }

        }

        private function login_users(){
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $user = $this->db->get_where('user', ['email' => $email])->row_array();

            if ($user) {
                if ($user['is_active'] == 0) {
                    if (password_verify($password, $user['password'])) {
                        $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                        ];
                        $_SESSION['email'] = $user['email'];
                        $_SESSION['image'] = $user['image'];
                        if ($user['role_id'] == 1) {
                            redirect('fitur_admin/dasboard_admin');
                        } else {
                            redirect('dashboard');
                        }
                    } else {
                        redirect('fitur_person/person_0');
                    }
                }
            } else {
                redirect('fitur_person/person_0');
            }
        }
    }

?>