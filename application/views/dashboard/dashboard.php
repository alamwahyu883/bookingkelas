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
    <!-- profile -->
    <img src="<?= base_url('assets/gambar/profile3.png') ?>" class="profile1" alt="Gambar Parmad" width="45" height="45"  >
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
    <h1 class="teks">DASHBOARD</h1>

    <!-- Kotak Pengguna  -->
     <div class="kotaklogin">
     <form  action="#" method="get"></form>
     <h1 class="tekskotakpengguna">
    Hi, <?= ucfirst($username ?? 'Pengguna') ?>!
    </h1>
     <h1 class="tekskotakpengguna2">Selamat datang di Sistem Booking Kelas Online  <br> Universitas Paramadina</h1>
     <img src="<?= base_url('assets/gambar/bukudantas.png') ?>" alt="Gambar Parmad" width="363" height="243" class="buktas" >
     <img src="<?= base_url('assets/gambar/bukudantoga.png') ?>" alt="Gambar Parmad" width="363" height="243" class="bukga" >
     </div>

     <!-- kotak informasi kelas kecil -->
      <div class="kotak-klskcl">
        <h1 class="tekskelas">Kelas kecil</h1>
        <h1 class="angkakelas"><?= $approved_counts['kelas_kecil'] ?? 0 ?></h1>
        <h1 class="teksharini">Per hari ini</h1>
        <img src="<?= base_url('assets/gambar/kelaskecil.png') ?>" alt="Gambar Kelas" width="33" height="33" class="kelas-kcl" >
        <form action="#" method="get"></form>
      </div>

      <!-- kotak informasi kelas besar -->
      <div class="kotak-klsbsr">
        <h1 class="tekskelas">Kelas Besar</h1>
        <h1 class="angkakelas"><?= $approved_counts['kelas_besar'] ?? 0 ?></h1>
        <h1 class="teksharini">Per hari ini</h1>
        <img src="<?= base_url('assets/gambar/kelasbesar.png') ?>" alt="Gambar Kelas" width="33" height="33" class="kelas-kcl" >
        <form action="#" method="get"></form>
      </div>

      <!-- kotak informasi pinjam alat -->
      <div class="kotak-pinjam">
        <h1 class="tekskelas">Pinjam Alat</h1>
        <h1 class="angkakelas"><?= $approved_counts['pinjam_alat'] ?? 0 ?></h1>
        <h1 class="teksharini">Per hari ini</h1>
        <img src="<?= base_url('assets/gambar/iconpinjam.png') ?>" alt="Gambar Kelas" width="33" height="33" class="kelas-kcl" >
        <form action="#" method="get"></form>
      </div>
    
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

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>