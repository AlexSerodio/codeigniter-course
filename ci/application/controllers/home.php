<?php

    class Home extends CI_Controller {

        public function __construct() {
            parent::__construct();
            
            $this->load->model('project_model');
        }

        public function index() {

            if($this->session->userdata('logged')) {
                $user_id = $this->session->userdata('user_id');
            
                $data['projects'] = $this->project_model->get_all_projects($user_id);
            }

            $data['main_view'] = "home_view";
            $this->load->view("layouts/main", $data);
        }
        
    }

?>