<?php 
    include "../menu_utama.php";

    if(isset($_POST['create'])){
        $namaMenu = $_POST['nama_menu'];
        $hargaMenu = $_POST['harga_menu'];
        $stok = $_POST['stok'];

        $query = mysqli_query($connect, "INSERT INTO menu ( nama_menu, harga_menu, stok) VALUES ('$namaMenu','$hargaMenu','$stok')");
        
        if($query){
            echo"Data Berhasil di Tambah";
            header("location:view.php");
        } else {
            echo"Data Gagal di Tambah";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Create Barang</title>
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
    		width: 2px;
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
<body class="body">
    <section class="center">
        <form action="" method="POST" class="box">
            <h3 align="center">Menu Yang Akan di Tambahkan</h3>
            <table border="0" align="center">
                <tr>
                    <td>Nama Menuu</td>
                    <td><input type="text" name="nama_menu" required></td>
                </tr>
                <tr>
                    <td>Harga Menu</td>
                    <td><input type="number" name="harga_menu" required></td>
                </tr>

                <tr>
                    <td>Stok Menu</td>
                    <td><input type="number" name="stok" required></td>
                </tr>

                <tr>
                    <td align="center" colspan="2"><hr><input type="submit" name="create" value="Insert"> <a href="index.php">Back</a></td>
                </tr>
            </table>
        </form>
    </section>
</body>
</html>