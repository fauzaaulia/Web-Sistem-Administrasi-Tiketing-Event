<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tickets_model extends CI_Model
{

    public function viewByEvent($event_id)
    {
        $this->db->where('event_id', $event_id);
        $result = $this->db->get('tickets')->result();

        return $result;
    }

    public function getTicketById($id)
    {
        return $this->db->get_where('tickets', ['id' => $id])->row_array();
    }

    public function getDataTicket()
    {
        $query = "SELECT `tickets`.*, `events`.`event`, `events`.`date`
                  FROM `tickets` JOIN `events`
                  ON `tickets`.`event_id` = `events`.`id`
                ";
        return $this->db->query($query)->result_array();
    }

    public function getDataTicketbyUserId()
    {
        $this->db->select('*');
        $this->db->from('tickets');
        $this->db->join('events', 'events.id = tickets.event_id');
        $this->db->where('user_id', $this->session->userdata('id'));
        $query = $this->db->get()->result_array();
        //$query = $this->db->get_where('events', ['events.id' => $this->session->userdata('id')]);

        return $query;

        // Produces:
        // SELECT * FROM blogs JOIN comments ON comments.id = blogs.id
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
