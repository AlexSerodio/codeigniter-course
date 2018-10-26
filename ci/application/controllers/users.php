<?php

    class Users extends CI_Controller {

        public function show() {

            // loads the user_model from models folder
            // it uld be loaded automatically in config/autoload.php
            $this->load->model('user_model');

            // use the loaded model
            $result = $this->user_model->get_users();

            /* this array will be send to view and each index
             * will become a variable in view. Example: 
             * $data['welcome'] can be used as $welcome in view*/
            $data['results'] = $result;

            $this->load->view('user_view', $data);

        }
        
    }

?>