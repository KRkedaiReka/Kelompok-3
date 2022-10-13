<?php 
include "connect_bayar.php";

$email = @$_POST['email'];
$kode_booking = @$_POST['kode_booking'];


$sql = "INSERT INTO `bayar` (`email`, `kode_booking`) VALUES ('$email', '$kode_booking')";

if (mysqli_query($connect, $sql)) {
    header("location:assest/detail/ending.html");
} else {
    echo "Gagal";
}