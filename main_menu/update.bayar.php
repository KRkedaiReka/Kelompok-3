<?php
include 'connect_bayar.php';

$email = $_POST['email'];
$kode_bayar = @$_POST['kode_bayar'];

mysqli_query($koneksi, "update form set email='$email', kode_booking='$kode_booking' where id='$id'");
header("location:bayar.php");

?>