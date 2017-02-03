 <?php
      include "config.php"; 
      $username = $_POST['username'];
      $password = $_post['password']
      $level = $_POST['level'];
      $nama = $_POST['nama']
      $jenis_kelamin = $_POST['jenis_kelamin'];
      $alamat = $_POST['alamat'];
      $telepon = $_POST['telepon'];
      $simpan = mysql_query("Insert Into user values('$username','$password','$level','$nama','$jenis_kelamin','$alamat','$telepon')");
      header('location:datauser.php');
?>