<?php

/*$koneksi = mysqli_connect("localhost","kedaireka1","+zh1)3hM*y]8bepQ","id19679768_kedaireka1");

if (mysqli_connect_errno()){
    echo "Koneksi database gagal:".mysqli_connect_error();
}*/
$server="localhost";
$user="kedaireka1";
$pass="+zh1)3hM*y]8bepQ";
$database="id19679768_kedaireka1";

$conn = mysqli_connect($server, $user, $pass, $database);
if (!$conn){
    die ("<script>alert('Koneksi database gagal')</script>");
}

?>
// Create connection