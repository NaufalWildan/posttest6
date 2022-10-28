<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "web_p5";
$db = mysqli_connect($hostname,$username,$password,$database);
if(!$db){
  echo "Koneksi tidak terhubung";
}
?>