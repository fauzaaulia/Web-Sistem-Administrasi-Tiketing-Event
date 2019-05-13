<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tickets_model extends CI_Model
{
    public function getTicketById($id)
    {
        return $this->db->get_where('tickets', ['id' => $id])->row_array();
    }

    public function updateTicket()
    {
        $data = [
            "id" => $this->input->post('id', true),
            "event_id" => $this->input->post('event_id', true),
            "ticket" => $this->input->post('ticket', true),
            "price" => $this->input->post('price', true),
            "total" => $this->input->post('total', true),
            "is_active" => $this->input->post('is_active', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tickets', $data);
    }
}
