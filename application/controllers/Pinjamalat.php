<?php 

class Pinjamalat extends CI_Controller{
    public function index()
    {
        $this->load->model('Pinjam_Alat'); // Load model admin
        $this->load->model('Pinjamalat_Mhs');   // Load model mahasiswa

          // Ambil data dari booking (admin)
          $pinjam_alat_admin = $this->Pinjam_Alat->get_all();

          // Ambil data dari booking mahasiswa (Disetujui)
          $pinjam_alat_mhs = $this->Pinjam_Alat->get_all_approved_mahasiswa();

        // Gabungkan data untuk ditampilkan di admin
         $data['pinjam_alat'] = array_merge($pinjam_alat_admin, $pinjam_alat_mhs); // Ambil data dari database

        $this->load->view('pinjamalat/pinjamalat', $data); // Kirim data ke view
    }  

    public function tambah_data(){
        $this->load->model('Pinjam_Alat');

        // Ambil data dari form
        $data = array(
            'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim'),
            'prodi' => $this->input->post('prodi'),
            'kegiatan' => $this->input->post('kegiatan'),
            'alat' => $this->input->post('alat'),
            'jumlah' => $this->input->post('jumlah'),
            'jam_booking' => $this->input->post('jam_booking'),
            'status' => 'Disetujui'
        );

        // Simpan data ke database
        $this->Pinjam_Alat->insert($data);

        // Redirect ke halaman utama
        redirect('pinjamalat');
    }

    public function hapus_data($id)
    {
    $this->load->model('Pinjam_Alat'); // Load model
    $this->Pinjam_Alat->delete($id); // Hapus data berdasarkan ID
    redirect('pinjamalat'); // Redirect ke halaman utama
    }

    public function logout() {
        // Hapus semua data sesi
        $this->session->sess_destroy();
    
        // Redirect ke halaman login
        redirect(base_url());
    }
}

?>