<?php

    class Users extends CI_Controller {

        function __construct() {
			parent::__construct();
            
            // loads the user_model from models folder
            // it uld be loaded automatically in config/autoload.php
            $this->load->model('user_model');
        }
        
        public function register() {

            $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[3]', 
                array('required' => 'Informe seu nome.',
                        'min_length' => 'O nome deve possuir no mínimo 3 caracteres.'));
            $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|min_length[3]', 
                array('required' => 'Informe seu sobrenome.',
                        'min_length' => 'O sobrenome deve possuir no mínimo 3 caracteres.'));
            $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[3]', 
                array('required' => 'Informe seu email.',
                        'min_length' => 'O email deve possuir no mínimo 3 caracteres.'));
            $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]', 
                array('required' => 'Informe seu nome de usuário.',
                        'min_length' => 'O nome deve possuir no mínimo 3 caracteres.'));
            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]',
                array('required' => 'Informe sua senha.',
                    'min_length' => 'A senha deve possuir no mínimo 3 caracteres.'));

            if($this->form_validation->run() === FALSE) {
                $data['main_view'] = 'users/register_view';
                $this->load->view('layouts/main', $data);
            } else {
                $data['main_view'] = 'users/register_view';
                $this->load->view('layouts/main', $data);
            }
        }

        public function login() {
            
            $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]', 
                array('required' => 'Informe seu nome de usuário.',
                        'min_length' => 'O nome deve possuir no mínimo 3 caracteres.'));
            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]',
                array('required' => 'Informe sua senha.',
                    'min_length' => 'A senha deve possuir no mínimo 3 caracteres.'));
            $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[3]|matches[password]',
                array('required' => 'Informe sua senha.',
                    'min_length' => 'A senha deve possuir no mínimo 3 caracteres.',
                    'matches' => 'As senhas informadas não são iguais.'));

            if($this->form_validation->run() === FALSE) {
                $data = array(
                    'errors' => validation_errors()
                );
                $this->session->set_flashdata($data);

                redirect('home');
            } else {
                $username = $this->input->post('username');
                $password = $this->input->post('password');
            
                $user_id = $this->user_model->login_user($username, $password);
            
                if($user_id) {
                    $user_data = array(
                        'user_id' => $user_id,
                        'username' => $username,
                        'logged' => true
                    );

                    $this->session->set_userdata($user_data);
                    $this->session->set_flashdata('login_success', 'Você está conectado.');

                    $data['main_view'] = "admin_home_view";
                    $this->load->view("layouts/main", $data);

                    // redirect('home');


                } else {
                    $this->session->set_flashdata('login_fail', 'Você não está conectado.');

                    redirect('home');
                }
            }
        }

        public function logout() {
            $this->session->sess_destroy();
            redirect('home');
        }
    }
?>