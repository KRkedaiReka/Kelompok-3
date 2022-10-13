<?php

include "connect_form.php";

$id = $_GET['id'];

mysqli_query($koneksi,"delete from form where id='$id'");
header("location:form.php");

?>