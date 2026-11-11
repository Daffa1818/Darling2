<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Penjual | Radar Pedagang Keliling</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
</head>

<body class="hold-transition register-page">

<div class="register-box" style="width: 480px;">

    <div class="register-logo">
        <b>Radar</b> Pedagang
    </div>

    <div class="card card-info">

        <div class="card-header">
            <h3 class="card-title">
                <i class="fas fa-user-plus mr-2"></i>
                Registrasi Penjual
            </h3>
        </div>

        <form method="POST" action="#">

            <div class="card-body">

                <div class="form-group">
                    <label>Nama Penjual</label>
                    <input type="text"
                           name="nama"
                           class="form-control"
                           placeholder="Masukkan nama lengkap"
                           required>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email"
                           name="email"
                           class="form-control"
                           placeholder="Masukkan email"
                           required>
                </div>

                <div class="form-group">
                    <label>Nomor HP</label>
                    <input type="text"
                           name="no_hp"
                           class="form-control"
                           placeholder="Masukkan nomor HP"
                           required>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password"
                           name="password"
                           class="form-control"
                           placeholder="Buat password"
                           required>
                </div>

                <div class="form-group">
                    <label>Konfirmasi Password</label>
                    <input type="password"
                           name="konfirmasi_password"
                           class="form-control"
                           placeholder="Ulangi password"
                           required>
                </div>

            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-info">
                    Daftar Sekarang
                </button>

                <a href="<?php echo site_url('penjual/login'); ?>"
                   class="btn btn-default float-right">
                    Kembali Login
                </a>
            </div>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

</body>
</html>