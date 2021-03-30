<?php
include 'koneksi.php';
 
// menyimpan data id kedalam variabel
$id= $_GET['id'];
// query SQL untuk delete data
$query="DELETE from tb_projek where id='$id'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
echo "<script>alert('Data yang anda Hapus Sukses');window.location='index.php'</script>";
?>