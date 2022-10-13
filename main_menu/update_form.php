<?php
include 'connect_form.php';

$id = $_POST['id'];
$nama = @$_POST['nama'];
$no_hp = @$_POST['no_hp'];
$tanggal_lahir = @$_POST['tanggal_lahir'];
$email = @$_POST['email'];
$no_telepon_darurat = @$_POST['no_telepon_darurat'];
$jumlah_anggota = @$_POST['jumlah_anggota'];
$nik = @$_POST['nik'];

mysqli_query($koneksi, "update form set nama='$nama', no_hp='$no_hp', tanggal_lahir='$tanggal_lahir', email='$email', no_telepon_darurat='$no_telepon_darurat', jumlah_anggota='$jumlah_anggota', nik='$nik where id='$id'");
header("location:form.php");

?>