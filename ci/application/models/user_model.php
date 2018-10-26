<?php 
    class User_model extends CI_Model {

        public function get_users() {
            $query = $this->db->get('users');

            return $query->result();
        }

        /* it doesn't need to use it like this because
         * the database was configured in config/database.php
         * and autoloaded in config/autolad.php */
        // public function manual_connection() {
        //     $config['hostname'] = 'localhost';
        //     $config['username'] = 'root';
        //     $config['password'] = '';
        //     $config['database'] = 'errnd_db';

        //     $connection = $this->load->database($config);
        // }

    }
?>