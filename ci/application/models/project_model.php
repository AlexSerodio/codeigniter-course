<?php 
    class Project_model extends CI_Model {

        public function get_projects() {
            $query = $this->db->get('projects');
            return $query->result();
        }

        public function get_project($project_id) {
            $this->db->where('id', $project_id);
            $query = $this->db->get('projects'); 

            return $query->row();
        }

        public function get_all_projects($user_id) {
            $this->db->where('project_user_id', $user_id);
            $query = $this->db->get('projects'); 

            return $query->result();
        }

        public function create_project($data) {
            $query = $this->db->insert('projects', $data);

            return $query;
        }

        public function update_project($project_id, $data) {
            $this->db->where('id', $project_id);
            $this->db->update('projects', $data);

            return true;
        }

        public function delete_project($project_id) {
            $this->db->where('id', $project_id);
            $this->db->delete('projects');

            return true;
        }
    }
?>