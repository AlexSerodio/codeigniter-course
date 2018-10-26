<?php

    class Users extends CI_Controller {

        function __construct() {
			parent::__construct();
            
            // loads the user_model from models folder
            // it uld be loaded automatically in config/autoload.php
            $this->load->model('user_model');
        }
        
        public function login() {
            
            $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
            $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[3]|matches[password]');

            if($this->form_validation->run() === FALSE) {
                $data = array(
                    'errors' => validation_errors()
                );
                $this->session->set_flashdata($data);

                redirect('home');
            }
        }
    }
?>