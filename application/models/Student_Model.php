<?php

Class Student_Model extends CI_Model {

    public function get_students($class) {
        $this->db->select('*');
        $this->db->from('student');
        $this->db->where('class', $class);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_classes() {
        $this->db->distinct();
        $this->db->select('class');
        $this->db->from('student');
        $query = $this->db->get();

        $array = array();
        foreach ($query->result_array() as $row) {
            $array[$row['class']] = $row['class'];
        }

        return $array;
    }

    public function edit_profile($data) {
        $this->db->where('student_id', $data['student_id']);
        $this->db->update('student', $data);
    }

    public function get_student($id) {
        $this->db->select('*');
        $this->db->from('student');
        $this->db->where('student_id', $id);
        return $this->db->get()->row();
    }

    public function add_student($data) {
        $this->db->insert('student', $data);
    }

    public function remove_student($id) {
        $this->db->where('student_id', $id);
        $this->db->delete('student');
    }

    public function get_student_names($class) {
        $this->db->select('name');
        $this->db->from('student');
        $this->db->where('class', $class);
        $query = $this->db->get();

        $array = array();
        foreach ($query->result_array() as $row) {
            $array[] = $row['name'];
        }

        return $array;
    }

    public function get_teams() {
        $this->db->distinct();
        $this->db->select('team');
        $this->db->from('student');
        $query = $this->db->get();

        $array = array();
        foreach ($query->result_array() as $row) {
            $array[] = $row['team'];
        }

        return $array;
    }
    

}

?>