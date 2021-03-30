<?php
require '../koneksi.php';

function updatedata($post)
{
    global $conn;
    $id = $_POST['id'];
    $img = $_POST['img'];
    $nama = $_POST['nama'];
    $link = $_POST['link'];
    $library = $_POST['library'];
    $deskripsi = $_POST['deskripsi'];

    $query = "UPDATE tb_projek SET
    img = '$img',
    nama = '$nama',
    link = '$link',
    library = '$library',
    deskripsi = '$deskripsi'
    WHERE id = $id
    ";
    
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

$id = $_GET['id'];
$tb_projek = query("SELECT * FROM tb_projek WHERE id = $id")[0];

if (isset($_POST['submit'])) {
    if (updatedata($_POST) > 0) {
        header('Location: index.php');
    } else {
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>

    <!--  Bootstrap css file  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!--  font awesome icons  -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!--  library css  -->
    <link rel="stylesheet" href="../vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../vendor/owl-carousel/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">

</head>

<body>


    <!--  ======================= Navbar ============================== -->
    <header class="header_area">
        <div class="main-menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#"><img src="../img/logo.png" height="50px" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav" style="margin-left:200px;">
                    <div class="mr-auto"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">about</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#skills">skills</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#project">project</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">data</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--  ======================= Navbar ============================== -->

    
    <!--  ======================= Main ================================ -->
    <main class="site-main">


    <!--  ======================= Editprojek ================================ -->
    <div class="container mt-5">
        <div class="card" style="width:700px; margin: 0px auto;">
          <div class="card-body">
            <h6 class="card-title"><i class="fas fa-bars me-2 mt-2"></i>Tambah Data Tempat Wisata</h6>
          </div><hr style="margin-top: -8px;">
          <div class="card-body">
            <form action="" method="POST">
              <input type="text" class="form-control" name="id" placeholder="masukan nama" hidden value="<?= $tb_projek['id'] ?>">
              <div class="row g-3" style="margin-left: 30px;">
                <div class="col-3">
                  <label class="col-form-label">Nama</label>
                </div>
                <div class="col-8">
                  <input type="text" class="form-control form-control-sm" name="nama" value="<?= $tb_projek['nama'] ?>">
                </div>
              </div>
              <div class="row g-3 mt-1" style="margin-left: 30px;">
                  <div class="col-3">
                    <label class="col-form-label">Link</label>
                  </div>
                  <div class="col-8">
                    <input type="text" class="form-control form-control-sm" name="link" value="<?= $tb_projek['link'] ?>">
                  </div>
              </div>
              <div class="row g-3 mt-1" style="margin-left: 30px;">
                  <div class="col-3">
                    <label class="col-form-label">Library</label>
                  </div>
                  <div class="col-8">
                    <input type="text" class="form-control form-control-sm" name="library" value="<?= $tb_projek['library'] ?>">
                  </div>
              </div>
              <div class="row g-3 mt-1" style="margin-left: 30px;">
                  <div class="col-3">
                    <label class="col-form-label">Gambar</label>
                  </div>
                  <div class="col-8">
                    <input type="text" class="form-control form-control-sm" name="img" value="<?= $tb_projek['img'] ?>">
                  </div>
              </div>
              <div class="row g-3 mt-1" style="margin-left: 30px;">
                  <div class="col-3">
                    <label class="col-form-label">Deskripsi</label>
                  </div>
                  <div class="col-8">
                    <input class="form-control form-control-sm" type="text" name="deskripsi" value="<?= $tb_projek['deskripsi'] ?>">
                  </div>
              </div>
              <div class="row g-3 mt-1" style="margin-left: 30px;">
                <div class="col-auto">
                  <button class="btn btn-primary" name="submit" >Simpan</button>
                </div>
                <div class="col-auto">
                  <a class="btn btn-danger" href="index.php">Kembali</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    <!--  ======================= Editprojek ================================ -->


    </main>
    <!--  ======================= End Main Area ================================ -->


    <!--  ======================= Footer ================================ -->
    <footer class="footer-area">
        <div class="container">
            <div class="">
                <div class="site-logo text-center py-4">
                    <a href="#"><img src="../img/logo.png" alt="logo"></a>
                </div>
                <div class="social text-center">
                    <h5 class="text-uppercase">Follow me</h5>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
                <div class="copyrights text-center">
                    <p class="para">
                        Copyright ©2019 All rights reserved | Made with by
                        <a href="#"><span style="color: blue;">Waladahulama.z</span></a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!--  ======================= Footer ================================ -->



    <!--  Jquery js file  -->
    <script src="../js/jquery.3.4.1.js"></script>
    <!--  Bootstrap js file  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- js library  -->
    <script src="../vendor/isotope/isotope.min.js"></script>
    <script src="../vendor/Magnific-Popup/dist/jquery.magnific-popup.min.js"></script>
    <script src="../vendor/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="../js/main.js"></script>


</body>

</html>