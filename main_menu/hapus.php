<?php

include "connect_form.php";

$nik = $_GET['nik'];

mysqli_query($koneksih, "DELETE from form where nik='$nik'");
header("location:data.php");

?>