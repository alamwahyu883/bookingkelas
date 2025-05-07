<?php 

class Pinjamalat_Mahasiswa extends CI_Controller{
    public function index()
    {
        $this->load->model('Pinjamalat_Mhs'); // Load model
        $data['pinjamalat_mhs'] = $this->Pinjamalat_Mhs->get_all(); // Ambil data dari database
        $this->load->view('pinjamalat/pinjamalat_mahasiswa', $data); // Kirim data ke view
    }  

    public function tambah_data()
    {
        // Load model
        $this->load->model('Pinjamalat_Mhs');

        // Ambil data dari form
        $data = array(
            'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim'),
            'prodi' => $this->input->post('prodi'),
            'kegiatan' => $this->input->post('kegiatan'),
            'alat' => $this->input->post('alat'),
            'jumlah' => $this->input->post('jumlah'),
            'jam_booking' => $this->input->post('jam_booking'),
            'status' => 'Pending'
        );

        // Simpan data ke database
        $this->Pinjamalat_Mhs->insert($data);

        // Redirect ke halaman utama
        redirect('pinjamalat_mahasiswa');
    }

    public function hapus_data($id)
    {
    $this->load->model('Pinjamalat_Mhs'); // Load model
    $this->Pinjamalat_Mhs->delete($id); // Hapus data berdasarkan ID
    redirect('pinjamalat_mahasiswa'); // Redirect ke halaman utama
    }

    public function logout() {
        // Hapus semua data sesi
        $this->session->sess_destroy();
    
        // Redirect ke halaman login
        redirect(base_url());
    }
}

?>