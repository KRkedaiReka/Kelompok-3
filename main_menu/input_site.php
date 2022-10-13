<?php 
include "connect_site.php";

$paket_wisata = @$_POST['paket_wisata'];
$tanggal_berangkat = @$_POST['tanggal_berangkat'];
$tour_guide = @$_POST['tour_guide'];
$kode_booking = @$_POST['kode_booking'];
$nik = @$_POST['nik'];


$sql = "INSERT INTO site (paket_wisata, tanggal_berangkat, tour_guide, kode_booking, nik) VALUES ('$paket_wisata', '$tanggal_berangkat', '$tour_guide', '$kode_booking', '$nik')";

if (mysqli_query($connect, $sql)) {
    header("location:input_site.php");
} else {
    echo "Gagal";
}
?>