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
    <h1 class="teks">KONFIRMASI</h1>

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
          <th colspan="2">Ruangan</th>
          <th colspan="2">Alat</th>
          <th colspan="2">Jumlah</th>
          <th colspan="2">Jam Booking</th>
          <th colspan="2">Status</th>
          <th colspan="2"></th>
          <th colspan="2"></th>
        </tr>
      </thead>

      <tbody>
    <?php foreach ($pending_bookings as $data): ?>
    <tr>
        <td colspan="2"><?= $data->nama ?></td>
        <td colspan="2"><?= $data->nim ?></td>
        <td colspan="2"><?= $data->prodi ?></td>
        <td colspan="2"><?= $data->kegiatan ?></td>
        <td colspan="2"><?= $data->ruangan ?></td>
        <td colspan="2">-</td> <!-- Kolom alat kosong -->
        <td colspan="2">-</td> <!-- Kolom jumlah kosong -->
        <td colspan="2"><?= $data->jam_booking ?></td>

        <td colspan="2">
            <a href="<?= base_url('konfirmasi/update_status/' . $data->id . '/Disetujui') ?>" class="btn-approve">Setujui</a>
            <a href="<?= base_url('konfirmasi/update_status/' . $data->id . '/Ditolak') ?>" class="btn-reject">Tolak</a>
        </td>
    </tr>
    <?php endforeach; ?>
</tbody>

<tbody>
    <?php foreach ($pending_pinjamalat as $data): ?>
         <tr>
         <td colspan="2"><?= $data->nama ?></td>
        <td colspan="2"><?= $data->nim ?></td>
        <td colspan="2"><?= $data->prodi ?></td>
        <td colspan="2">-</td>
        <td colspan="2">-</td>
        <td colspan="2"><?= $data->alat ?></td>
        <td colspan="2"><?= $data->jumlah ?></td>
        <td colspan="2"><?= $data->jam_booking ?></td>
        
            <td>
            <a href="<?= base_url('konfirmasi/update_status_pinjamalat/' . $data->id . '/Disetujui') ?>" class="btn-approve">Setujui</a>
            <a href="<?= base_url('konfirmasi/update_status_pinjamalat/' . $data->id . '/Ditolak') ?>" class="btn-reject">Tolak</a>
            </td>
        </tr>
    <?php endforeach; ?>
 </tbody>

    </table>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>