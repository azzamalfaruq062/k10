<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        .card-polos{
            border: none;
            background-color: white !important;
        }
        .btn-bulat{
            border-radius: 40px !important;
        }
    </style>
</head>
<body class="bg-warning">
    <?php include 'inisiasi.php'?>
    <div class="container">
      <div class="card shadow mx-auto my-5">
        <div class="card-body text-center">
        <h1 class="text-center mb-0 pb-0">Welcome !</h1>
        <div class="card-group">
            <h5></h5>
            <div class="card" style="border: none;">
                <div class="mt-5 d-flex justify-content-center">
                    <img class="" src="assets/img/officer.jpg" style="width: 70%;" alt="">
                </div>
                <div class="card-body">
                <h5 class="card-title mt-2">
                    <a href="login_admin.php">
                        <button class="btn btn-warning btn-bulat text-light shadow">Petugas</button>
                    </a>
                </h5>
                <p class="card-text">Manajemen semua data yang ada dalam database, Melayani Peminjaman dan Pengembalian</p>
                </div>
                <div class="card-footer me-1" style="background-color: white;">
                <small class="text-muted">Login sebagai petugas</small>
                </div>
            </div>
            <div class="card" style="border: none;">
                <div class="d-flex justify-content-center">
                    <img class="" src="assets/img/siswa.jpg" style="width: 70%;" alt="">
                </div>
                <div class="card-body">
                <h5 class="card-title">
                    <a href="login_siswa.php">
                        <button class="btn btn-warning btn-bulat text-light shadow">Siswa</button>
                    </a>
                </h5>
                <p class="card-text">Melihat list buku dalam perpustakaan, Memilih dan meminjam Buku, Melihat history peminjaman yang telah dilakukan</p>
                </div>
                <div class="card-footer card-polos ms-1 ">
                    <small class="text-muted">Login sebagai siswa</small>
                </div>
            </div>
        </div>
          <!-- <h5>Login sebagai?</h5>
          <a href="index1.php" class="btn btn-outline-primary">Petugas</a>
          <a href="index2.php" class="btn btn-outline-info">Siswa</a> -->
        </div>
      </div>
    </div>

    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
