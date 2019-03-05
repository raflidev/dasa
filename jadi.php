<?php
include "summoner.php";
error_reporting(0);
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laporan DASA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body id="main" class="page">
    <p class="tengah">
        <b>
            DANA SOSIAL DAN ABADI (DASA)<br>
            PERUMAHAN PURI CENDANA<br>
            BLOK C RT.006/008 DESA SUMBERJAYA<br>
            KEC. TAMBUN SELATAN, KAB.BEKASI<br>
            JAWABARAT
            <hr>
        </b>
    </p>
    <p class="tengah">
        <b>BERITA ACARA</b><br>
        PERHITUNGAN KOIN DANA SOSIAL DAN ABADI (DASA)
        <hr>
    </p>
<form action="" method="post">
    <select name="kodecuy">
    <?php
        while($row1 = mysqli_fetch_array($query)):;
    ?>
        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[0]; ?></option>
<?php  endwhile; ?>
    </select>
    <input type="submit" value="Proses Data" >
    <button><a href="/dasa/index.html">kembali!</a></button>
</form>
</html>
<?php
    $kon=new PDO("mysql:host=localhost;dbname=webdasa","root","");
    $id_kode=$_POST['kodecuy'];
    $ambil=$kon->prepare("select * from uangdasa where kode=:id");
    $ambil->BindParam(":id",$id_kode);
    $ambil->execute();
    while($tampil=$ambil->fetch()){
            echo "</br>";
            echo $tampil["tanggal"];
            $qk = $tampil["lembarseratus"];
            $qk = $tampil['lembarseratus'];
            $qk2 = $tampil['lembarlimapuluh'];
            $qk3 = $tampil['lembarduapuluh'];
            $qk4 = $tampil['lembarsepuluh'];
            $qk5 = $tampil['lembarlima'];
            $qk6 = $tampil['lembardua'];
            $qk7 = $tampil['lembarsatu'];
            $qk8  = $tampil['logamseribu'];
            $qk9  = $tampil['logamlimaratus'];
            $qk10 = $tampil['logamduaratus'];
            $qk11 = $tampil['logamseratus'];
            $qk12 = $tampil['logamlimapuluh'];
            $qk13 = $tampil['logamdualima'];
            $total = ($qk*10000)+($qk2*50000)+($qk3*20000)+($qk4*10000)+($qk5*5000)+($qk6*2000)+($qk7*1000);
            $total2 = ($qk8*1000)+($qk9*500)+($qk10*200)+($qk11*100)+($qk12*50)+($qk13*25);
            $alltotal = $total+$total2;
            $persen = ($total+$total2)*10/100;
            $menerima = $alltotal-$persen;
    }
    ?>
    <table class="tabel kanan" border="2">
        <tr border="4">
            <th>KERTAS</th>
            <th>LEMBAR</th>
            <th colspan="2">JUMLAH</th>
            <th>LOGAM</th>
            <th>KEPING</th>
            <th>JUMLAH</th>
        </tr>
        <tr>
            <td>100.000</td>
            <td><?php echo $qk?></td>
            <td colspan="2"><?php echo number_format($qk*100000)  ?></td>
            <td>1.000</td>
            <td><?php echo $qk8?></td>
            <td><?php echo number_format($qk8*1000)?></td>
        </tr>
        <tr>
            <td>50.000</td>
            <td><?php echo $qk2?></td>
            <td colspan='2'><?php echo number_format($qk2*50000) ?></td>
            <td>500</td>
            <td><?php echo $qk9?></td>
            <td><?php echo number_format($qk9*500)?></td>
            </td>
        </tr>
        <tr>
            <td>20.000</td>
            <td><?php echo $qk3 ?></td>
            <td colspan='2'><?php echo number_format($qk3*20000)  ?></td>
            <td>200</td>
            <td><?php echo $qk10?></td>
            <td><?php echo number_format($qk10*200)?></td>
            </td>
        </tr>
        <tr>
            <td>10.000</td>
            <td><?php echo $qk4  ?></td>
            <td colspan='2'><?php echo number_format($qk4*10000)  ?></td>
            <td>100</td>
            <td><?php echo $qk11?></td>
            <td><?php echo number_format($qk11*100)?></td>
        </tr>
        <tr>
            <td>5.000</td>
            <td><?php echo $qk5  ?></td>
            <td colspan='2'><?php echo number_format($qk5*5000)  ?></td>
            <td>50</td>
            <td><?php echo $qk12?></td>
            <td><?php echo number_format($qk12*50)?></td>
            </td>
        </tr>
        <tr>
            <td>2.000</td>
            <td><?php echo $qk6  ?></td>
            <td colspan='2'><?php echo number_format($qk6*2000)  ?></td>
            <td>25</td>
            <td><?php echo $qk13?></td>
            <td><?php echo number_format($qk13*25)?></td>
        </tr>
        <tr>
            <td>1.000</td>
            <td><?php echo $qk7  ?></td>
            <td colspan='2'><?php echo number_format($qk7*1000)  ?></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td colspan="2">TOTAL</td>
            <td colspan="2"><?php echo $total?></td>
            <td></td>
            <td></td>
            <td><?php echo number_format($total2)?></td>
        </tr>
        <tr>
            <td colspan="4">TOTAL (Uang Kertas dan Logam)</td>
            <td colspan="3"><?php echo number_format($alltotal) ?></td>
            
        </tr>
        <tr>
            <td colspan="4">Dipotong 10% untuk Kas karang taruna</td>
            <td colspan="3"><?php echo number_format($persen) ?></td>
        </tr>
        <tr>
            <td colspan="4">Total Penerimaan/penarikan Bersih bulan ini</td>
            <td colspan="3"><?php echo number_format($menerima)?></td>
        </tr>
    </table>
</body>

</html>