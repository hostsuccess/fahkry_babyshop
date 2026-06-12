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
                    <li class="nav-item"><a class="nav-link" href="index.php"><i class="fas fa-home me-2"></i> Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link active" href="tambah_produk.php"><i class="fas fa-box me-2"></i> Tambah Produk</a></li>
                </ul>
            </div>
        </nav>

        <main class="main-content">

            <div class="container-fluid">
                <div class="card shadow-sm">
                    <div class="card-header bg-white">
                        <h5 class="mb-0">Tambah Produk</h5>
                    </div>
                    <div class="card-body">
                        <form action="proses.php" method="POST" enctype="multipart/form-data">
                            <div class="container">
                                <div class="row mb-3 align-items-center">
                                    <div class="col-sm-2">
                                        <label for="nama_produk" class="col-form-label">Nama Produk :</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" name="nama_produk" id="nama" class="form-control" placeholder="Nama Produk" required>
                                    </div>
                                </div>

                                <div class="row mb-3 align-items-center">
                                    <div class="col-sm-2">
                                        <label for="harga" class="col-form-label">Harga :</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="number" name="harga" id="harga" class="form-control" placeholder="Harga" required>
                                    </div>
                                </div>

                                <div class="row mb-3 align-items-center">
                                    <div class="col-sm-2">
                                        <label for="kategori" class="col-form-label">Kategori :</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <select name="kategori" id="kategori" class="form-select" required>
                                            <option value="" selected disabled>Pilih Kategori...</option>
                                            <option value="Pakaian">Pakaian</option>
                                            <option value="Mainan Edukatif">Mainan Edukatif</option>
                                            <option value="Perawatan">Perawatan</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3 align-items-center">
                                    <div class="col-sm-2">
                                        <label for="gambar" class="col-form-label">Gambar Produk:</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="file" name="gambar" id="gambar" class="form-control" required>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-4 offset-sm-2">
                                    <button type="submit" name="submit" class="btn btn-primary">Upload</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
    </div>
    </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>