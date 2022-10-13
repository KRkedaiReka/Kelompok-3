<?php
include 'connect_site.php';

$id = $_POST['id'];
$paket_wisata = @$_POST['paket_wisata'];
$tanggal_berangkat = @$_POST['tanggal_berangkat'];
$toure_guide = @$_POST['toure_guide'];
$kode_booking = @$_POST['kode_booking'];
$user_id = @$_POST['user_id'];

mysqli_query($koneksi, "update form set paket_wisata='$paket_wisata', tanggal_berangkat='$tanggal_berangkat', toure_guide='$toure_guide', kode_booking='$kode_booking', user_id='$user_id' where id='$id'");
header("location:site.php");

?>