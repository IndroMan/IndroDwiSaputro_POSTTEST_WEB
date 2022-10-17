<?php 
    include "../menu_utama.php";


    $idMenu = $_GET['id'];

    if(isset($_POST['update'])){
        $namaMenu = $_POST['nama_menu'];
        $hargaMenu = $_POST['harga_menu'];
        $stok = $_POST['stok'];

        $query = mysqli_query($connect, "UPDATE menu SET nama_menu='$namaMenu', harga_menu='$hargaMenu', stok='$stok' WHERE id_menu='$idMenu'");
        
        if($query){
            echo"Data Berhasil di Update";
            header("location:view.php");
        } else {
            echo"Data Gagal di Update";
        }
    }

    $tableBarang = mysqli_query($connect, "SELECT * FROM menu WHERE id_menu='$idMenu'");
    $rowBarang = mysqli_fetch_array($tableBarang);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Update Menu</title>
    <style>
 	* {
		margin: 0;
		padding: 0;
	}
		table th {
			 text-align: center;
    		background-color: #ffdb4f;
    		color: black;
		}
		table {
    		font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    		border-collapse: collapse;
    		width: 80%;
        margin-top: 10%;
        margin-left: auto;
        margin-right: auto;
        border: 2px solid black;
}
		table td, table th {
    		border: 1px solid black;
    		padding: 6px;
    		width: 100px;
}
table tr td a {
  color: white;
}

	table tr:nth-child(even){background-color: #2f4b5b; color: white;}
    table tr:nth-child(odd){background-color: #2f4b5b; color: white;}
	table tr:hover,table tr:hover a{background-color: white; color: black;
}
	</style>   
</head>
<body class=body>
<section class="center">
        <form action="" method="POST" class="box">
        <h3 align="center">Barang Yang Akan di Ubah</h3>
            <table border="0" align="center">
                <tr>
                    <td>Nama Barang</td>
                    <td><input type="text" name="nama_menu" placeholder="Masukkan Nama Barang" value="<?= $rowBarang['nama_menu'] ?>"required></td>
                </tr>
                <tr>
                    <td>Harga Barang</td>
                    <td><input type="number" name="harga_menu" placeholder="Masukkan Harga Barang" value="<?= $rowBarang['harga_menu'] ?>"required></td>
                </tr>

                <tr>
                    <td>Stock Barang</td>
                    <td><input type="number" name="stok" placeholder="Masukkan Stock Barang" value="<?= $rowBarang['stok'] ?>"required></td>
                </tr>

                <tr>
                    <td align="center" colspan="2"><hr><input type="submit" name="update" value="Update"></td>
                </tr>
            </table>
        </form>
    </section>
</body>
</html>