<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,700&family=Roboto:ital,wght@1,100&family=Signika+Negative:wght@300;400;500;600;700&family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css" type="text/css">
    <style>
        .font{
            font-family: 'Ubuntu';
        }
        .text-abu{
            color: #B7CADB;
            font-family: 'Ubuntu', monospace;
        }
        .btn-bulat{
            border-radius: 40px !important;
        }
        /* a.kun:hover{color: #557B83;} */
        a.kun:hover{color: #F8B400;}
        .btn-polos:hover{color: #557B83;}
        a.kun:focus{color: #F8B400;}
        button.kun:hover{color: #F8B400;}
        a{
            text-decoration: none !important;
        }
        @media only screen and (max-width: 990px) {
            #side{
                display: none !important;
            }
            #nav{
                width: 100%;
            }
            #navb{
                display: block !important;
                margin-left: 10px !important;
            }
            #log{
                display: block !important;
            }
        }
    </style>
</head>
<body>
    <div class="row">
        <!-- side menu -->
        <div class="col-2 pe-0 shadow" id="side" style="height: 100%; display:block; ">
            <div class="position-relative d-flex" style="border-bottom:1px solid #EEEEEE; height: 60px;">
                <div class="mt-auto mb-auto">
                    <div class="font btn btn-polos mb-1" >Kembali</div>
                    <button class="position-absolute top-0 kun end-0 me-3 mt-2 btn btn-light" onclick="side()"><i class="fa-solid fa-left-long kun text-end"></i></button>
                </div>
            </div>
            <div class="list-group pe-0 list-group-flush" style="height: 100vh;" >
                <button  class="list-group-item text-start kun btn-polos font pt-3 pb-2" onclick="proses()"><i class="fa-solid fa-book"></i> &nbsp;Kelola Proses <small class="text-sm ms-3"><i class="fa-solid fa-chevron-down"></i></small></button>
                <div class="ms-3" id="listbuku" style="display: none;">
                    <a  class="list-group-item text-start kun btn-polos font" href="peminjaman.php"><i class="fa-solid fa-table-list"></i> &nbsp;Peminjaman</a>
                    <a  class="list-group-item text-start kun btn-polos font" href="pengembalian.php"><i class="fa-solid fa-grip"></i> &nbsp;Pengembalian</a>
                </div>
                <button  class="list-group-item text-start kun btn-polos font pt-3 pb-2" onclick="kelola()"><i class="fa-solid fa-book"></i> &nbsp;Kelola<small class="text-sm ms-5"><i class="fa-solid fa-chevron-down"></i></small></button>
                <div class="ms-3" id="kelola" style="display: none;">
                    <a  class="list-group-item text-start kun btn-polos font" href="siswa"><i class="fa-solid fa-table-list"></i> &nbsp;Siswa</a>
                    <a  class="list-group-item text-start kun btn-polos font" href="#"><i class="fa-solid fa-grip"></i> &nbsp;Peminjaman</a>
                    <a  class="list-group-item text-start kun btn-polos font" href="#"><i class="fa-solid fa-grip"></i> &nbsp;Buku</a>
                </div>
            </div>
        </div>

        <div class="col-10 ps-0" id="nav">
            <nav class="navbar navbar-expand-lg navbar-light bg-warning" style="border-bottom:1px solid #EEEEEE; height: 60px;">
                <div class="container-fluid">
                    <a class="navbar-brand font text-light ms-4" id="navb" href="home.php"> Admin</a>
                    <!-- Menu logout saat layar mengecil -->
                    <div class="btn-group" id="log" style="display: none;">
                            <button class="btn btn-polos text-light" type="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                            <i class="fa-solid fa-bars-staggered"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="row">
                                            <div class="col-2 text-abu"><i class="fa-solid fa-user"></i></div>
                                            <div class="col-2 ms-1"><small> Profile</small></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="row">
                                            <div class="col-2 text-abu"><i class="fa-solid fa-gears"></i></div>
                                            <div class="col-2 ms-1"><small> Seting</small></div>
                                        </div>
                                    </a>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <button class="dropdown-item" type="button" >
                                        <div class="row">
                                            <div class="col-2 text-abu"><i class="fa-solid fa-magnifying-glass"></i></div>
                                            <div class="col-2 ms-1"><small> Search data</small></div>
                                        </div>
                                    </button>
                                </li>
                                <li>
                                    <button class="dropdown-item" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                        <div class="row">
                                            <div class="col-2 text-abu"><i class="fa-regular fa-chart-bar"></i></div>
                                            <div class="col-2 ms-1"> <small> Menu kelola</small></div>
                                        </div>
                                    </button>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item" href="logout.php">
                                        <div class="row">
                                            <div class="col-2 text-abu"><i class="fa-solid fa-right-from-bracket"></i></div>
                                            <div class="col-2 ms-1"><small> Logout</small></div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                    </div>
                    <!-- colap navebar -->
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <!-- Menu -->
                        <button class="btn btn-light me-2" id="menu" onclick="hide()" data-bs-toggle="dropdown" type="button"><small><i class="fa-regular fa-chart-bar"></i> Menu</small>
                            <ul class="dropdown-menu m-0 shadow-sm" id="menumini" style="height: 100vh; border-radius: 0; border: none;" >
                                <li><h6 class="dropdown-header">Kelola Data</h6></li>
                                <li><a class="dropdown-item" href="buku.php"><i class="fa-solid fa-book text-warning"></i> Buku</a></li>
                                <li><a class="dropdown-item" href="petugas.php"><i class="fa-solid fa-user text-warning"></i> Petugas</a></li>
                            </ul>
                        </button>
                        <button class="btn btn-light me-2" id="btn-search" onclick="search()" type="button"><small>Search&nbsp; </small><i class="fa-solid fa-magnifying-glass"></i></button>
                        <!-- search -->
                      <li class="nav-item" id="search" style="display: none;">
                        <form class="d-flex input-group" role="search">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-dark" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                      </li>
                    </ul>
                        <!-- menu logout pada layar besar -->
                    <div class="btn-group">
                        <button class="btn btn-polos text-light" type="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                          <i class="fa-solid fa-bars-staggered"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-lg-end">
                          <li>
                            <a class="dropdown-item" href="#">
                                <div class="row">
                                    <div class="col-2 text-abu"><i class="fa-solid fa-user"></i></div>
                                    <div class="col-2 ms-2"><small> Profile</small></div>
                                </div>
                            </a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">
                                <div class="row">
                                    <div class="col-2 text-abu"><i class="fa-solid fa-gears"></i></div>
                                    <div class="col-2 ms-2"><small> Seting</small></div>
                                </div>
                            </a>
                          </li>
                          <li><hr class="dropdown-divider"></li>
                          <li>
                            <a class="dropdown-item" href="../logout.php">
                                <div class="row">
                                    <div class="col-2 text-abu"><i class="fa-solid fa-right-from-bracket"></i></div>
                                    <div class="col-2 ms-2"><small> Logout</small></div>
                                </div>
                            </a>
                          </li>
                        </ul>
                    </div>
                  </div>
                </div>
            </nav>
            <!-- Div penutup hilangkan buat halaman lain -->
        <!-- </div>
    </div> -->
    <script>
        function search(){
            document.getElementById('search').style.display='block'
            document.getElementById('btn-search').style.display='none'
        }
        function side(){
            document.getElementById('side').style.display='none'
            document.getElementById('nav').style.width='100%'
            document.getElementById('menu').style.display='block'
            document.getElementById('navb').style.display='block'
        }
        function proses(){
            if(document.getElementById('listbuku').style.display=='block'){
                document.getElementById('listbuku').style.display='none'
            }else if(document.getElementById('listbuku').style.display=='none'){
                document.getElementById('listbuku').style.display='block'
            }
        }
        function kelola(){
            if(document.getElementById('kelola').style.display=='block'){
                document.getElementById('kelola').style.display='none'
            }else if(document.getElementById('kelola').style.display=='none'){
                document.getElementById('kelola').style.display='block'
            }
        }
        function hide(){
                document.getElementById('menu').style.display='none'
                document.getElementById('navb').style.display='none'
                document.getElementById('menumini').style.display='none'
                document.getElementById('side').style.display='block'
                document.getElementById('nav').style.width='83.4vw'
            }
        if(document.getElementById('side').style.display=='block'){
            document.getElementById('navb').style.display='none'
            document.getElementById('menu').style.display='none'
        }
    </script>
    <script src="../bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>
</body>
</html>