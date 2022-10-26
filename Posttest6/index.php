<?php
    include "connector/connection.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> MARKOBAR </title>
        <link rel="icon" href="css/favicon.ico">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://kit.fontawesome.com/147e95360f.js" crossorigin="anonymous"></script>
        <script src="jquery.js"></script>
        <script src="js.js"></script>
 	<style>
 	* {
 		box-sizing: border-box;
 	}
 	.header h1{
 		font-size: 40px;
 		font-family: raleway;
 	}
 	h1 {
 		text-align: center;
 		font-family: raleway;
 	}
 	body {
        background-color: orange;
 		background-size: 100% 100%;
 		margin: 0px;
 	}
 	nav {
 		padding: 15px;
 		font-family: raleway;
 		box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
 	}
 	#nav-1 {
 		background: #ffdb4f;
 	}
 	.nav {
 		transition: 0.3%;
 		background: #ffdb4f;
 		color: #000000;
 		font-size: 20px;
 		text-decoration: none;
 		border-top: 4px solid #ffdb4f;
 		border-bottom: 4px #ffdb4f;
 		padding: 3px;
 		margin: 10px;
 	}
 	.nav:hover {
 		color: blue;
 		padding: 6px 0;
 	}
 	.style-kotak2 {
 		margin-top: 50px;
 		box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
 		padding: 20px;
 		text-align: center;
 		background-color: white;
 		height: 70px;
 		border-radius: 10px;
 	}
 	.kotak2 {
 		height: 500px;
 		padding-bottom: 10px;
 		padding: 100px;
 		background-color: white
 	}
 	</style>
<body>
    <header class="header">
        <h1>MARKOBAR</h1>
        <nav class="navbar-nav">
            <div class="isi">   
                <div class="kiri">
                    <label>
                    <div><b class="left"></b></div>
                    </label>
                </div>
                <nav id="nav-1">
 		<a class="nav" href="menu_utama.php">Home</a>
 		<a class="nav" href="#">Shop</a>
		 <a class="nav" href="#">About Me</a>
 		<a class="nav" href="#">Contact</a>
 		<a class="nav" href="menu/view.php">Menu</a>
 		<a class="nav" href="pasok/view.php">Pasok</a>
            <button id="btn-info">Ganti Tema</button>
            <button id="btn1">Show Content</button>
         </div>
         </div>  
        </nav>  
    </header>
    <content>              
        <div class="buttonsec1"><button id="btn-more"> Tombol Gabut </button></div>
        <div id="section1">
                    <h3 id="our"> Our Product </h3>
                    <div class="product">
                        <div>
                            <img src="https://img.freepik.com/premium-photo/martabak-telor-martabak-telur-savory-pan-fried-pastry-stuffed-with-egg-meat-spices-martabak-telur-is-one-indonesia-street-food_448865-1912.jpg?w=826" alt="INI MARTABAK"> 
                            <p> Martabak Telur T-Rex </p>
                            <p1> Rp 100.000,- </p1>
                        </div>
                        <div class="img2">
                            <img src="https://img.freepik.com/premium-vector/sweet-martabak-is-indonesian-street-food-pancake-vector-illustration-with-various-taste_271813-123.jpg?w=740" alt="INI MARTABAK"> 
                            <p> Martabak Manis </p>
                            <p1> Rp 20.000,- </p1>
                        </div>
                    </div>
                    <div class="btn-beli"><button><a href="form/form.php"> BELI SEKARANG! </a></button></div>
                </div>
            </content>
        <footer>
            <h3> MARKOBAR </h3>
            <img src="css/logo.jpeg" alt="">
            <ul>
                <li class="fa-solid fa-user"><a href=""> About Me </a></li><br>
                <li class="fa-solid fa-phone"> <a href=""> Contact Me </a></li>
            </ul>
            <br>
        </footer>
        <div class="bottom">
        <h5> ©Copyright2022-Indro Dwi Saputro </h5></div>
</body>
</html>
