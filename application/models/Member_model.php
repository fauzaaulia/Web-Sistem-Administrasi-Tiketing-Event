<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member_model extends CI_Model
{
    public function getTotalSeller()
    {
        $user_id = $this->session->userdata('id');
        $query = "SELECT count(name)
                  FROM user
                  WHERE parent_id = $user_id";
        return $this->db->query($query)->result_array();
    }

    public function getTotalEventByUser()
    {
        $user_id = $this->session->userdata('id');
        $query = "SELECT count(event)
                  FROM events WHERE user_id = $user_id";
        return $this->db->query($query)->row_array();
    }
}
