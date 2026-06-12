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
                        <h5 class="mb-0">Daftar Produk</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Gambar</th>
                                    <th>Nama Produk</th>
                                    <th>Harga</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><img src="../img/default.jpg" width="50"></td>
                                    <td>Baju Bayi Katun</td>
                                    <td>Rp 50.000</td>
                                    <td>
                                        <button class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>