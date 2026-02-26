<?php
    $database=array();

    if (file_exists("database.txt")){
        $ambil =file_get_contents("database.txt");
        $database= unserialize($ambil);
    }

    if (isset($_POST["akun"])&&isset($_POST["pass"])){
        $akun=$_POST["akun"];
        $pass=$_POST["pass"];
        $database [$akun]=$pass;
        file_put_contents ("database.txt",serialize($database));
        header ("location:login.php");
    }
    
?>

<form method="post">
    <Label>Register</Label> <br>
    Account : <input type="text" name="akun"> <br>
    Password : <input type="text" name="pass"> <br>
    <button type="submit"> Register </button>
</form>

<br><br><br>
    
<form method="post" action ="berhasil.php">
    <Label>Login</Label> <br>
    Account : <input type="text" name="cek_akun"> <br>
    Password : <input type="text" name="cek_pass"> <br>
    <button type="submit"> Login </button>
</form>

<?php 
if (isset($_POST["cek_akun"])&& isset($_POST["cek_pass"])){
    foreach ($database as $key => $value) {
        if ($_POST["cek_akun"]==$key&&$_POST["cek_pass"]==$value){
            echo "selamat anda berhasil login <br>";
            echo "dengan akun $key dan password $value";
        }
    }
}
?>



<br>
<?php #print_r($database); ?>