<?php 
class Booking extends CI_Controller {
    public function index() {
        $this->load->model('Booking_model'); // Load model admin
        $this->load->model('Booking_Mhs');   // Load model mahasiswa

        // Ambil data dari booking (admin)
        $booking_data_admin = $this->Booking_model->get_all();

        // Ambil data dari booking mahasiswa (Disetujui)
        $booking_data_mhs = $this->Booking_model->get_all_approved_mahasiswa();

        // Gabungkan data untuk ditampilkan di admin
        $data['booking_data'] = array_merge($booking_data_admin, $booking_data_mhs);

        $this->load->view('booking/booking', $data); // Kirim data ke view
    }

    public function tambah_data() {
        $this->load->model('Booking_model');

        // Ambil data dari form
        $data = array(
            'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim'),
            'prodi' => $this->input->post('prodi'),
            'kegiatan' => $this->input->post('kegiatan'),
            'ruangan' => $this->input->post('ruangan'),
            'jam_booking' => $this->input->post('jam_booking'),
            'status' => 'Disetujui'
        );

        // Simpan data ke database
        $this->Booking_model->insert($data);

        // Redirect ke halaman utama
        redirect('booking');
    }

    public function hapus_data($id) {
        $this->load->model('Booking_model'); // Load model
        $this->Booking_model->delete($id); // Hapus data berdasarkan ID
        redirect('booking'); // Redirect ke halaman utama
    }

    public function logout() {
        // Hapus semua data sesi
        $this->session->sess_destroy();
    
        // Redirect ke halaman login
        redirect(base_url());
    }
}


?>