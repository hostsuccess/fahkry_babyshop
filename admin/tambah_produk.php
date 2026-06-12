<?php
include '../koneksi.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama_produk'];
    $harga = $_POST['harga'];

    // Upload gambar
    $nama_file = $_FILES['gambar']['name'];
    $tmp_file = $_FILES['gambar']['tmp_name'];
    move_uploaded_file($tmp_file, '../img/' . $nama_file);

    $query = "INSERT INTO produk (nama_produk, harga, gambar) VALUES ('$nama', '$harga', '$nama_file')";
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Produk berhasil ditambahkan!'); window.location='tambah_produk.php';</script>";
    }
}
?>



<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Fakhry Baby Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        #sidebar {
            min-width: 250px;
            max-width: 250px;
            min-height: 100vh;
            background: #2b3a4a;
            color: #fff;
        }

        #sidebar .nav-link {
            color: #adb5bd;
            padding: 15px 20px;
        }

        #sidebar .nav-link:hover,
        #sidebar .nav-link.active {
            background: #7ebcf0;
            color: #fff;
        }

        .main-content {
            width: 100%;
            padding: 20px;
        }
    </style>
</head>

<body>

    <div class="d-flex">
        <nav id="sidebar">
            <div class="p-3">
                <h5>Fakhry Baby Shop</h5>
                <hr>
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link active" href="#"><i class="fas fa-home me-2"></i> Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="tambah_produk.php"><i class="fas fa-box me-2"></i> Kelola Produk</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-sign-out-alt me-2"></i> Logout</a></li>
                </ul>
            </div>
        </nav>

        <main class="main-content">
            <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm mb-4 rounded">
                <div class="container-fluid">
                    <span class="navbar-brand mb-0 h1">Dashboard Admin</span>
                </div>
            </nav>

            <div class="container-fluid">
                <div class="row mb-4">
                    <div class="col-md-4">
                        <div class="card text-white bg-primary mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Total Produk</h5>
                                <p class="card-text fs-3">12</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm">
                    <div class="card-header bg-white">
                        <h5 class="mb-0">Tambah Produk</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data">
                            <div class="container">
                                <div class="row mb-3 align-items-center">
                                    <div class="col-sm-2">
                                        <label for="nama_produk" class="col-form-label">Nama Produk:</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" name="nama_produk" class="form-control" placeholder="Nama Produk" required>
                                    </div>
                                </div>

                                <div class="row mb-3 align-items-center">
                                    <div class="col-sm-2">
                                        <label for="harga" class="col-form-label">Harga:</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" name="harga" class="form-control" placeholder="Harga" required>
                                    </div>
                                </div>
                            </div>


                            <input type="file" name="gambar" required><br>
                            <button type="submit" name="submit">Simpan Produk</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>