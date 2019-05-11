<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Events extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'List Events';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user_id'] = $this->db->get_where('user', ['id' => $this->session->userdata('id')])->row_array();

        $this->load->model('Events_model');

        $data['event'] = $this->db->get_where('events')->result_array();

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('location', 'Location', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('events/index', $data);
            $this->load->view('templates/footer');
        } else {
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
            $this->db->insert('events', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New event added!</div>');
            redirect('events');
        }
    }

    public function delete($id)
    {
        $this->db->delete('events', ['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Event Deleted!</div>');
        redirect('events');
    }

    public function geteditevent()
    {
        $this->load->model('Events_model', 'event');
        echo json_encode($this->event->getEventById($_POST['id']));
    }

    public function updateevent()
    {
        $this->load->model('Events_model', 'event');
        $this->event->updateEvent();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">The event was <b>successfully</b> updated!</div>');
        redirect('events');
    }
}
