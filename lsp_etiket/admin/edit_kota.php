<?php

session_start();
require 'function.php';


$id = $_GET["id"];
$kota = query("SELECT * FROM kota WHERE id_kota = '$id'")[0];

if(isset($_POST["edit"])){
    if(editKota($_POST) > 0 ){
        echo "
            <script type='text/javascript'>
                alert('DATA BERHASIL DI EDIT')
                window.location = 'kota.php'
            </script>
        ";
    }else{
        echo "
            <script type='text/javascript'>
                alert('DATA ANDA TIDAK BISA DI EDIT ')
                window.location = 'kota.php'
            </script>
        ";
    }
}



?>

<?php require '../layout/sidebar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit kota</title>
</head>
<body>
    
    <h3>Edit Petugas</h3>
    
    <form action="" method="POST">
        <input type="hidden" name="id_kota" value="<?= $kota["id_kota"]; ?>">
        <label for="nama_kota">Nama Kota</label><br />
        <input type="text" name="nama_kota" id="nama_kota" class="form-control" value="<?= $kota["nama_kota"]; ?>"><br /> <br />
    
        <button type="submit" name="edit">Edit</button>
    </form>
    
</body>
</html>