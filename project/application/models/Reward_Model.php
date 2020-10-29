<?php

Class Reward_Model extends CI_Model {

    public function get_unredeemed_rewards($class) {
        $this->db->select('*');
        $this->db->from('reward');
        $this->db->where('class', $class);
        $this->db->where('redeemed', false);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_redeemed_rewards($class) {
        $this->db->select('*');
        $this->db->from('reward');
        $this->db->where('class', $class);
        $this->db->where('redeemed', true);
        $query = $this->db->get();
        return $query->result();
    }

    public function redeem_reward($reward_id) {
        $this->db->set('redeemed', true);
        $this->db->where('reward_id', $reward_id);
        $this->db->update('reward');
    }

    public function unredeem_reward($reward_id) {
        $this->db->set('redeemed', false);
        $this->db->where('reward_id', $reward_id);
        $this->db->update('reward');
    }

    public function does_reward_exist($reward_id) {
        $this->db->select('*');
        $this->db->from('reward');
        $this->db->where('reward_id', $reward_id);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function add_reward($data) {
        $this->db->insert('reward', $data);
    }

    public function remove_reward($reward_id) {
        $this->db->where('reward_id', $reward_id);
        $this->db->delete('reward');
    }
}

?>