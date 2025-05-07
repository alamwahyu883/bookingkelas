<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/stylelogin/style.css') ?>">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <title>Sistem Booking Kelas Online </title>

</head>
<body>

    <!-- gambar mahasiswa -->
    <div class="gambar" >
    <img src="<?= base_url('assets/gambar/mahasiswa.jpeg') ?>" alt="Gambar Login" width="606" height="415" >
    </div>

    <!-- logo parmad -->
    <div class="logoparmad1">
    <img src="<?= base_url('assets/gambar/logoparmadbiru1.png') ?>" alt="Gambar Parmad" width="217" height="111" >
    </div>

    <!-- Teks Tulisan  -->
    <h1 class="teks">SELAMAT DATANG</h1>
    <h4 class="teks-booking">Sistem Booking Kelas Online <br> Universitas Paramadina</h4>
    <h3 class="teks-akun">Akun Pengguna<span class="bintang">*</span></h3>
    <h3 class="teks-password">Password<span class="bintang">*</span></h3>


    <!-- login -->
    <div class="formlogin">
    <div class="error-container">
        <?php if ($this->session->flashdata('error')): ?>
            <p style="color: red;"><?= $this->session->flashdata('error') ?></p>
        <?php endif; ?>
    </div>
        <form action="<?= base_url('login/process') ?>" method="post">
            <input type="text" id="username" name="username" placeholder="Masukkan Nim" required>
            <input type="password" id="password" name="password" placeholder="Masukkan password" required>
            <button type="submit" class="login-btn">Sign in</button>
        </form>
    </div>

</body>
</html>