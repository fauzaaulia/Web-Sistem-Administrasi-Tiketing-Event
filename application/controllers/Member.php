<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
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
        $this->load->model('Member_model', 'Member');
        $data['tosel'] = $this->Member->getTotalSeller();
        $data['totev'] = $this->Member->getTotalEventByUser();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('member/index', $data);
        $this->load->view('templates/footer');
    }

    public function list()
    {
        $data['title'] = 'List Seller';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['users'] = $this->db->get_where('user',  ['role_id' => 3, 'parent_id' => $this->session->userdata('id')])->result_array();

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('member/list', $data);
            $this->load->view('templates/footer');
        } else {
            $email = $this->input->post('email', true);
            $phone = $this->input->post('phone', true);
            $name = $this->input->post('name', true);
            $password = $this->input->post('password1');
            $id = $this->session->userdata('id', true);
            $data = [
                'parent_id' => $id,
                'name' => htmlspecialchars($name),
                'email' => htmlspecialchars($email),
                'phone' => htmlspecialchars($phone),
                'image' => 'default.jpg',
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'role_id' => 3,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);

            $this->_sendEmail('activation');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your SELLER account has been created. The notice will be send to email your seller</div>');
            redirect('member/list');
        }
    }

    private function _sendEmail($type)
    {
        $config = [
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'sistem.sate@gmail.com',
            'smtp_pass' => 'a`1234567890-=',
            'smtp_port' => 465,
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'newline'   => "\r\n"
        ];

        $this->email->initialize($config);

        $this->email->from('sistem.sate@gmail.com', 'S.A.T.E');
        $this->email->to($this->input->post('email'));

        if ($type == 'activation') {
            $this->email->subject('Seller - Notification : S.A.T.E');
            $this->email->message('Kamu telah didaftarkan sebagai seller di <b>Sistem Administrasi Ticketing Event</b> oleh' .  $this->db->get('user', ['email' => $this->session->userdata('email')])->row_array() . ' <br>Berikut adalah informasi akun kamu. <br> email :' . $this->input->post('email') . '<br> password :' . $this->input->post('password2') . '<br> <br>Silahkan login <a href="' . base_url('/auth') . '">disini</a>');
            $this->email->send();
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    public function sellerDelete($id)
    {
        $this->db->delete('user', ['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Seller deleted!</div>');
        redirect('member/list');
    }

    public function changeSellerActive()
    {
        $seller_id = $this->input->post('sellerId');
        $seller_active = $this->input->post('sellerActive');

        $data = [
            'id' => $seller_id,
            'is_active' => $seller_active
        ];

        $this->db->set('is_active', $data['is_active']);
        $this->db->where('id', $data['id']);
        $this->db->update('user');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Seller active Changed!</div>');
    }

    public function sellerAccess($user_id)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user', ['id' => $user_id])->row_array();

        $id = $this->session->userdata('id');
        $this->db->where('user_id ==', $id);
        $data['events'] = $this->db->get('events')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('member/selleraccess', $data);
        $this->load->view('templates/footer');
    }
}
