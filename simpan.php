<html>
<head><title>Sistem Pakar</title>
</head>
 <?php
include "config.php";
$id=$_POST['usename'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];

$query=mysql_query("update user set nama='$nama', alamat='$alamat' where username='$username'");
if($query){
header ('location:datauser.php');
?> 
<?php
}else{
echo "Gagal update data";
echo mysql_error();
}
?>