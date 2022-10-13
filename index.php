<?php


$username = @$_POST['username'];
$password = @$_POST['password'];
 
/*
echo "<h1> Username = $username </h1><br>";
echo "<h1> Password = $password </h1><br>";

include 'connect.php';
error_reporting(0);
session_start();

if(isset($_SESSION['username'])){
    header("Location: berhasil_login.php");
    }
        if(isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
            $result = mysqli_query($conn, $query);
            if ($result->num_rows>0){
                $row = mysqli_fetch_assoc($result);
                $_SESSION['username'] = $row['username'];
                header("Location: berhasil_login.php");
            } else {
            echo "<script>alert('Username or password incorrect');
            window.location.href='index.php';</script>";
            }
    }*/
?>

<!DOCTYPE html>
<html lang="en">
<html>
    <head>   
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Jateng Trip Official</title>
    </head>
    <body>
        <div class="container">
            <form action="" method="POST" class="login-username">
                <p class="login-text" 
                style="font-size: 2rem; font-weight:800;">Selamat Datang Di Website Jateng Trip</p>
                <p class="login-text" style="font-size: 12; font-weight:500;">Log In Jateng Trip</p>
                <div class="input-group">
                    <input type="username" placeholder="Username" name="username"
                    value="<?php echo $username; ?>">
                </div>
                <div class="input-group">
                    <input type="password" placeholder="Password" name="password"
                    value="<?php echo $password;?>">
                </div>
                <div class="input-group">
                    <a button name="submit" class="btn" href="main_menu/index.php" >Login</a>
                </div>
            </form>
        </div>
    </body>
</html>
