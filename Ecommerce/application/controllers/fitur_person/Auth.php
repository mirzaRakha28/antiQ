<?php

    class Auth extends CI_Controller{

        public function login (){
            $this->form_validation->set_rules('usernama','Username','requaired');
            $this->form_validation->set_rules('password','Password','requaired');
            if($this->form_validation->run() == false){
                $this->load->view('templates/header');
                $this->load->view('templates/navbar_login');
                $this->load->view('fitur_person/person_0');
                $this->load->view('templates/footer');
            }
            else{
                $auth = $this->model_auth->cek_login();
                if(!$auth){
                    $this->session->set_flashdata('pesan',
                        '
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Password anda salah
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    '
                    );
                    redirect('auth/login');
                }else{
                    $this->session->set_userdata('username'.$auth->username);
                    $this->session->set_userdata('role_id'.$auth->username);
                    if($auth->role_id == 1){
                        redirect('fitur_admin/dasboard_admin');
                    }else{
                        redirect('dashboard');
                    }
                }
            }
        }

    }

?>