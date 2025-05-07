<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('login/login');
    }

    public function process()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // Ambil data user dari database
        $user = $this->User_model->get_user($username);

        if ($user) {
            if ($user['password'] === hash('sha256', $password)) { // Validasi password
                // Set session
                $this->session->set_userdata([
                    'username' => $user['username'],
                    'role'     => $user['role'],
                    'logged_in' => TRUE,
                ]);

                // Redirect sesuai role
                if ($user['role'] === 'admin') {
                    redirect('dashboard');
                } elseif ($user['role'] === 'mahasiswa') {
                    redirect('dashboard_mahasiswa');
                }
            } else {
                $this->session->set_flashdata('error', 'Password salah!');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('error', 'Username tidak ditemukan!');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
