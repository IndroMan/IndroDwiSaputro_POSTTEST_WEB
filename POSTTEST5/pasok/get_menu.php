<?php
	include '../connector/connection.php';
	$id_menu = $_POST['id'];

	$rowMenu = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM menu WHERE id_menu='$id_menu'"));

	$hargaBarang = $rowMenu['harga_menu'];

	echo json_encode(array('harga_menu' => $hargaBarang));
?>