<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function getRoleById($id)
    {
        return $this->db->get_where('user_role', ['id' => $id])->row_array();
    }

    public function updateRole()
    {
        $data = [
            "id" => $this->input->post('id', true),
            "role" => $this->input->post('role', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user_role', $data);
    }

    public function getTotalUser()
    {
        $query = "SELECT count(*) AS total
                  FROM user
                  GROUP BY role_id";
        return $this->db->query($query)->result_array();
    }

    public function getTotalEvent()
    {
        $query = "SELECT count(event)
                  FROM events";
        return $this->db->query($query)->row_array();
    }
}
