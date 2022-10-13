<?php

include "connect_bayar.php";

$id = $_GET['id'];

mysqli_query($koneksi,"delete from bayar where id='$id'");
header("location:bayar.php");

?>