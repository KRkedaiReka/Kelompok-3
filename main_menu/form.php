<?php
include 'connect_form.php'; 

$nama = @$_POST['nama'];
$no_hp = @$_POST['no_hp'];
$tanggal_lahir = @$_POST['tanggal_lahir'];
$email = @$_POST['email'];
$no_telepon_darurat = @$_POST['no_telepon_darurat'];
$jumlah_anggota = @$_POST['jumlah_anggota'];
$nik = @$_POST['nik'];
 
?>


<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Pemesanan Tiket Trip</title>
    </head>

    <body class=".latar">
        <h1>Pemesanan Tiket Trip</h1>
        <p>Silahkan mengisi form berikut untuk melakukan transaksi</p>
        <form method="POST" action="input_form.php">
            <fieldset>
                <label for="nama">Nama Lengkap: <input id="nama" name="nama" type="text" required /></label>
                <label for="no_hp">No Hp aktif: <input id="no_hp" name="no_hp" type="text" required /></label>
                <label for="email">Email: <input id="email" name="email" type="email" required /></label>
                <label for="nik">NIK: <input id="nik" name="nik" type="text" required/></label>
                <label for="tanggal_lahir">Tanggal Lahir: <input id="tanggal_lahir" name="tanggal_lahir" type="date" required/></label>
                <label for="jumlah_anggota">Jumlah Anggota: <input id="jumlah_anggota" name="jumlah_anggota" type="text" required/></label>
                <label for="no_telp_darurat">No Telp Darurat (Opsional): <input id="no_telp_darurat" name="no_telp_darurat" type="text" /></label>
            </fieldset>
            <input type="submit" value="Submit" />
        </form>
    </body>

    <style>
        body {
            width: 100%;
            height: 100vh;
            margin: 0;
            background-color: #1b1b32;
            color: #f5f6f7;
            font-family: Tahoma;
            font-size: 16px;
        }
        
        .latar {
            margin-top: -120px;
            background: url(https://balijavaholidays.com/wp-content/uploads/2020/12/dieng-telaga-warna.jpg) no-repeat;
            background-size: cover;
            padding-top: 111px;
            height: 638px;
            max-height: 1112px;
        }
        
        h1,
        p {
            margin: 1em auto;
            text-align: center;
        }
        
        form {
            width: 60vw;
            max-width: 500px;
            min-width: 300px;
            margin: 0 auto;
            padding-bottom: 2em;
        }
        
        fieldset {
            border: none;
            padding: 2rem 0;
            border-bottom: 3px solid #3b3b4f;
        }
        
        fieldset:last-of-type {
            border-bottom: none;
        }
        
        label {
            display: block;
            margin: 0.5rem 0;
        }
        
        input,
        textarea,
        select {
            margin: 10px 0 0 0;
            width: 100%;
            min-height: 2em;
        }
        
        input,
        textarea {
            background-color: #0a0a23;
            border: 1px solid #0a0a23;
            color: #ffffff;
        }
        
        .inline {
            width: unset;
            margin: 0 0.5em 0 0;
            vertical-align: middle;
        }
        
        input[type="submit"] {
            display: block;
            width: 60%;
            margin: 1em auto;
            height: 2em;
            font-size: 1.1rem;
            background-color: #3b3b4f;
            border-color: white;
            min-width: 300px;
        }
        
        input[type="file"] {
            padding: 1px 2px;
        }
    </style>

    </html>