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

        public function create() {
            $this->form_validation->set_rules('project_name', 'Project Name', 'trim|required|min_length[3]', 
                array('required' => 'Informe um nome para o projeto.',
                        'min_length' => 'O nome deve possuir no mínimo 3 caracteres.'));
            $this->form_validation->set_rules('project_body', 'Project Body', 'trim|required|min_length[3]',
                array('required' => 'Informe uma descrição para o projeto.',
                    'min_length' => 'A descrição deve possuir no mínimo 3 caracteres.'));
        
            if($this->form_validation->run() === FALSE) {
                $data['main_view'] = 'projects/create_project_view';
                $this->load->view('layouts/main', $data);
            } else {
                $data = array(
                    'project_user_id' => $this->session->userdata('user_id'),
                    'project_name' => $this->inpt->post('project_name'),
                    'project_body' => $this->inpt->post('project_body')
                );

                if($this->project_model->create_project($data)) {
                    $this->session->set_flashdata('project_created', 'O projeto foi criado com sucesso.');
                    redirect('projects/index');
                } else {
                    
                }
            } 
        }

    }

?>