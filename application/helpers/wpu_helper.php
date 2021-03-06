<?php

function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('auth');
    } else {
        $role_id = $ci->session->userdata('role_id');
        $user_id = $ci->session->userdata('id');
        $menu = $ci->uri->segment(1);

        $queryMenu = $ci->db->get_where('user_menu', ['menu' => $menu])->row_array();
        $menu_id = $queryMenu['id'];

        $userAccess = $ci->db->get_where('user_access_menu', [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ]);

        if ($userAccess->num_rows() < 1) {
            redirect('auth/blocked');
        }
    }
}


function check_access($role_id, $menu_id)
{
    $ci = get_instance();

    $ci->db->where('role_id', $role_id);
    $ci->db->where('menu_id', $menu_id);
    $result = $ci->db->get('user_access_menu');

    if ($result->num_rows() > 0) {
        return "checked='checked'";
    }
}

function checkseller_access($role_id, $menu_id)
{
    $ci = get_instance();

    $ci->db->where('user_id', $role_id);
    $ci->db->where('event_id', $event_id);
    $result = $ci->db->get('user_access_event');

    if ($result->num_rows() > 0) {
        return "checked='checked'";
    }
}

function user_active($id)
{
    $ci = get_instance();

    $ci->db->where('id', $id);
    $ci->db->where('is_active', 1);
    $result = $ci->db->get('user');

    if ($result->num_rows() > 0) {
        return "checked='checked'";
    }
}

function get_event($id)
{
    $ci = get_instance();
    $user_id = $ci->session->userdata('id');

    $ci->db->where('id', $id);
    $ci->db->where('user_id', $user_id);
    $result = $ci->db->get('events');

    return $result->result_array();
}

function get_ticket($id)
{
    $ci = get_instance();

    $ci->db->where('id', $id);
    $ci->db->where('event_id', $event_id);
    $result = $ci->db->get('tickets');

    return $result->result_array();
}
