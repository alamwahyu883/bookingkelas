<?php
class Booking_model extends CI_Model {
    private $table = 'booking';

    public function get_all() {
        return $this->db->get($this->table)->result();
    }

    public function insert($data) {
        return $this->db->insert($this->table, $data);
    }

    public function delete($id) {
        return $this->db->delete($this->table, ['id' => $id]);
    }

    // Ambil data booking mahasiswa yang Disetujui
    public function get_all_approved_mahasiswa() {
        $this->db->where('status', 'Disetujui');
        return $this->db->get('booking_mhs')->result();
    }
    
}
