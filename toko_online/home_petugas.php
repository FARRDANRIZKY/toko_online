<?php 
session_start();
if($_SESSION['status_login'] != true){
    header('location: login_petugas.php');
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        body {
            background-color: #000; /* Warna latar belakang hitam */
            color: #ffffff; /* Warna teks putih */
            font-family: Arial, sans-serif;
        }
        .navbar {
            background-color: #000; /* Navbar hitam */
        }
        .navbar-brand, .nav-link {
            color: #ffffff; /* Teks navbar putih */
        }
        .nav-link:hover {
            color: #cccccc; /* Warna teks saat hover */
        }
        .container {
            margin-top: 20px;
            background-color: #1c1c1c; /* Warna abu-abu gelap untuk kontainer */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(255, 255, 255, 0.1);
        }
        h2 {
            color: #ffffff; /* Warna putih untuk heading */
        }
        p.lead {
            color: #cccccc; /* Warna abu-abu muda untuk teks utama */
        }
    </style>
</head>
<body>
    <?php include "header_petugas.php"; ?>

    <!-- Main Content -->
    <div class="container">
        <h2>Selamat Datang <?=$_SESSION['level']?> <?=$_SESSION['nama_petugas']?> di Dashboard Petugas</h2>
        <p class="lead">Kelola data pelanggan dan produk melalui halaman ini.</p>
    </div>

    <?php include "footer_petugas.php"; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
