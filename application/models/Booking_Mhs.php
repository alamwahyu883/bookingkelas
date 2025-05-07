<?php
class Booking_Mhs extends CI_Model {
    private $table = 'booking_mhs';

    public function get_all() {
        return $this->db->get($this->table)->result();
    }

    public function insert($data) {
        return $this->db->insert($this->table, $data);
    }

    public function delete($id) {
        return $this->db->delete($this->table, ['id' => $id]);
    }

    public function update_status($id, $status) {
        return $this->db->where('id', $id)->update($this->table, ['status' => $status]);
    }

    public function get_pending() {
        return $this->db->get_where($this->table, ['status' => 'Pending'])->result();
    }
    
    public function get_approved_count_by_category() {
        $result = [
            'kelas_kecil' => 0,
            'kelas_besar' => 0,
            'pinjam_alat' => 0
        ];
    
        // Hitung jumlah Approved untuk kelas kecil
        $this->db->where('status', 'disetujui');
        $this->db->where_in('ruangan', ['A1-1', 'A1-2', 'A1-3', 'A1-4', 'A1-5']);
        $result['kelas_kecil'] = $this->db->count_all_results('booking_mhs');
    
        // Hitung jumlah Approved untuk kelas besar
        $this->db->where('status', 'disetujui');
        $this->db->where_in('ruangan', ['D3-1', 'D3-2', 'D3-3', 'D3-4', 'D3-5']);
        $result['kelas_besar'] = $this->db->count_all_results('booking_mhs');
    
        // Hitung jumlah Approved untuk pinjam alat
        $this->db->where('status', 'disetujui');
        $result['pinjam_alat'] = $this->db->count_all_results('pinjamalat_mhs');
    
        return $result;
    }
    
}
