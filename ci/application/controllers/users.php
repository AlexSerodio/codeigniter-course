<?php

    class Users extends CI_Controller {

        function __construct() {
			parent::__construct();
            
            // loads the user_model from models folder
            // it uld be loaded automatically in config/autoload.php
            $this->load->model('user_model');
        }
        
        public function login() {
            
            echo $this->input->post('username');

        }

        /*
        public function show($user_id) {

            // use the loaded model
            $result = $this->user_model->get_users($user_id, 'alex');

            // this array will be send to view and each index
            // will become a variable in view. Example: 
            // $data['welcome'] can be used as $welcome in view
            $data['results'] = $result;
            $this->load->view('user_view', $data);

        }

        public function insert() {
            $username = "peter";
            $password = "secret";

            $this->user_model->create_users([
                'user' => $username,
                'password' => $password
            ]);
        } 

        public function update() {
            $id = 3;

            $username = "willian";
            $password = "not so seccret";

            $this->user_model->update_users([
                'user' => $username,
                'password' => $password
            ], $id);
        } 

        public function delete() {
            $id = 3;
            $this->user_model->delete_users($id);
        } 
        */
    }

?>