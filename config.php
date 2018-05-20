<?php
//variabel konfigurasi database
  $host   = 'localhost';
  $user   = 'root';
  $pass  = '';
  $dbname  = 'login';
// konekan ke database
$conn = mysql_connect($host,$user,$pass) or die('gagal konek ke database!');
// pilih database
$db   = mysql_select_db($dbname) or die('gagal!');
?>