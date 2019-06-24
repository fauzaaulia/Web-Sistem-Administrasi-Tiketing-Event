<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Seller_model extends CI_Model
{
    public function getEventUserId($id)
    {
        $user_id = $this->session->userdata('id');

        $this->db->where('id', $id);
        $this->db->where('user_id', $user_id);
        $result = $this->db->get('events');

        return $result->result_array();
    }

    public function getListOrder()
    {
        $query = "SELECT `order`.*, `events`.`event`, `tickets`.`ticket`
                  FROM `order` 
                  JOIN `events` ON `order`.`event_id` = `events`.`id`
                  JOIN `tickets`  ON `order`.`ticket_id` = `tickets`.`id` 
                ";
        return $this->db->query($query)->result_array();
    }

    public function addOrder()
    {
        $id = $this->input->post('id_order', true);
        $name = $this->input->post('name', true);
        $email = $this->input->post('email', true);
        $phone = $this->input->post('phone', true);
        $event = $this->input->post('event', true);
        $ticket = $this->input->post('ticket', true);
        $waiter = $this->input->post('id_user', true);
        $data = [
            'id_order' => htmlspecialchars($id),
            'buyer' => htmlspecialchars($name),
            'buyer_email' => htmlspecialchars($email),
            'buyer_phone' => htmlspecialchars($phone),
            'event_id' => htmlspecialchars($event),
            'ticket_id' => htmlspecialchars($ticket),
            'waiter' => htmlspecialchars($waiter),
            'datetime' => date("d/m/Y")
        ];

        $this->db->insert('order', $data);

        $this->db->where('id', $data['ticket_id']);
        $this->db->set('total', 'total-1', FALSE);
        $this->db->update('tickets');
    }
}
