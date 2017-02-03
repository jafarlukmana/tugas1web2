 <?php
include "config.php";
$username=$_GET['username'];
$query=mysql_query("delete from user where username='$username'");
if($query){
?><script language="javascript">document.location.href="datauser.php";</script><?php
}else{
echo "gagal hapus data";
}
?>