<html>
<head><title>Sistem Pakar</title>
</head>
 <?php
include "config.php";
$query=mysql_query("select * from user");
$jumlah=mysql_num_rows($query);
echo "Jumlah data ada : ".$jumlah;
?>
<table align="center" style='width:70%' border="1" cellspacing="0">
<tr>
<th>username</th>
<th>Level</th>
<th>Nama</th>
<th>Jenis Kelamin</th>
<th>Alamat</th>
<th>Telepon</th>
<th>Aksi</th>
</tr>

<?php
while($row=mysql_fetch_array($query)){
?>
<tr>
<td><?php echo $row['username'];?></td>
<td><?php echo $row['level'];?></td>
<td><?php echo $row['nama'];?></td>
<td><?php echo $row['jenis_kelamin'];?></td>
<td><?php echo $row['alamat'];?></td>
<td><?php echo $row['telepon'];?></td>
<td>
<a href="hapus.php?usename=<?php echo $row['username']; ?>" onclick="return confirm('Apakah anda
yakin?')">hapus</a>
<a href="update.php?username=<?php echo $row['username']; ?>">edit</a>
</td>
<?php
}
?>
</table><br />
<a href="tambah.php">Tambah Data</a><br><br>