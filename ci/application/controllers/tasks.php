<?php

    class Tasks extends CI_Controller {
    
        public function __construct() {
            parent::__construct();
            
            $this->load->model('task_model');
        }

        public function display($task_id) {
            $data['task'] = $this->task_model->get_task($task_id);

            $data['main_view'] = 'tasks/display';
            $this->load->view("layouts/main", $data);
        }

        public function create($project_id) {
            $this->form_validation->set_rules('task_name', 'Task Name', 'trim|required|min_length[3]', 
                array('required' => 'Informe um nome para a tarefa.',
                        'min_length' => 'O nome deve possuir no mínimo 3 caracteres.'));
            $this->form_validation->set_rules('task_body', 'Task Body', 'trim|required|min_length[3]',
                array('required' => 'Informe uma descrição para a tarefa.',
                    'min_length' => 'A descrição deve possuir no mínimo 3 caracteres.'));
        
            if($this->form_validation->run() === FALSE) {
                $data['project_id'] = $project_id;
                $data['main_view'] = 'tasks/create_task_view';
                $this->load->view('layouts/main', $data);
            } else {
                $data = array(
                    'project_id' => $project_id,
                    'task_name' => $this->input->post('task_name'),
                    'task_body' => $this->input->post('task_body'),
                    'due_date' => $this->input->post('due_date')
                );

                if($this->task_model->create_task($data)) {
                    $this->session->set_flashdata('task_created', 'A tarefa foi criada com sucesso.');
                } else {
                    $this->session->set_flashdata('task_created', 'A criação da tarefa não foi finalizada. Tente novamente.');
                }
                redirect('projects/display/' . $project_id);
            }
        }

        public function edit($task_id) {
            $this->form_validation->set_rules('task_name', 'Task Name', 'trim|required|min_length[3]', 
                array('required' => 'Informe um nome para a tarefa.',
                        'min_length' => 'O nome deve possuir no mínimo 3 caracteres.'));
            $this->form_validation->set_rules('task_body', 'Task Body', 'trim|required|min_length[3]',
                array('required' => 'Informe uma descrição para a tarefa.',
                    'min_length' => 'A descrição deve possuir no mínimo 3 caracteres.'));
        
            if($this->form_validation->run() === FALSE) {
                
                $data['project_id'] = $this->task_model->get_task_project_id($task_id);
                $data['project_name'] = $this->task_model->get_project_name($data['project_id']);
                $data['task'] = $this->task_model->get_task_project_data($task_id);

                $data['main_view'] = 'tasks/edit_task_view';
                $this->load->view('layouts/main', $data);
            } else {

                $project_id = $this->task_model->get_task_project_id($task_id);

                $data = array(
                    'project_id' => $project_id,
                    'task_name' => $this->input->post('task_name'),
                    'task_body' => $this->input->post('task_body'),
                    'due_date' => $this->input->post('due_date')
                );

                if($this->task_model->update_task($task_id, $data)) {
                    $this->session->set_flashdata('task_updated', 'A tarefa foi alterada com sucesso.');
                } else {
                    $this->session->set_flashdata('task_updated', 'A alteração da tarefa não foi finalizada. Tente novamente.');
                }
                redirect('projects/display/' . $project_id);
            }
        }

        public function delete($task_id, $project_id) {
            $this->task_model->delete_task($task_id);

            $this->session->set_flashdata('task_deleted', 'A tarefa foi deletada com sucesso.');
            redirect('projects/display/' . $project_id);
        }

    }

?>