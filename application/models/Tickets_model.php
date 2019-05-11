<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tickets_model extends CI_Model
{
    public function getTiketById($id)
    {
        return $this->db->get_where('ticket', ['id' => $id])->row_array();
    }
}
