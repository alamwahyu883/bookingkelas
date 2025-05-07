<?php 
class Konfirmasi extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Booking_Mhs');
        $this->load->model('Pinjamalat_Mhs'); // Model untuk pinjam alat
    }

    public function index() {
        // Data dengan status Pending untuk Booking dan Pinjam Alat
        $data['pending_bookings'] = $this->Booking_Mhs->get_pending();
        $data['pending_pinjamalat'] = $this->Pinjamalat_Mhs->get_pending(); // Ambil data pending pinjam alat

        // Load view dengan data yang digabungkan
        $this->load->view('konfirmasi/konfirmasi', $data);
    }

    public function update_status($id, $status) {
        // Validasi status yang diperbolehkan
        $allowed_statuses = ['Disetujui', 'Ditolak'];
        if (!in_array($status, $allowed_statuses)) {
            show_error('Status tidak valid');
        }

        // Update status menggunakan model Booking_Mhs
        $this->Booking_Mhs->update_status($id, $status);

        // Redirect kembali ke halaman konfirmasi
        redirect('konfirmasi');
    }

    public function update_status_pinjamalat($id, $status) {
        // Validasi status yang diperbolehkan
        $allowed_statuses = ['Disetujui', 'Ditolak'];
        if (!in_array($status, $allowed_statuses)) {
            show_error('Status tidak valid');
        }

        // Update status menggunakan model Pinjam_Alat
        $this->Pinjamalat_Mhs->update_status($id, $status);

        // Redirect kembali ke halaman konfirmasi
        redirect('konfirmasi');
    }
}
?>
