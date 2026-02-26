<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h2>Kamu telah berhasil login <?php echo $_POST["username"];?></h2>
    <h2>dengan akun <?php echo $_POST ["email"];?></h2>
    <br>
    <?php 
    for ($i=0;$i<$_POST["angka"];$i++){
        echo $i .$_POST["username"] ."<br>";
        }
    ?>
</body>
</html>