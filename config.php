<?php
	$host="localhost";
	$user="root";
	$password="";	
	$koneksi=mysql_connect($host,$user,$password) or 
	die("Koneksi database gagal");
	mysql_select_db("db_sistempakar");
?>