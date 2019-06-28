<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tickets extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Tickets';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user_id'] = $this->db->get_where('user', ['id' => $this->session->userdata('id')])->row_array();

        $this->load->model('Tickets_model', 'ticket');
        $this->load->model('Events_model', 'event');

        $data['event'] = $this->event->getEventByUser();
        $data['ticket'] = $this->ticket->getDataTicketbyUserId();

        $this->form_validation->set_rules('event_id', 'event_id', 'required');
        $this->form_validation->set_rules('ticket', 'ticket', 'required');
        $this->form_validation->set_rules('price', 'price', 'required');
        $this->form_validation->set_rules('total', 'total', 'required');
        $this->form_validation->set_rules('is_active', 'is_active', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('tickets/index', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'event_id' => $this->input->post('event_id'),
                'ticket' => $this->input->post('ticket'),
                'price' => $this->input->post('price'),
                'total' => $this->input->post('total'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->db->insert('tickets', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New event added!</div>');
            redirect('tickets');
        }
    }

    public function delete($id)
    {
        $this->db->delete('tickets', ['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu Deleted!</div>');
        redirect('tickets');
    }

    public function geteditticket()
    {
        $this->load->model('Tickets_model', 'ticket');
        echo json_encode($this->ticket->getTicketById($_POST['id']));
    }

    public function updateticket()
    {
        $this->load->model('Tickets_model', 'ticket');
        $this->ticket->updateTicket();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">The ticket was <b>successfully</b> updated!</div>');
        redirect('tickets');
    }
}
