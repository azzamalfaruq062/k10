<?php
include 'config.php';
session_start();
if (!$_SESSION['nip']) {
  header('location:index.php');
  exit;
}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <title>Data Buku</title>
  </head>
  <body>
    <div class="">
      <nav class="navbar navbar-expand-lg" style="background-color: #FFCB42">
        <div class="container-fluid">
          <a class="navbar-brand" href="home.php">Perpustakaan 10</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="data_bk.php">Data Buku</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li> -->
            </ul>
            <a href="logout.php" class="btn btn-outline-danger">Logout</a>
            <!-- <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->
          </div>
        </div>
      </nav>
    </div>

    <div class="container mt-5">
      <a href="create_bk.php" class="btn btn-outline-primary">Tambah Data</a>
      <table class="table table-bordered table-hover mt-3">
        <thead>
          <tr>
            <th>ID Buku</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun</th>
            <th>Cover</th>
            <th>Stok</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
            <?php
            $ambil = mysqli_query($conn, "SELECT * FROM buku");
            while($data = mysqli_fetch_array($ambil)){
                ?>
                <tr>
                    <td><?= $data['id_buku']?></td>
                    <td><?= $data['judul']?></td>
                    <td><?= $data['penulis']?></td>
                    <td><?= $data['penerbit']?></td>
                    <td><?= $data['tahun']?></td>
                    <td> <img src="assets/img/<?= $data['cover']?>" alt="" style="width:100px"> </td>
                    <td><?= $data['stok']?></td>
                    <td colspan="2">
                      <a href="read_bk.php?id_buku=<?= $data['id_buku']; ?>" class="btn btn-outline-success" style="border-radius:50px">Detail</a>
                      <a href="update_bk.php?id_buku=<?= $data['id_buku']; ?>" class="btn btn-outline-warning" style="border-radius:50px">Edit</a>
                      <a href="delete_bk.php?id_buku=<?= $data['id_buku']; ?>" class="btn btn-outline-danger" style="border-radius:50px">Hapus</a>
                    </td>
                </tr>
            <?php
            }
            ?>
          </tr>
        </tbody>
      </table>
    </div>

    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
