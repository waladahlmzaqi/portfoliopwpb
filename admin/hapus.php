<?php
require '../koneksi.php';

function deletedata($id)
{
    global $conn;
    $query = "DELETE FROM tb_projek WHERE id = $id";
    
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

if (isset($_GET['id'])) {
    if (deletedata($_GET['id'])>0) {
        echo "<script>alert('Data yang anda Hapus Sukses');window.location='index.php'</script>";
    }else{
        header('Location: index.php?err');
    }
}
?>