<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Pelanggan</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f4f8; /* Light background */
            color: #333;
            font-family: 'Arial', sans-serif;
        }
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 250px;
            background-color: #343a40;
            padding: 30px 20px;
            color: white;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
        }
        .sidebar a {
            color: #ffffff;
            text-decoration: none;
            margin: 15px 0;
            display: block;
            transition: background 0.3s;
        }
        .sidebar a:hover {
            background-color: #495057;
            border-radius: 5px;
            padding: 10px;
        }
        .container {
            margin-left: 270px;
            margin-top: 50px;
        }
        h3 {
            text-align: center;
            margin-bottom: 30px;
            color: #1976d2; 
            font-weight: bold;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        }
        .table {
            background-color: #ffffff; /* Table background */
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        th {
            background-color: #1976d2; /* Header color */
            color: white;
            text-align: center;
        }
        td {
            text-align: center;
            vertical-align: middle;
        }
        tr:nth-child(even) {
            background-color: #f8f9fa; /* Light grey for even rows */
        }
        tr:hover {
            background-color: #42a5f5; /* Hover color */
            color: white;
        }
        .btn-custom {
            border-radius: 20px; /* Rounded buttons */
        }
        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 10px; /* Space between buttons */
        }
        .card {
            padding: 20px;
            margin: 20px 0;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h5>Menu</h5>
        <a href="tambah_petugas.php"><i class="fas fa-plus-circle"></i> Tambah Petugas</a>
        <a href="tampil_pelanggan.php"><i class="fas fa-users"></i> Tampil Pelanggan</a>
        <a href="#"><i class="fas fa-file-alt"></i> Laporan</a>
        <a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>

    <div class="container">
        <h3>Daftar Pelanggan</h3>
        <div class="card">
            <div class="action-buttons">
                <a href="tambah_pelanggan.php" class="btn btn-primary">Tambah Pelanggan</a>
            </div>
        </div>
        
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">ALAMAT</th>
                        <th scope="col">NO TELEPON</th>
                        <th scope="col">USERNAME</th>
                        <th scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    include "koneksi.php";
                    $qry_pelanggan = mysqli_query($conn, "SELECT * FROM toko_pelanggan");
                    $no = 0;
                    while ($data_pelanggan = mysqli_fetch_array($qry_pelanggan)) {
                        $no++; ?>
                        <tr>
                            <td><?=$no?></td>
                            <td><?=$data_pelanggan['nama']?></td>
                            <td><?=$data_pelanggan['alamat']?></td>
                            <td><?=$data_pelanggan['telp']?></td>
                            <td><?=$data_pelanggan['username']?></td>
                            <td>
                                <div class="action-buttons">
                                    <a href="ubah_pelanggan.php?Id=<?=$data_pelanggan['id_pelanggan']?>" class="btn btn-success btn-sm btn-custom"><i class="fas fa-edit"></i> Ubah</a>
                                    <a href="hapus.php?Id=<?=$data_pelanggan['id_pelanggan']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger btn-sm btn-custom"><i class="fas fa-trash"></i> Hapus</a>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
