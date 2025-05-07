<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/styleall/style.css') ?>">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Sistem Booking Kelas Online</title>
</head>
<body>
    
    <!-- Header -->
    <header class="hd">
    <div class="search-container">
            <form action="#" method="get">
                <input type="text" placeholder="Search..." name="search">
            </form>
    </div>
    <!-- Logout Button -->
    <a href="<?= base_url('booking/logout') ?>" class="logout-btn">Sign Out</a>
    </header>

    <!-- Navbar Kiri -->
    <nav class="navkiri">

    <!-- logo parmad -->
    <div class="logo">
     <img src="<?= base_url('assets/gambar/logoparmadbiru1.png') ?>" alt="Gambar Parmad" width="120" height="60"  >
    </div>

    <!-- Tulisan Dashboard -->
    <h1 class="teks">PINJAM ALAT</h1>
    <!-- sidebar icon -->
    <div class="sidebar">
    <ul>
        <li>
            <a href="http://localhost/bookingkelas/dashboard">
                <img src="<?= base_url('assets/gambar/dashboard.png') ?>" alt="dashboard Icon" class="icon"> 
                Dashboard
            </a>
        </li>
        <li>
            <a href="http://localhost/bookingkelas/booking">
                <img src="<?= base_url('assets/gambar/booking.png') ?>" alt="bookingruangan Icon" class="icon">
                Booking Ruangan
            </a>
        </li>
        <li>
            <a href="http://localhost/bookingkelas/pinjamalat">
                <img src="<?= base_url('assets/gambar/pinjamalat.png') ?>" alt="pinjamalat Icon" class="icon">
                Pinjam Alat
            </a>
        </li>
        <li>
            <a href="http://localhost/bookingkelas/konfirmasi">
                <img src="<?= base_url('assets/gambar/konfirmasi.png') ?>" alt="konfirmasi Icon" class="icon">
                Konfirmasi
            </a>
        </li>
        
    </ul>
    </div>
    </nav>

    <!-- Isi dengan Tabel disini -->
  <div class="container">
    <table class="tabelcustom">
      <thead>
        <tr>
          <th colspan="2">Nama</th>
          <th colspan="2">Nim</th>
          <th colspan="2">Prodi</th>
          <th colspan="2">Kegiatan</th>
          <th colspan="2">Alat</th>
          <th colspan="2">Jumlah</th>
          <th colspan="2">Jam Booking</th>
          <th colspan="2">Status</th>
          <th colspan="2"></th>
          <th colspan="2"></th>
        </tr>
      </thead>
      <tbody>
  <?php foreach ($pinjam_alat as $data) : ?>
    <tr>
      <td colspan="2"><?= $data->nama ?></td>
      <td colspan="2"><?= $data->nim ?></td>
      <td colspan="2"><?= $data->prodi ?></td>
      <td colspan="2"><?= $data->kegiatan ?></td>
      <td colspan="2"><?= $data->alat ?></td>
      <td colspan="2"><?= $data->jumlah?></td>
      <td colspan="2"><?= $data->jam_booking ?></td>
      <td colspan="2">
        <span class="status <?= strtolower($data->status) ?>">
          <?= ucfirst($data->status) ?>
        </span>
      </td>
      <td><img 
    src="<?= base_url('assets/gambar/edit.png') ?>" 
    alt="edit Icon" 
    class="edit" 
    onclick="showDeleteModal('<?= base_url('pinjamalat/hapus_data/' . $data->id) ?>')"></td>
      <td><img src="<?= base_url('assets/gambar/titik3abu.png') ?>" alt="menu Icon" class="edit"></td>
    </tr>
  <?php endforeach; ?>
    </table>

    <!-- Tombol Tambah -->
    <a href="#" class="btn-tambah" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah</a>

  </div>

    <!-- modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Booking Ruangan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('pinjamalat/tambah_data') ?>" method="POST">
          <div class="mb-3">
            <label for="nama" class="col-form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
          </div>
          <div class="mb-3">
            <label for="nim" class="col-form-label">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim" required>
          </div>
          <div class="mb-3">
            <label for="prodi" class="col-form-label">Prodi</label>
            <input type="text" class="form-control" id="prodi" name="prodi" required>
          </div>
          <div class="mb-3">
            <label for="kegiatan" class="col-form-label">Kegiatan</label>
            <input type="text" class="form-control" id="kegiatan" name="kegiatan" required>
          </div>
          <div class="mb-3">
            <label for="ruangan" class="col-form-label">Alat</label>
            <input type="text" class="form-control" id="alat" name="alat" required>
          </div>
          <div class="mb-3">
            <label for="ruangan" class="col-form-label">Jumlah</label>
            <input type="text" class="form-control" id="jumlah" name="jumlah" required>
          </div>
          <div class="mb-3">
            <label for="jam_booking" class="col-form-label">Jam Booking</label>
            <input type="text" class="form-control" id="jam_booking" name="jam_booking" required>
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- modal hapus -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Apakah Anda yakin ingin menghapus data ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <a href="#" id="confirmDeleteButton" class="btn btn-danger">Hapus</a>
      </div>
    </div>
  </div>
</div>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- javascript modal Hapus -->
    <script>
function showDeleteModal(deleteUrl) {
    // Atur URL untuk tombol hapus di modal
    document.getElementById('confirmDeleteButton').href = deleteUrl;

    // Tampilkan modal
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
    deleteModal.show();
}
</script>
  </body>
</html>