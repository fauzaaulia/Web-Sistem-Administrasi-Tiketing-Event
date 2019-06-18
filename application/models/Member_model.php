<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function getTotalSeller()
    {
        $query = "SELECT count(name)
                  FROM user
                  WHERE parent_id=12";
        return $this->db->query($query)->result_array();
    }
}
