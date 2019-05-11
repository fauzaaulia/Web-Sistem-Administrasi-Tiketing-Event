<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Events_model extends CI_Model
{
    public function getEventById($id)
    {
        return $this->db->get_where('events', ['id' => $id])->row_array();
    }

    public function updateEvent()
    {
        $data = [
            'id' => $this->input->post('id'),
            'user_id' => $this->input->post('user_id'),
            'name' => $this->input->post('name'),
            'date' => $this->input->post('date'),
            'location' => $this->input->post('location'),
            'address' => $this->input->post('address'),
            'phone' => $this->input->post('phone'),
            'is_active' => $this->input->post('is_active')
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('events', $data);
    }
}
