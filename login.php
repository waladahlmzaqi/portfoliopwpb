<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    
    <title>Hello, world!</title>
    <style>
       .card-header h6{
          font-size: 25px;
          text-align: center;
          font-family: 'Roboto', sans-serif;
       }
       .card{
          margin: 120px auto;
          width: 600px;
          height: auto;
       }
       .card-header{
         height: 100px;
       }
       .card-header p{
         font-size: 25px;
         font-weight: 500;
         margin-top: 40px;
       }
       #log{
         width: 80px;
         height: 80px;
         background-color: rgb(96, 96, 255);
         margin: -40px auto;
       }
       #log i{
         font-size: 50px;
         margin: 12px 18px;
       }
    </style>
  </head>
  <body>
    <div class="container-fluid">
        <div class="card">
           <div class="card-header text-center">
              <div id="log" class="rounded-pill">
               <i class="fas fa-user-secret text-white"></i>
              </div>
              <p class="">Login</p>
           </div>
           <br>
            <?php 
              if(isset($_GET['pesan'])){
                if($_GET['pesan'] == "gagal"){
                  echo "Login gagal! username dan password salah! <br>";
                }else if($_GET['pesan'] == "logout"){
                  echo "Anda telah berhasil logout <br>";
                }else if($_GET['pesan'] == "belum_login"){
                  echo "Anda harus login untuk mengakses halaman admin <br>";
                }
              }
            ?>
         <form method="post" action="ceklogin.php">
          <div class="card-body mt-3">
            <div class="row g-3 align-items-center mb-3">
              <div class="col-4">
                <label class="col-form-label ps-5">Username</label>
              </div>
              <div class="col-7">
                <input name="username" type="text" class="form-control">
              </div>
            </div>
            <div class="row g-3 align-items-center">
              <div class="col-4">
                <label class="col-form-label ps-5">Password</label>
              </div>
              <div class="col-7">
                <input name="password" type="password" class="form-control">
              </div>
            </div>
            <div class="row g-3 align-items-center mt-3">
              <div class="col-4">
                <button type="submit" class="btn btn-sm btn-primary ms-5"><i class="fas fa-sign-in-alt me-2 text-white"></i>Login</button>
              </div>
            </div>
          </div>
         </form>
         <div class="card-footer">
          <a href="#" class="text-decoration-none">Buat Akun?</a>
         </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  </body>
</html>