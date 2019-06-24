<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Seller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('seller/index', $data);
        $this->load->view('templates/footer');
    }

    public function order()
    {
        $data['title'] = 'Order';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Tickets_model', 'ticket');
        $this->load->model('Events_model', 'order');

        $data['event'] = $this->order->getEventByParentUser();
        $data['ticket'] = $this->ticket->getDataTicket();

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('phone', 'Phone', 'required|numeric');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('seller/order', $data);
            $this->load->view('templates/footer');
        } else {
            $this->order->addOrder();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('seller/order');
        }
    }

    public function listTicket()
    {
        $event = $this->input->post('event');

        $this->load->model('Tickets_model', 'ticket');
        $ticket = $this->ticket->viewByEvent($event);
        $lists = "<option value=''>Pilih </option>";

        foreach ($ticket as $tk) {
            $lists .= "<option value='" . $tk->id . "'>" . $tk->ticket . "</option>";
        }

        $callback = array('ticket' => $lists);

        echo json_encode($callback);
    }

    public function listorder()
    {
        $data['title'] = 'List Order';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Seller_model', 'order');
        $data['listorder'] = $this->order->getListOrder();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('seller/listorder', $data);
        $this->load->view('templates/footer');
    }
}
