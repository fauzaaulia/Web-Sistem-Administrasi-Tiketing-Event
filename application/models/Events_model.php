<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Events_model extends CI_Model
{

    public function getAllEvent()
    {
        return $this->db->get('events')->result();
    }

    public function getEventByUser()
    {
        return $this->db->get_where('events', ['user_id' => $this->session->userdata('id')])->result_array();
    }

    public function getEventByParentUser()
    {
        return $this->db->get_where('events', ['user_id' => $this->session->userdata('parent_id')])->result_array();
    }

    public function getEventById($id)
    {
        return $this->db->get_where('events', ['id' => $id])->row_array();
    }

    public function updateEvent()
    {
        $data = [
            'id' => $this->input->post('id'),
            'user_id' => $this->input->post('user_id'),
            'event' => $this->input->post('name'),
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
