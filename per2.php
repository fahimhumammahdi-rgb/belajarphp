<?php 
$hewan = ["anjing","kucing ","bebek","anjing"];
$jumlah_anjing=0;

foreach ($hewan as $key => $value) {
    echo "$value <br>";
    if ($value=="anjing") {
        $jumlah_anjing++;
    }
}
echo "Jumlah anjing ada $jumlah_anjing";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pertemuan 2</title>
</head>
<body>
    
</body>
</html>