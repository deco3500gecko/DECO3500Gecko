<?php

Class Attendance_Model extends CI_Model {

    public function get_students ($class) {
        $this->db->select('*');
        $this->db->from('student');

        $query = $this->db->get();
        return $query->result();
    }

    public function insert_attendance_data ($student_id, $date) {
        $this->db->select('*');
        $this->db->from('attendance');
        $this->db->where('student_id', $student_id);
        $this->db->where('date', $date);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return false;
        } else {
            $attendance_id = 'attendance' . rand();
            while ($this->does_attendance_id_exist($attendance_id)) {
                $attendance_id = 'attendance' . rand();
            }

            $data = array (
                'attendance_id' => $attendance_id,
                'student_id' => $student_id,
                'student_name' => $this->get_name($student_id),
                'class' => $this->get_class($student_id),
                'date' => $date,
            );
    
            $this->db->insert('attendance', $data);

            $num_of_days_attended = $this->update_days_attended($student_id);

            $new_points = $this->update_student_points($student_id);

            $update_data = array (
                'days_attended' => $num_of_days_attended,
                'points' => $new_points,
            );
            $this->db->where('student_id', $student_id);
            $this->db->update('student', $update_data);
        }
    }

    public function update_student_points($student_id) {
        $this->db->select('points');
        $this->db->from('student');
        $this->db->where('student_id', $student_id);
        $points = $this->db->get()->row('points');
        $points = $points + 5;
        return $points;
    }

    public function does_attendance_id_exist ($id) {
        $this->db->select('*');
        $this->db->from('attendance');
        $this->db->where('attendance_id', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function update_days_attended ($student_id) {
        $this->db->select('*');
        $this->db->from('attendance');
        $this->db->where('student_id', $student_id);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function check_for_attendance_updates ($class, $date) {

    } 


    public function get_name ($student_id) {
        $this->db->select('name');
        $this->db->from('student');
        $this->db->where('student_id', $student_id);
        return $this->db->get()->row('name');
    }

    public function get_class ($student_id) {
        $this->db->select('class');
        $this->db->from('student');
        $this->db->where('student_id', $student_id);
        return $this->db->get()->row('class');
    }

    public function get_team ($student_id) {
        $this->db->select('team');
        $this->db->from('student');
        $this->db->where('student_id', $student_id);
        return $this->db->get()->row('team');
    }

    public function get_class_attendance ($class, $date) {
        $this->db->select('student_id');
        $this->db->from('attendance');
        $this->db->where('date', $date);
        $this->db->where('class', $class);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_team_attendance ($class, $date) {
        $this->db->select('*');
        $this->db->from('attendance');
        $this->db->where('class', $class);
        $this->db->where('date', $date);
        $query = $this->db->get();
        $results = $query->result();

        $teams = $this->Team_Model->get_teams($class);

        $data = array();
        foreach ($teams as $team) {
            $data[$team->team_name] = 0;
        }

        foreach ($results as $result) {
            $student_id = $result->student_id;
            $team = $this->get_team($student_id);
            if ($team != '') {
                $team_points = $data[$team];
                $new_team_points = $team_points + 1;
                $data[$team] = $new_team_points;
            }
        }

        return $data;
    }

    public function get_attendance_dates ($student_id) {
        $this->db->select('date');
        $this->db->from('attendance');
        $this->db->where('student_id', $student_id);
        $query = $this->db->get();

        $array = array();
        foreach ($query->result_array() as $row) {
            $array[] = $row['date'];
        }

        return $array;
    }

}

?>