<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Beli Dong</title>
</head>
<body background = "img\logo.jpeg">
    <div class="signup">
        <h3>Form Pembelian</h3>
        <div class="border"></div>

        <form action="nextpage.php" method="get" name="input">
            <div>
                <input type="text" name="nama" required="" placeholder="Nama">
            </div>

            <div>
                <input type="email" name="email" required="" placeholder="Email">
            </div>

            <div>
                <input type="number" name="nomor" required="" placeholder="Nomor Telepon">
            </div>

            <div>
                <input type="text" name="menu" required="" placeholder="Nama Menu">
            </div>

            <div>
                <input type="jumlah" name="jumlah" required="" placeholder="Jumlah">
            </div>

            <div>
                <input type="date" name="date" required="" placeholder="Tanggal Pemesanan">
            </div>

            <input type="submit" name="input" value="SUBMIT">
        </form>
    </div>
</body>
</html>