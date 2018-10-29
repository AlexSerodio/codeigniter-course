<?php

    class Users extends CI_Controller {

        function __construct() {
			parent::__construct();
            
            // loads the user_model from models folder
            // it uld be loaded automatically in config/autoload.php
            $this->load->model('user_model');
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

                    $this->session->set_userdata('login', $user_data);
                    $this->session->set_flashdata('login_success', 'Você está conectado.');

                    redirect('home');
                } else {
                    $this->session->set_flashdata('login_fail', 'Você não está conectado.');

                    redirect('home');
                }
            }
        }
    }
?>