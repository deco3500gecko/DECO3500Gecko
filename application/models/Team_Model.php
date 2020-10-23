<?php

Class Team_Model extends CI_Model {

    public function get_teams($class) {
        $this->db->select('*');
        $this->db->from('team');
        $this->db->where('class', $class);
        $query = $this->db->get();
        return $query->result();
    }

    public function edit_team($data) {
        $this->db->where('team_id', $data['team_id']);
        $this->db->update('team', $data);
    }

    public function get_team_members($team, $class) {
        $this->db->select('*');
        $this->db->from('student');
        $this->db->where('team', $team);
        $this->db->where('class', $class);

        $query = $this->db->get();
        return $query->result();
    }

    public function add_team($data) {
        $this->db->insert('team', $data);
    }

    public function does_team_exist($team_id) {
        $this->db->select('*');
        $this->db->from('team');
        $this->db->where('team_id', $team_id);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function remove_team($team_id) {
        $this->db->where('team_id', $team_id);
        $this->db->delete('team');
    }
}