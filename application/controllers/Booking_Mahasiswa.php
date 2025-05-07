<?php 

class Booking_Mahasiswa extends CI_Controller{
    public function index()
    {
        $this->load->model('Booking_Mhs'); // Load model
        $data['booking_mhs'] = $this->Booking_Mhs->get_all(); // Ambil data dari database
        $this->load->view('booking/booking_mahasiswa', $data); // Kirim data ke view
    }  

    public function tambah_data()
    {
        // Load model
        $this->load->model('Booking_Mhs');

        // Ambil data dari form
        $data = array(
            'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim'),
            'prodi' => $this->input->post('prodi'),
            'kegiatan' => $this->input->post('kegiatan'),
            'ruangan' => $this->input->post('ruangan'),
            'jam_booking' => $this->input->post('jam_booking'),
            'status' => 'Pending'
        );

        // Simpan data ke database
        $this->Booking_Mhs->insert($data);

        // Redirect ke halaman utama
        redirect('booking_mahasiswa');
    }

    public function hapus_data($id)
    {
    $this->load->model('Booking_Mhs'); // Load model
    $this->Booking_Mhs->delete($id); // Hapus data berdasarkan ID
    redirect('booking_mahasiswa'); // Redirect ke halaman utama
    }

    public function logout() {
        // Hapus semua data sesi
        $this->session->sess_destroy();
    
        // Redirect ke halaman login
        redirect(base_url());
    }

}

?>