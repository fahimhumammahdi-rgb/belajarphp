

<form  method="post">
    <label>Masukkan angka maksimal :</label>
    <input type="text" name="maks"> 
</form>
<?php
    if (isset($_POST["maks"])){
        for ($i=0; $i <= $_POST["maks"]; $i++) { 
            if ($i%2!=0){
                continue;
            }
            else {
                echo "$i \t" ;
            }
        }
    }



?>