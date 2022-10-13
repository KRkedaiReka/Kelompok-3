<?php

include "Connect.php";

$id = $_GET['id'];

mysqli_query($koneksi,"delete from akun_google where id='$id'");
header("location:index.php");

?>