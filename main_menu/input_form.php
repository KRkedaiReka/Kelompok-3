<?php 
include "connect_form.php";

$nama =@$_POST['nama'];
$no_hp =@$_POST['no_hp'];
$tanggal_lahir =@$_POST['tanggal_lahir'];
$email =@$_POST['email'];
$no_telepon_darurat =@$_POST['no_telepon_darurat'];
$jumlah_anggota =@$_POST['jumlah_anggota'];
$nik =@$_POST['nik'];


$sql = "INSERT INTO `form` (`nama`, `no_hp`, `tanggal_lahir`, `email`, `no_telepon_darurat`, `jumlah_anggota`, `nik`) VALUES ('$nama', '$no_hp', '$tanggal_lahir', '$email', '$no_telepon_darurat', '$jumlah_anggota', '$nik')";

if (mysqli_query($connect,$sql)) {
    header("location:data.php?nik=$nik");
}else{
    echo "Gagal";
}
?>