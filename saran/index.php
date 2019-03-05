<?php 
	if(isset($_GET['nama'])){
		if($_GET['nama'] == "kosong"){
			echo "<h4 style='color:red'>Nama Belum Di Masukkan !</h4>";
		}
    }
    if(isset($_GET['isi'])){
		if($_GET['isi'] == "kosong"){
			echo "<h4 style='color:red'>Isi Belum Di Masukkan !</h4>";
		}
    }
	?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Kotak Saran</title>
</head>
<body>
    <div class="container jumbotron mt-4">
        <form action="simpansaran.php" method="post">
            <h1>Kotak Saran</h1>
            <p>Isi Saran anda untuk mengembangkan website ini <br>
            Tolong isi Nama Dan Isi Saran dengan baik, Terimakasih!</p>
            <p>
            Nama : <input type="text" name="nama">
            </p>    
            <p>Saran :</p>
            <p><textarea name="isi" id="" cols="30" rows="10"></textarea></p>
            <button class="btn btn-primary" type="submit">Kirim Saran!</button>
        </form><br>
        <a href="/dasa/index.html" class="btn btn-danger">Kembali</a>
    </div>
</body>
</html>