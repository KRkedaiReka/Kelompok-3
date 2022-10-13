

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Pemesanan Tiket Trip</title>
    <link rel="stylesheet" href="styles.css" />
</head>

<body>
<?php
    include 'connect_bayar.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "select * from bayar where id='$id'");
    while($d = mysqli_fetch_array($data)){}
        ?>
    <div class="bg_site">
        <h1>Pembayaran Tiket Trip</h1>
        <p>Silahkan melakukan pembayaran untuk membooking tiket anda</p>
        <form method="POST" action="input.php">
            <fieldset>
                <label for="email">Email: <input id="email" name="email" type="email" required /></label>
                <label for="kode_booking">Kode Booking: <input id="kode_booking" name="kode_booking" type="text" required/></label>
            </fieldset>
            <fieldset>
                <label for="bank">Pilihan Pembayaran: </label>
                <label for="bank"><input id="bank" type="radio" name="bank" class="inline" /> BRI</label>
                <label for="bank"><input id="bank" type="radio" name="bank" class="inline" /> BNI</label>
                <label for="bank"><input id="bank" type="radio" name="bank" class="inline" /> BTN</label>
                <label for="bank"><input id="bank" type="radio" name="bank" class="inline" /> MANDIRI</label>
                <label for="bank"><input id="bank" type="radio" name="bank" class="inline" /> OTHER</label>
            </fieldset>
            <input type="submit" value="Submit" />
        </form>
    </div>
</body>

<style>
    body {
        width: 100%;
        height: 100vh;
        margin: 0;
        background: url(https://www.befreetour.com/img/produk/yogyakarta-borobudur-sunrise-and-prambanan-temple-tour/yogyakarta-borobudur-sunrise-and-prambanan-temple-tour_2ecdedf9ec0e9e272a20cef4e235b3db1e2da1e1.jpg);
        color: #f5f6f7;
        font-family: Tahoma;
        font-size: 16px;
    }
    
    .bg_site {
        background-color: rgba(248, 143, 143, 0.5);
        width: 60vw;
        margin: auto;
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