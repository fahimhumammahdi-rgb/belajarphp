<?php
$nama = $_GET ["nama"];
$alamat = $_GET ["asal"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <form action ="" method ="get">
        Nama : <input type="text" name ="nama">
        Alamat : <input type ="text" name ="asal">
        <input type="submit">
    </form>
    <h1>Selamat datang <?php echo $nama ;?> dari <?php echo $alamat?></h1>
</body>
</html>