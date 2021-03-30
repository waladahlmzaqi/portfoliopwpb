<?php
$server = "localhost";
$user = "root";
$password = "";
$database  = "db_portfolio";
$conn = mysqli_connect($server, $user, $password, $database);


function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $data = [];
    while ($isi = mysqli_fetch_assoc($result)) {
        $data[] = $isi;
    }
    return $data;
}
?>