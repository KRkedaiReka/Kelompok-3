<?php
include "connect_form.php";
$nik = $_GET['nik'];
$data = mysqli_query($connect, "SELECT * from form where nik=$nik");
while($d =mysqli_fetch_array($data)){
?>
  <tr>
  	<td><?php echo $d['nama']; ?></td>
    <td><?php echo $d['no_hp']; ?></td>
    <td><?php echo $d['tanggal_lahir']; ?></td>
  	<td><?php echo $d['email']; ?></td>
  	<td><?php echo $d['no_telepon_darurat']; ?></td>
  	<td><?php echo $d['jumlah_anggota']; ?></td>
  	<td><?php echo $d['nik']; ?></td>
  	<td><a href="edit.php?id=<?php echo $d['nik']; ?>">Edit</a></td>
  	<td><a href="hapus.php?id=<?php echo $d['nik']; ?>"onClick="return confirm('Are You SURE Kawan?')">Hapus</a></td>
  	<td><a href="site.php?id=<?php echo $d['nik']; ?>">Lanjut Bayar???</a></td>
  </tr>
<?php
}
?>