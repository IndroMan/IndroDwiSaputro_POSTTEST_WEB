<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="style2.css" />
		<title>OUTPUT</title>
	</head>
        <body back>
        <h1>SELAMAT PESANAN ANDA BERHASIL DIBUAT</h1>
        
            <div>    
            <form action="nextpage.php" class="otput" method="get">
                <br>
                <?php
                    if(isset($_GET['input'])){
                        $nama = $_GET['nama'];
                        $email = $_GET['email'];
                        $nomor = $_GET['nomor'];
                        $menu = $_GET['menu'];
                        $jumlah = $_GET['jumlah'];
                        $date = $_GET['date'];
                        
                        echo " Nama : $nama</br>";
                        echo " Email : $email</br>";
                        echo " Nomor Telepon    : $nomor</br>";
                        echo " Menu    : $menu</br>";
                        echo " Jumlah     : $jumlah</br>";
                        echo " Tanggal Lahir : $date</br>";
                        echo "</br>";
                    }
                ?>
                </br>
            </form>
            </div>
        </body>