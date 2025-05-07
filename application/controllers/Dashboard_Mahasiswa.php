<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_Mahasiswa extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role') !== 'mahasiswa') {
            redirect('login');
        }

        $this->load->model('Booking_Mhs');
    }

    public function index() {
        $this->load->model('Booking_Mhs'); // Pastikan model dimuat
        $data['username'] = $this->session->userdata('username'); 
        $data['role'] = $this->session->userdata('role'); 
    
        // Dapatkan jumlah booking yang disetujui
        $data['approved_counts'] = $this->Booking_Mhs->get_approved_count_by_category();
        log_message('debug', 'Approved Counts: ' . print_r($data['approved_counts'], true));
    
        $this->load->view('dashboard/dashboard_mahasiswa', $data);
    }

    public function logout() {
        // Hapus semua data sesi
        $this->session->sess_destroy();
    
        // Redirect ke halaman login
        redirect(base_url());
    }
}
