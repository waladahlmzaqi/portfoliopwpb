<?php
require '../koneksi.php';
$tb_projek = query("SELECT * FROM tb_projek ORDER BY id DESC");

$tb_datadiri = query("SELECT * FROM tb_datadiri ORDER BY id DESC");


function tambahpesan($post){
    global $conn;
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];
  
    $query = query("INSERT INTO tb_pesan 
    VALUES('','$nama','$email','$pesan')");
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
  }
  
  if (isset($_POST['submit'])) {
      if (tambahpesan($_POST) > 0) {
          header('Location: page.php');
      } else {
          header('Location: page.php>err');
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
                            <a class="nav-link" href="page.php">Home</a>
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
                            <a class="nav-link" href="dashboard/dashboard.php">dashboard</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--  ======================= Navbar ============================== -->

    
    <!--  ======================= Main ================================ -->
    <main class="site-main">

        <!--  ======================= Home =======================  -->
        <section class="site-banner" style="margin-top: -70px;" id="home">
        <?php foreach ($tb_datadiri as $tb_datadiri) { ?>

            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 site-title">
                        <h3 style="font-size: 50px;" class="title-text">Hallo,</h3>
                        <h1 style="font-size: 50px;" class="title-text">I am <?= $tb_datadiri['nama'] ?></h1>
                        <p class="title-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam repellat ratione veniam pariatur corrupti dignissimos quidem nihil ipsa architecto ad iste iusto quas eos quo repellendus labore, voluptatum, esse voluptas?</p>
                        <div class="site-buttons">
                            <div class="d-flex flex-row flex-wrap">
                                <a class="btn btn-secondary me-4" href="#">Hire Me</a>
                                <a class="btn btn-dark" href="#">Get CV</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 banner-image">
                        <img src="<?= $tb_datadiri['img'] ?>" alt="banner-img" class="img-fluid">
                    </div>
                </div>
            </div>

        <?php } ?>
        </section>
        <!--  ======================= Home =======================  -->


        <!--  ========================= About ==========================  -->
        <section class="about-area" id="about">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-image">
                            <img src="../img/about-us.png" alt="About us" class="img-fluid" style="margin-left: -40px;">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12" style="margin-top: 100px;">
                        <h2 class="text-uppercase pt-5">
                            About
                        </h2>
                        <div class="">
                            <p class="card-text">
                            Saya adalah seorang pelajar biasa dari Depok Jawa Barat dan saya bersekolah di SMK Taruna Bhakti.
                            </p>
                            <p class="card-text">
                                Jurusan yang saya pilih adalah RPL. Aktifitas rutin saya yang berhubungan dengan jurusan yaitu membuat tugas yang diberikan atau mengoding untuk membuat web
                            </p>
                            <p class="card-text">
                                Untuk skill saya berada di posisi Frontend yaitu orang yang menguasi html, css, javascript.
                            </p>

                        </div>
                        <a class="btn btn-secondary mt-3" href="profil.php">Profile</a>
                    </div>
                </div>
            </div>
        </section>
        <!--  ========================= About ==========================  -->


        <!--  ======================== Services ==============================  -->
        <div class="container" style="margin-top: 100px;" id="services">
            <p style="font-size: 30px;" class="fw-bold text-center">SERVICES</p>
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis veritatis quasi ut nostrum dignissimos recusandae illo illum corporis voluptatibus obcaecati eos itaque nobis laudantium, inventore, libero odio voluptates reprehenderit. Quam.</p>
        </div>
        <div class="container mt-5">
            <div class="row text-center justify-content-center">
                <div class="col-sm-3">
                  <div class="card shadow">
                    <div class="sevices-img text-center mt-4">
                        <img src="../img/services/s1.png" height="70px">
                    </div>
                    <div class="card-body mt-4">
                      <h6 class="card-title">WP DEVELOPER</h6>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="card shadow">
                    <div class="sevices-img text-center mt-4">
                        <img src="../img/services/s2.png" height="70px">
                    </div>
                    <div class="card-body mt-4">
                      <h6 class="card-title">DESIGN</h6>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="card shadow">
                    <div class="sevices-img text-center mt-4">
                        <img src="../img/services/s3.png" height="70px">
                    </div>
                    <div class="card-body mt-4">
                      <h6 class="card-title">FRONTEND</h6>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="card shadow">
                    <div class="sevices-img text-center mt-4" height="70px">
                        <img src="../img/services/s4.png">
                    </div>
                    <div class="card-body mt-4">
                      <h6 class="card-title">BACKEND</h6>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        <div class="container mt-4">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                  <li class="page-item">
                    <a class="text-decoration-none" href="#">Add More<i class="fas fa-arrow-circle-right ms-2"></i></a>
                  </li>
                </ul>
              </nav>
        </div>
        <!--  ======================== Services ==============================  -->


        <!--  ======================== Skills ==============================  -->
        <div id="skills" class="mt-5">
            <div class="card-body">
                <div class="center"> 
                  <div id="skills"> 
                    <h3 style="font-weight: 300;">SKILLS</h3> 
                    <ul class="ulj"> 
                      <li class="lij">HTML 
                        <span class="center"></span>
                      </li>
                      <div class="box"> 
                        <div id="one">
              
                        </div>
                      </div>
                      <li class="lij">CSS</li>
                      <div class="box"> 
                        <div id="two">
              
                        </div>
                      </div>
                      <li class="lij">JQUERY</li>
                      <div class="box"> 
                        <div id="three">
              
                        </div>
                      </div>
                      <li class="lij">PHP</li>
                      <div class="box"> 
                        <div id="four">
              
                        </div>
                      </div>
                      <li class="lij">MYSQL</li>
                      <div class="box"> 
                        <div id="five">
              
                        </div>
                      </div>
                      </ul> 
                    </div>
                </div>
              </div>
        </div>
        <!--  ======================== Skills ==============================  -->


        <!--  ====================== Project =============================  -->
        <section style="margin-top: 150px;" id="project">
            <div class="container">
                <p style="font-size: 30px;" class="text-uppercase fw-bold">recently project</p>
                <div class="row justify-content-center">
                <?php foreach ($tb_projek as $tb_projek) { ?>

                    <div class="col-sm-3 mt-5">
                    <a href="detail.php?id=<?= $tb_projek['id'] ?>" class="text-decoration-none" style="color: black;">
                    <img src="<?= $tb_projek['img'] ?>" class="card-img-top" width="" height="150px">
                        <div class="card-body">
                          <h5 class="card-title"><?= $tb_projek['nama'] ?></h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </a>
                    </div>

                <?php } ?>
                </div>
            </div>

            <div class="container mt-4">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end">
                      <li class="page-item">
                        <a class="text-decoration-none" href="tambah.php">Add More<i class="fas fa-arrow-circle-right ms-2"></i></a>
                      </li>
                    </ul>
                  </nav>
            </div>
        </section>
        <!--  ====================== Project =============================  -->


        <!--  ========================== Contact ============================  -->
        <section class="text-white" style="margin-top: 100px;" id="contact">
            <div class="container">
                <div class="card-body contact">
                    <h6 class="text-center mt-2" style="font-size: 30px;">Contact.</h6>
                    <div style="margin: -10px auto; background-color: white; width: 130px; height: 4px;"></div>
                    <div class="row justify-content-center" style="margin-top: 60px;">
                        <div class="col-sm-4">
                          <div class="bg-transparent">
                            <div class="card-body">
                                <form>
                                    <div class="mb-3">
                                      <label class="form-label fw-bold">Email</label>
                                      <div style="margin-top: -5px;" class="form-label"><p>Waladahulama.z29@gmail.com</p></div>
                                    </div>
                                    <div class="mb-3">
                                      <label class="form-label fw-bold">Phone</label>
                                      <div style="margin-top: -5px;" class="form-label">+6283896802804</div>
                                    </div>
                                    <div class="mb-3">
                                      <label class="form-label fw-bold">Address</label>
                                      <div style="margin-top: -5px;" class="form-label">Jl.Pekapuran Kp.Babakan Gg.BaitulMuslimin</div>
                                    </div>
                                  </form>
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-5">
                          <div class="bg-transparent">
                            <div class="card-body">
                                <form method="POST">
                                    <div class="mb-3">
                                      <input type="text" class="form-control" placeholder="Name" name="nama">
                                    </div>
                                    <div class="mb-3">
                                      <input type="email" class="form-control" placeholder="Email" name="email">
                                    </div>
                                    <div class="mb-3">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="pesan"></textarea>
                                    </div>
                                    <button class="btn btn-secondary" name="submit">Send</button>
                                </form>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  ========================== Contact ============================  -->


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
                        Copyright ©2021 All rights reserved | Made with by
                        <a href="#"><span style="color: blue">Waladahulama.z</span></a>
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