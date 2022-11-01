<?php
    include "../connector/connection.php";

    $idMenu = $_GET['id'];

    $tableGambar = mysqli_query($connect, "SELECT * FROM images WHERE id_menu='$idMenu'");
    $rowGambar = mysqli_fetch_array($tableGambar);
    $idGambar = $rowGambar['id'];
    $fileLama = $rowGambar['file'];
    unlink('../img/'.$fileLama);
    $query = mysqli_query($connect, "DELETE images FROM images INNER JOIN menu ON menu.id_menu = images.id_menu WHERE menu.id_menu='$idMenu'");
    $query1 = mysqli_query($connect, "DELETE FROM menu WHERE id_menu='$idMenu'");
        
        if($query && $query1){
            echo"Data Berhasil di Delete";
            header("location:view.php");
        } else {
            echo"Data Gagal di Delete";
            header("location:view.php");
        }
?>