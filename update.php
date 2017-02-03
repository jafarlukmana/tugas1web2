<html>
<head><title>Sistem Pakar</title>
</head>
 <?php
include "config.php";
$username=$_GET['username'];
$query=mysql_query("select * from user where username='$username'");
?>
<form action="simpan.php" method="post">
<table border="1">
<?php
while($row=mysql_fetch_array($query)){
?>
<input type="hidden" name="username" value="<?php echo $username;?>"/>
<tr>
<td>Nama</td><td><input type="text" name="nama" value="<?php echo $row['nama'];?>" /></td>
</tr>
<tr>
<td>Alamat</td>
<td><textarea cols="20" rows="5" name="alamat"><?php echo $row['alamat'];?></textarea></td>
</tr>
<tr><td><input type="submit" value="Simpan" name="simpan" /></td>
</tr>
<?php
}
?>
</table>
</form>