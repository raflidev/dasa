<?php
// konfigurasi database
$host       =   "localhost";
$user       =   "root";
$password   =   "";
$database   =   "webdasa";
// perintah php untuk akses ke database
$conn = mysqli_connect($host, $user, $password, $database) or die ("Koneksi gagal");

?>