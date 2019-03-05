<?php
// konfigurasi database
$host       =   "localhost";
$user       =   "root";
$password   =   "";
$database   =   "webdasa";
// perintah php untuk akses ke database
$conn = mysqli_connect($host, $user, $password, $database) or die ("Koneksi gagal");
$query = mysqli_query($conn,"SELECT * FROM saran");
//masukin
$nama = $_POST["nama"];
$isi = $_POST["isi"];
if($nama == ""){
	header("location:index.php?nama=kosong");
}if($isi == ""){
    header("location:index.php?isi=kosong");
}else{
    echo "";
}
$mysqli = "INSERT INTO saran (nama,isi) VALUES ('$nama','$isi')";
$result = mysqli_query($conn , $mysqli);

echo "<p>Terimakasih untuk Saran anda</p>";
echo "<a href='/dasa/index.html'>Kembali!</a> ";
?>