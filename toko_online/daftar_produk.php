<?php 
session_start();
if($_SESSION['status_login'] != true){
    header('location: login_petugas.php');
    exit();
}

// Koneksi ke database
include "koneksi.php";

// Ambil data produk dari database
$query = "SELECT * FROM toko_produk";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            color: #343a40;
            font-family: 'Arial', sans-serif;
        }
        .navbar {
            background-color: #000;
        }
        .navbar-brand {
            font-weight: bold;
            color: #ffffff;
        }
        .container {
            margin-top: 30px;
        }
        .card {
            border: 1px solid #ddd;
            border-radius: 10px;
            transition: box-shadow 0.3s;
            background-color: #ffffff;
        }
        .card:hover {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }
        .card-img-top {
            height: 200px;
            object-fit: cover;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .btn-primary {
            background-color: #000;
            border-color: #000;
            transition: background-color 0.3s, border-color 0.3s;
        }
        .btn-primary:hover {
            background-color: #333;
            border-color: #333;
        }
        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }
        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }
        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
        }
        .card-text {
            font-size: 0.9rem;
            color: #6c757d;
        }
        .price {
            font-size: 1.25rem;
            font-weight: bold;
            color: #000;
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
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home_petugas.php">Home</a>
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

    <!-- Daftar Produk -->
    <div class="container">
        <h3 class="mt-4 text-center">Daftar Produk</h3>
        <div class="row g-4">
            <?php while($row = mysqli_fetch_assoc($result)): ?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card">
                        <img src="foto_produk/<?= $row['foto_produk'] ?>" class="card-img-top" alt="<?= $row['nama_produk'] ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $row['nama_produk'] ?></h5>
                            <p class="card-text"><?= substr($row['deskripsi'], 0, 50) . '...' ?></p>
                            <p class="price">Rp<?= number_format($row['harga'], 0, ',', '.') ?></p>
                            <div class="d-flex justify-content-between">
                                <a href="edit_produk.php?id=<?= $row['id_produk'] ?>" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</a>
                                <a href="hapus_produk.php?id=<?= $row['id_produk'] ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')"><i class="fas fa-trash"></i> Hapus</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
