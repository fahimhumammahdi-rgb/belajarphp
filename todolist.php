<?php
    $todos=[];
    
    if (file_exists("todo.txt")){
        $ambil=file_get_contents("todo.txt");
         if (!empty($ambil)) {
        $todos=unserialize($ambil);
        }
    }

    if (isset($_POST["todo"])){
        $data =$_POST["todo"];
        $todos[]=[
            "list"=>$data,
            "status"=>0
        ];
        file_put_contents("todo.txt",serialize($todos));
        header("Location: todolist.php");
    }
?>

<h1>To do list</h1><br>
<form method="post">
    <label>Masukkan kegiatanmu di sini !</label><br>
    <input type="text" name="todo">
    <button type=submit>Tambah</button>
</form>

<ul>
    <?php foreach ($todos as $key => $value) { 
    ?>
    <li>
        <input type="checkbox" name="todo">
        <label><?php echo $value["list"]; ?></label>
        <a href="#">Hapus</a>
    </li>
    <?php } ?>
</ul>