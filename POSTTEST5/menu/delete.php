<?php
    include "../connector/connection.php";

    $idMenu = $_GET['id'];

    $query = mysqli_query($connect, "DELETE FROM menu WHERE id_menu='$idMenu'");
        
        if($query){
            echo"Data Berhasil di Delete";
            header("location:view.php");
        } else {
            echo"Data Gagal di Delete";
            header("location:view.php");
        }
?>