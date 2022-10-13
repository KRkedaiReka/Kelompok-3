<?php

include "connect_form.php";

$nama =@$_POST['nama'];
$no_hp =@$_POST['no_hp'];
$email =@$_POST['email'];
$nik =@$_POST['nik'];
$tanggal_lahir =@$_POST['tanggal_lahir'];
$jumlah_anggota =@$_POST['jumlah_anggota'];
$no_telp_darurat =@$_POST['no_telepon_darurat'];

$sql = "UPDATE `form` SET `nama` = '$nama', `no_hp` = '$no_hp', `email` = '$email', `nik` = '$nik', `tanggal_lahir` = '$tanggal_lahir', `jumlah_anggota` = '$jumlah_anggota', `no_telepon_darurat` = '$no_telepon_darurat' WHERE `form`.`nik` = '$nik'";

if(mysqli_query($connect, $sql)){
	header("location:site.php");
}else{
	echo "gagal";
}

?>