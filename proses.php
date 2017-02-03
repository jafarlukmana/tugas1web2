 <?php
include "config.php";
$query = "SELECT * FROM gejala WHERE id_gejala = '$id_gejala'";

$query=mysql_query("update user set nama='$nama', alamat='$alamat' where username='$username'");
if($query){
header ('location:konsultasi.php');
?> 
<?php
}else{
echo "Gagal update data";
echo mysql_error();
}
?>