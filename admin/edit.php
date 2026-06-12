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
                    <li class="nav-item"><a class="nav-link active" href="index.php"><i class="fas fa-home me-2"></i> Dashboard</a></li>

                </ul>
            </div>
        </nav>

        <main class="main-content">

            <div class="container-fluid">
                <div class="card shadow-sm">
                    <div class="card-header bg-white">
                        <h5 class="mb-0">Edit Produk</h5>
                    </div>
                    <div class="card-body">
                        <?php
                        $koneksi = mysqli_connect("localhost", "root", "", "fakhry_baby_shop");
                        $id = $_GET['id'];
                        $data = mysqli_query($koneksi, "SELECT * FROM produk WHERE id='$id'");
                        $d = mysqli_fetch_array($data);
                        ?>

                        <form action="proses_edit.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $d['id']; ?>">

                            <div class="row mb-3 align-items-center">
                                <div class="col-sm-2"><label>Nama Produk:</label></div>
                                <div class="col-sm-4">
                                    <input type="text" name="nama_produk" class="form-control" value="<?= $d['nama_produk']; ?>" required>
                                </div>
                            </div>

                            <div class="row mb-3 align-items-center">
                                <div class="col-sm-2"><label>Harga:</label></div>
                                <div class="col-sm-4">
                                    <input type="number" name="harga" class="form-control" value="<?= $d['harga']; ?>" required>
                                </div>
                            </div>

                            <div class="row mb-3 align-items-center">
                                <div class="col-sm-2"><label>Kategori:</label></div>
                                <div class="col-sm-4">
                                    <select name="kategori" class="form-select" required>
                                        <option value="Pakaian" <?= ($d['kategori'] == 'Pakaian') ? 'selected' : ''; ?>>Pakaian</option>
                                        <option value="Mainan Edukatif" <?= ($d['kategori'] == 'Mainan Edukatif') ? 'selected' : ''; ?>>Mainan Edukatif</option>
                                        <option value="Perawatan" <?= ($d['kategori'] == 'Perawatan') ? 'selected' : ''; ?>>Perawatan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3 align-items-center">
                                <div class="col-sm-2"><label>Gambar Baru:</label></div>
                                <div class="col-sm-4">
                                    <input type="file" name="gambar" class="form-control">
                                    <small>Kosongkan jika tidak ingin mengubah gambar.</small><br>
                                    <img src="../img/<?= $d['gambar']; ?>" width="50" class="mt-2">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success">Update Produk</button>
                            <button href="index.php" class="btn btn-secondary">Batal</button>
                        </form>
                    </div>
                </div>
            </div>
    </div>
    </div>
    </div>
    </div>
    </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>