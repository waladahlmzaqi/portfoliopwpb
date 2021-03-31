<?php
require '../../koneksi.php';

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
        header('Location: dashboard.php');
    } else {
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Dashboard &mdash;</title>

  <!-- General CSS Files -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  
  <!-- CSS Libraries -->
  <link rel="stylesheet" href="template/summernote/dist/summernote-bs4.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="template/css/style.css">
  <link rel="stylesheet" href="template/css/components.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline">
          <ul class="navbar-nav me-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
          </ul>
        </form>
        <div class="dropdown dropend">
          <a style="text-decoration: none; font-size: 14px;" class=" fw-bold dropdown-toggle text-white" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
            Hi, Walada Hulama.Z
          </a>
          <!-- <ul class="dropdown-menu" aria-labelledby="">
            <li><button class="dropdown-item" type="button">Profile</button></li>
            <li><button class="dropdown-item" type="button">Setting</button><hr></li>
            <li><button class="dropdown-item" type="button">Profile</button></li>
          </ul> -->
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu2" style="margin-left: 10px;">
            <li><a class="dropdown-item" href="#"><i class="fas fa-user-circle me-3"></i>Profile</a></li>
            <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-3"></i>Setting</a></li>
            <!-- <li><hr class="dropdown-divider"></li> -->
            <li><a class="dropdown-item" href="admin/logout.php"><i class="fas fa-sign-out-alt me-3"></i>Logout</a></li>
          </ul>
        </div>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Portfolio<sup>Admin</sup></a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">PA</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li class="nav-item dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                  <li class="active"><a class="nav-link" href="dashboard.php">Dashboard</a></li>
                </ul>
              </li>
              <li class="menu-header">Admin</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-server"></i><span>Data</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="dashboard.php">Profile</a></li>
                </ul>
              </li>
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
          </div>
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
                                <a class="btn btn-danger" href="dashboard.php">Kembali</a>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            <!--  ======================= Editprojek ================================ -->
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2021 <div class="bullet"></div> Design By <a href="https://github.com/waladahlmzaqi">Walada Hulama.Z</a>
        </div>
        <!-- <div class="footer-right">
          
        </div> -->
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="template/js/stisla.js"></script>

  <!-- Template JS File -->
  <script src="template/js/scripts.js"></script>

  <!-- Page Specific JS File -->
</body>
</html>
