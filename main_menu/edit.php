<?php
include "connect_form.php";
$nik = $_GET['nik'];
$data = mysqli_query($connect, "SELECT * from form where nik='$nik'");
?>

		<form method="POST" action='edit_proses.php'>
<table>
<?php
while($d =mysqli_fetch_array($data)){
?>
      <fieldset>
        <label for="nama">Nama Lengkap: <input id="nama" name="nama" type="text" alue="<?php echo $d['nama']; ?>" required /></label>
                <label for="no_hp">No Hp aktif: <input id="no_hp" name="no_hp" type="text" alue="<?php echo $d['no_hp']; ?>" required /></label>
                <label for="email">Email: <input id="email" name="email" type="email" alue="<?php echo $d['email']; ?>" required /></label>
                <label for="nik">NIK: <input id="nik" name="nik" type="text" alue="<?php echo $d['nik']; ?>" required/></label>
                <label for="tanggal_lahir">Tanggal Lahir: <input id="tanggal_lahir" name="tanggal_lahir" type="date" alue="<?php echo $d['tanggal_lahir']; ?>" required/></label>
                <label for="jumlah_anggota">Jumlah Anggota: <input id="jumlah_anggota" name="jumlah_anggota" type="text" alue="<?php echo $d['jumlah_anggota']; ?>" required/></label>
                <label for="no_telepon_darurat">No Telp Darurat (Opsional): <input id="no_telepon_darurat" name="no_telp_darurat" type="text" alue="<?php echo $d['no_telepon_darurat']; ?>" /></label>
      </fieldset>
<?php
}?>
      <input type="submit" value="Submit"/>
</table>
</from>