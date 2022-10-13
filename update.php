<?php
include 'Connect.php';

$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];

mysqli_query($sql, "update akun_google set username='$username', password='$password', Email='$email', Pasword='$pasword' where id='$id'");
header("location:index.php");



/*session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
*/
?>

<!DOCTYPE html>
<!--
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Berhasil Login</title>
</head>
<body>
    <div class="container-oke">
        <form action="" method="POST" class="login-username">
            <?php /*echo "<h1>Selamat Datang di Website JATENG TRIP</h1>"*/ ?>
            <div class="input-group">
                <a href="oke.php" class="btn">OK</a>
            </div>
        </form>
    </div>
</body>
-->