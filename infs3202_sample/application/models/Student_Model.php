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

}

?>