<?php
session_start();
if ( !isset($_SESSION['user_login']) || 
    ( isset($_SESSION['user_login']) && $_SESSION['user_login'] != 'admin' ) ) {
	header('location:login.php');
	exit();
}
?>
<!DOCTYPE html>
<html id="main">
    <head>
        <title>Input Data</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <body>
    
        <form method="post" action="simpan.php">
            <table>
                <tr>
                    <td>KERTAS</td>
                </tr>
                <tr>
                    <td>RP. 100.000</td>
                    <td><input type="text" name="lembarseratus"></td>
                </tr>
                <tr>
                    <td>RP. 50.000</td>
                    <td><input type="text" name="lembarlimapuluh"></td>
                </tr>
                <tr>
                    <td>RP. 20.000</td>
                    <td><input type="text" name="lembarduapuluh"></td>
                </tr>
                <tr>
                    <td>RP. 10.000</td>
                    <td><input type="text" name="lembarsepuluh"></td>
                </tr>
                <tr>
                    <td>RP. 5.000</td>
                    <td><input type="text" name="lembarlima"></td>
                </tr>
                <tr>
                    <td>RP. 2.000</td>
                    <td><input type="text" name="lembardua"></td>
                </tr>
                <tr>
                    <td>RP. 1.000</td>
                    <td><input type="text" name="lembarsatu"></td>
                </tr>
                <tr>
                    <td> <br><br> LOGAM</td>
                </tr>
                <tr>
                    <td>RP. 1.000</td>
                    <td><input type="text" name="logamseribu"></td>
                </tr>
                <tr>
                    <td>RP. 500</td>
                    <td><input type="text" name="logamlimaratus"></td>
                </tr>
                <tr>
                    <td>RP. 200</td>
                    <td><input type="text" name="logamduaratus"></td>
                </tr>
                <tr>
                    <td>RP. 100</td>
                    <td><input type="text" name="logamseratus"></td>
                </tr>
                <tr>
                    <td>RP. 50</td>
                    <td><input type="text" name="logamlimapuluh"></td>
                </tr>
                <tr>
                    <td>RP. 25</td>
                    <td><input type="text" name="logamdualima"></td>
                </tr>
                <tr>
                    <td><button type="submit" class="btn btn-primary" value="simpan">SIMPAN</button></td>
                    <td><a class="btn btn-success" href="/dasa/index.html">Kembali!</a></td>
                    <td><a class="btn btn-danger" href="logout.php">Logout!</a></td>
                </tr>
                
            </table>
            <table>
                <tr>
                    <td>Hari/Tanggal</td>
                    <?php
                    $tanggal = date('d-m-Y');
                    $day = date('D', strtotime($tanggal));
                    $dayList = array(
                        'Sun' => 'Minggu',
                        'Mon' => 'Senin',
                        'Tue' => 'Selasa',
                        'Wed' => 'Rabu',
                        'Thu' => 'Kamis',
                        'Fri' => 'Jumat',
                        'Sat' => 'Sabtu'
                    );
                    ?>
                    <td><input type="text" name="tanggal" value="<?php echo  $dayList[$day] . ", {$tanggal} "; ?>" readonly></td>
                </tr>
            </table>
        </form>
        
    </body>
</html>