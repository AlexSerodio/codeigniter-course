<?php

    class Projects extends CI_Controller {

        public function __construct() {
            parent::__construct();
            
            $this->load->model('project_model');

            if(!$this->session->userdata('logged')) {
                $this->session->set_flashdata('no_access', "Acesso negado. Logue-se para poder acessar essa página.");
                redirect('home/index');
            }
        }

        public function index() {
            $data['projects'] = $this->project_model->get_projects();
            $data['main_view'] = "projects/index";
            $this->load->view("layouts/main", $data);
        }
        
        public function display($project_id) {
            $data['project_data'] = $this->project_model->get_project($project_id);

            $data['main_view'] = "projects/display";
            $this->load->view("layouts/main", $data);
        }

    }

?>