<?php
require '../koneksi.php';
$id = $_GET['id'];
$tb_projek = query("SELECT * FROM tb_projek WHERE id = $id")[0];
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


    <!--  ======================= Detailprojek ================================ -->
    <div class="container" style="margin-top:70px;">
        <div class="">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-6">
                <div class="">
                  <div class="card-body text-center">
                    <img src="<?= $tb_projek['img'] ?>" class="card-img-top" style="max-width: min-content;">
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="">
                  <div class="card-body">
                    <label hidden><?= 1 ?></label>
                      <div class="row g-3 align-items-center mb-3">
                        <div class="col-4">
                          <label class="col-form-label"><h6>Nama : </h6></label>
                        </div>
                        <div class="col-7">
                          <label class="col-form-label"><h6 class="fw-light"><?= $tb_projek['nama'] ?></h6></label>
                        </div>
                      </div>
                      <div class="row g-3 align-items-center mb-3" style="margin-top: -45px;">
                        <div class="col-4">
                          <label class="col-form-label"><h6>Library : </h6></label>
                        </div>
                        <div class="col-7">
                          <label class="col-form-label"><h6 class="fw-light"><?= $tb_projek['library'] ?></h6></label>
                        </div>
                      </div>
                      <div class="row g-3 align-items-center mb-3" style="margin-top: -45px;">
                        <div class="col-4">
                          <label hidden class="col-form-label"><h6>Link Projek : </h6></label>
                        </div>
                        <div class="col-7" style="margin-top:px;">
                          <a href="<?= $tb_projek['link'] ?>" class="text-decoration-none col-form-label">Link Project</a>
                        </div>
                      </div>
                        <a href="dashboard.php" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-left me-2"></i>Kembali</a>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="">
                  <div class="card-body">
                    <h6 class="mt-3">Deskripsi :</h6>
                    <div><?= $tb_projek['deskripsi'] ?></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!--  ======================= Detailprojek ================================ -->


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