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

    public function update_team_points($team_id, $team_name, $class) {
        $members = $this->get_team_members($team_name, $class);

        $points = 0;

        foreach ($members as $member) {
            $points += $member->points;
        }

        $wins = $this->get_team_wins($team_id);
        if ($points >= 100) {
            $wins += 1;
            $points = 0;

            foreach ($members as $member) {
                $new_student_data = array (
                    'student_id' => $member->student_id,
                    'points' => 0,
                );

                $this->Student_Model->edit_profile($new_student_data);
            }
        }

        $data = array (
            'points' => $points,
        );

        $this->db->where('team_id', $team_id);
        $this->db->update('team', $data);
    }

    public function get_ordered_teams($class) {
        $this->db->select('*');
        $this->db->from('team');
        $this->db->where('class', $class);
        $this->db->order_by('wins', 'desc');
        $this->db->order_by('points', 'desc');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_team_points ($team_id) {
        $this->db->select('points');
        $this->db->from('team');
        $this->db->where('team_id', $team_id);
        return $this->db->get()->row('points');
    }

    public function get_team_wins ($team_id) {
        $this->db->select('wins');
        $this->db->from('team');
        $this->db->where('team_id', $team_id);
        return $this->db->get()->row('wins');
    }
}