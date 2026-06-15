<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Fakhry Baby Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

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
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-shopping-cart me-2"></i> Pesanan</a></li>
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
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Total : </h5>

                                <?php
                                // include '../koneksi.php'; // Pastikan path ini benar sesuai struktur folder Anda
                                // Pastikan koneksi sudah di-include
                                $koneksi = mysqli_connect("localhost", "root", "12345678", "fakhry_baby_shop");
                                // Query untuk menghitung jumlah baris di tabel produk
                                $query = mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM produk");
                                $data = mysqli_fetch_assoc($query);
                                $total_produk = $data['total'];
                                ?>
                                <p class="card-text fs-3 fw-bold"><?= $total_produk; ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm">
                    <div class="card-header bg-white">
                        <h5 class="mb-0">Daftar Produk</h5>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-hover" id="myTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Gambar</th>
                                    <th>Nama Produk</th>
                                    <th>Harga</th>
                                    <th>Kategori</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $no = 1;
                                $data = mysqli_query($koneksi, "SELECT * FROM produk"); // Sesuaikan nama tabel
                                while ($row = mysqli_fetch_array($data)) {
                                ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><img src="../img/<?= $row['gambar']; ?>" width="50" class="img-thumbnail"></td>
                                        <td><?= $row['nama_produk']; ?></td>
                                        <td>Rp <?= number_format($row['harga'], 0, ',', '.'); ?></td>
                                        <td><?= $row['kategori']; ?></td>
                                        <td>
                                            <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                            <a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>



                    <script>
                        $(document).ready(function() {
                            $('#myTable').DataTable();
                        });
                    </script>
                </div>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>