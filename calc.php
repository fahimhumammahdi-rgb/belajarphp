<h2>calculator</h2>
<h4>Fahim humam mahdi(255150400111029)</h4>

<?php

    if (isset($_POST["num1"])){
        $num1=$_POST["num1"];
    }
    if (isset($_POST["num2"])){
        $num2=$_POST["num2"];
    }
    $hasil;
    if ($_POST["operation"]=="tambah"){
        $hasil=$num1+$num2;
    }
    elseif ($_POST["operation"]=="kurang"){
        $hasil=$num1-$num2;
    }
    elseif ($_POST["operation"]=="kali"){
        $hasil=$num1*$num2;
    }
    elseif ($_POST["operation"]=="bagi"){
        $hasil=$num1/$num2;
    }
?>

<form method="post">
first number : <input type="text" name="num1"> <br>
choose operation :
    <br><input type="radio" name="operation" value="tambah"> + <br>
    <input type="radio" name="operation" value="kurang"> - <br>
    <input type="radio" name="operation" value="kali"> * <br>
    <input type="radio" name="operation" value="bagi"> / <br>
second number : <input type="text" name="num2"> <br>
<button type="submit"> = </button>
</form>

Hasil : <?php  echo $hasil ?>