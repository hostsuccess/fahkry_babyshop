<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin | Fakhry Baby Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .login-container {
            max-width: 400px;
            margin-top: 100px;
        }
    </style>
</head>

<body>

    <div class="container login-container">
        <div class="card shadow">
            <div class="card-header bg-primary text-white text-center py-3">
                <h4 class="mb-0">Fakhry Baby Shop</h4>
            </div>
            <div class="card-body p-4">

                <?php
                if (isset($_GET['pesan'])) {
                    if ($_GET['pesan'] == "gagal") {
                        echo "<div class='alert alert-danger text-center'>Username atau Password salah!</div>";
                    } else if ($_GET['pesan'] == "logout") {
                        echo "<div class='alert alert-success text-center'>Anda telah berhasil logout.</div>";
                    } else if ($_GET['pesan'] == "belum_login") {
                        echo "<div class='alert alert-warning text-center'>Silahkan login untuk mengakses dashboard.</div>";
                    }
                }
                ?>

                <form action="proses_login.php" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required placeholder="Masukkan username">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required placeholder="Masukkan password">
                    </div>
                    <button type="submit" class="btn btn-primary w-100 py-2">Masuk</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>