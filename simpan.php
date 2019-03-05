<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$tgl           =$_POST['tanggal'];
$ls            = $_POST['lembarseratus'];
$ll            = $_POST['lembarlimapuluh'];
$ld            = $_POST['lembarduapuluh'];
$lsp           = $_POST['lembarsepuluh'];
$llm           = $_POST['lembarlima'];
$ldu           = $_POST['lembardua'];
$lsu           = $_POST['lembarsatu'];
$ms            = $_POST['logamseribu'];
$ml            = $_POST['logamlimaratus'];
$md            = $_POST['logamduaratus'];
$mss            = $_POST['logamseratus'];
$mls            = $_POST['logamlimapuluh'];
$mda            = $_POST['logamdualima'];
// query SQL untuk insert data
$mysqli="INSERT INTO uangdasa (tanggal,lembarseratus,lembarlimapuluh,lembarduapuluh,lembarsepuluh,lembarlima,lembardua,
lembarsatu,logamseribu,logamlimaratus,logamduaratus,logamseratus,logamlimapuluh,logamdualima)
VALUES ('$tgl','$ls','$ll','$ld','$lsp','$llm','$ldu','$lsu','$ms','$ml','$md','$mss','$mls','$mda')";
$result = mysqli_query($conn, $mysqli);
// mengalihkan ke halaman index.php                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
header("location:/dasa/index.html");
echo "input berhasil";

mysqli_close($conn);
?>