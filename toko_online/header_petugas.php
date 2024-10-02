<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Petugas</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        body {
            background-color: #ffffff; /* Warna latar belakang putih */
            font-family: 'Arial', sans-serif;
            color: #000; /* Teks berwarna hitam */
        }
        .navbar {
            background-color: #000; /* Navbar hitam */
        }
        .navbar-brand {
            font-weight: bold;
            color: #ffffff; /* Warna putih untuk teks logo */
        }
        .nav-link {
            color: #ffffff !important; /* Teks navbar putih */
        }
        .nav-link:hover {
            color: #cccccc; /* Warna abu-abu saat hover */
        }
        .nav-link.active {
            font-weight: bold; /* Bold untuk link aktif */
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PETUGAS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home_petugas.php">Home</a>
                    </li>

                    <!-- Daftar Petugas: Hanya untuk CEO -->
                    <?php if ($_SESSION['level'] == 'CEO'): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="tampil_petugas.php">Daftar Petugas</a>
                    </li>
                    <?php endif; ?>

                    <!-- Daftar Pelanggan: Hanya untuk CEO dan Manager -->
                    <?php if ($_SESSION['level'] == 'CEO' || $_SESSION['level'] == 'Manager'): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="tampil_pelanggan.php">Daftar Pelanggan</a>
                    </li>
                    <?php endif; ?>

                    <!-- Riwayat Transaksi: Hanya untuk CEO, Manager dan Admin -->
                    <?php if ($_SESSION['level'] == 'CEO' || $_SESSION['level'] == 'Manager' || $_SESSION['level'] == 'Admin'): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="riwayat_transaksi_petugas.php">Riwayat Transaksi</a>
                    </li>
                    <?php endif; ?>

                    <li class="nav-item">
                        <a class="nav-link" href="daftar_produk.php">Daftar Produk</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="tambah_produk.php">Tambah Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
