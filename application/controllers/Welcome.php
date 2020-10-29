<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->database();

		$this->load->model('Attendance_Model');
		$this->load->model('Student_Model');
		$this->load->model('Team_Model');
		$this->load->model('Reward_Model');

		$this->load->helper('form');
	}

	public function index() {
		$this->load->view('welcome_message');
	}

	public function dashboard() {
		// get class
		$class = $this->input->post('class');
		if (!isset($class)) {
			$class = '1-1';
		}
		$student_list = $this->Student_Model->get_students($class);

		// get date
		$date = $this->input->post('date');
		if (!isset($date)) {
			$date = date('Y-m-d');
		}
		$attended_students = $this->Attendance_Model->get_class_attendance($class, $date);
		$attended_student_ids = array_column($attended_students, 'student_id');

		$classes = $this->Student_Model->get_classes();

		$this->update_team_points();

		$data['teams'] = $this->Team_Model->get_teams($class);

		$data['team_attendance'] = $this->Attendance_Model->get_team_attendance($class, $date);
		
		$data['student_list'] = $student_list;
		$data['attended_students'] = $attended_student_ids;
		$data['date'] = $date;
		$data['class'] = $class;
		$data['classes'] = $classes;

		$this->load->view('dashboard', $data);
	}

	public function roll_call() {
		$student_ids = $this->input->post('student_id');
		$date = $this->input->post('date');
		foreach ($student_ids as $student_id) {
			$this->Attendance_Model->insert_attendance_data($student_id, $date);
		}

		$attendance_list = $this->Attendance_Model->get_class_attendance($date, $class);

		$this->dashboard();
	}

	public function classes() {
		$class = $this->input->post('class');
		if (!isset($class)) {
			$class = '1-1';
		}
		$student_list = $this->Student_Model->get_students($class);

		$classes = $this->Student_Model->get_classes();

		$names = $this->Student_Model->get_student_names($class);

		$data['student_list'] = $student_list;
		$data['class'] = $class;
		$data['classes'] = $classes;
		$data['names'] = $names;

		$this->load->view('classes', $data);
	}

	public function edit_profile() {
		$name = $this->input->post('name');
		$id = $this->input->post('id');
		$dietary = $this->input->post('dietary');
		$extra = $this->input->post('extra');
		$team = $this->input->post('team');

		$data = array (
			'student_id' => $id,
			'name' => $name,
			'team' => $team,
			'dietary' => $dietary,
			'extra' => $extra
		);

		$this->Student_Model->edit_profile($data);

		$this->classes();
	}

	public function view_profile($student_id) {
		$student_data = $this->Student_Model->get_student($student_id);
		
		$data['name'] = $student_data->name;
		$data['student_id'] = $student_data->student_id;
		$data['team'] = $student_data->team;
		$data['dietary'] = $student_data->dietary;
		$data['extra'] = $student_data->extra;
		$data['days_attended'] = $student_data->days_attended;
		

		$data['dates'] = $this->Attendance_Model->get_attendance_dates($student_id);

		$this->load->view('view_profile', $data);
	}

	public function add_student() {
		$name = $this->input->post('name');
		$id = $this->input->post('id');
		$dietary = $this->input->post('dietary');
		$extra = $this->input->post('extra');
		$team = $this->input->post('team');
		$class = $this->input->post('class');

		$data = array (
			'student_id' => $id,
			'name' => $name,
			'class' => $class,
			'team' => $team,
			'dietary' => $dietary,
			'extra' => $extra
		);

		$this->Student_Model->add_student($data);

		$this->classes();
	}

	public function remove_student() {
		$id = $this->input->post('id');
		$this->Student_Model->remove_student($id);

		$this->classes();
	}

	public function teams() {
		$class = $this->input->post('class');
		if (!isset($class)) {
			$class = '1-1';
		}
		$student_list = $this->Student_Model->get_students($class);

		$classes = $this->Student_Model->get_classes();

		$teams = $this->Team_Model->get_teams($class);

		$team_members = array();

		foreach ($teams as $team) {
			$team_members[$team->team_name] = $this->Team_Model->get_team_members($team->team_name, $class);
		}

		$this->update_team_points();

		$data['student_list'] = $student_list;
		$data['class'] = $class;
		$data['classes'] = $classes;
		$data['teams'] = $teams;
		$data['team_members'] = $team_members;

		$this->load->view('teams', $data);
	}

	

	public function edit_team() {
		$team_name = $this->input->post('team_name');
		$description = $this->input->post('description');
		$points = $this->input->post('points');
		$team_id = $this->input->post('team_id');

		$data = array (
			'team_name' => $team_name,
			'description' => $description,
			'points' => $points,
			'team_id' => $team_id,
		);

		$this->Team_Model->edit_team($data);

		$this->teams();
	}

	public function change_members() {
		$new_team_members = $this->input->post('select_members');
		$class = $this->input->post('class');
		$team_name = $this->input->post('team_name');

		// Removes old members from the team
		$current_team_members = $this->Team_Model->get_team_members($team_name, $class);
		foreach ($current_team_members as $member) {
			if (!in_array($member->student_id, $new_team_members)) {
				$data = array (
					'student_id' => $member->student_id,
					'team' => '',
				);

				$this->Student_Model->edit_profile($data);
			}
		}

		// Adds new members to the team
		foreach ($new_team_members as $member) {
			$student_info = $this->Student_Model->get_student($member);
			if (!in_array($student_info->name, $current_team_members)) {
				$data = array (
					'student_id' => $student_info->student_id,
					'team' => $team_name,
				);

				$this->Student_Model->edit_profile($data);
			}
		}

		$this->teams();
	}

	public function add_team() {
		$team_name = $this->input->post('team_name');
		$description = $this->input->post('description');
		$points = $this->input->post('points');
		$class = $this->input->post('class');

		$random_int = rand();
		$team_id = 'team' . $random_int;

		while ($this->Team_Model->does_team_exist($team_id)) {
			$random_int = rand();
			$team_id = 'team' . $random_int;
		}
		
		$data = array (
			'team_id' => $team_id,
			'team_name' => $team_name,
			'description' => $description,
			'points' => $points,
			'class' => $class
		);

		$this->Team_Model->add_team($data);

		$this->teams();
	}

	public function remove_team() {
		$team_id = $this->input->post('team_id');
		$team_name = $this->input->post('team_name');
		$class = $this->input->post('class');

		$this->Team_Model->remove_team($team_id);

		$team_members = $this->Team_Model->get_team_members($team_name, $class);

		foreach ($team_members as $member) {
			$data = array (
				'student_id' => $member->student_id,
				'team' => '',
			);
			
			$this->Student_Model->edit_profile($data);
		}

		$this->teams();
	}

	public function update_team_points() {
		$classes = $this->Student_Model->get_classes();

		foreach ($classes as $row) {
			$teams = $this->Team_Model->get_teams($row);

			foreach ($teams as $team) {
				$this->Team_Model->update_team_points($team->team_id, $team->team_name, $row);
			}
		}
	}

	public function rewards($status) {
		$class = $this->input->post('class');
		if (!isset($class)) {
			$class = '1-1';
		}

		$classes = $this->Student_Model->get_classes();

		$teams = $this->Team_Model->get_ordered_teams($class);

		if ($status == 'unredeemed') {
			$rewards = $this->Reward_Model->get_unredeemed_rewards($class);
		} else {
			$rewards = $this->Reward_Model->get_redeemed_rewards($class);
		}

		$data = array (
			'class' => $class,
			'classes' => $classes,
			'rewards' => $rewards,
			'status' => $status,
			'teams' => $teams,
		);

		$this->load->view('rewards', $data);
	}

	public function redeem_reward($reward_id) {
		$this->Reward_Model->redeem_reward($reward_id);

		$this->rewards('redeemed');
	}
	
	public function unredeem_reward($reward_id) {
		$this->Reward_Model->unredeem_reward($reward_id);

		$this->rewards('unredeemed');
	}

	public function add_reward() {
		$reward_name = $this->input->post('reward_name');
		$reward_description = $this->input->post('reward_description');
		$class = $this->input->post('class');

		$random_int = rand();
		$reward_id = 'reward' . $random_int;

		while ($this->Reward_Model->does_reward_exist($reward_id)) {
			$random_int = rand();
			$reward_id = 'reward' . $random_int;
		}
		
		$data = array (
			'reward_id' => $reward_id,
			'reward_name' => $reward_name,
			'reward_description' => $reward_description,
			'redeemed' => 0,
			'class' => $class
		);

		$this->Reward_Model->add_reward($data);

		$this->rewards('unredeemed');
	}

	public function remove_reward() {
		$reward_id = $this->input->post('reward_id');
		$class = $this->input->post('class');

		$this->Reward_Model->remove_reward($reward_id);

		$this->rewards('unredeemed');
	}
}