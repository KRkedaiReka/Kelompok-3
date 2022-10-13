<?php

include "connect_site.php";

$id = $_GET['id'];

mysqli_query($koneksi,"delete from site where id='$id'");
header("location:site.php");

?>