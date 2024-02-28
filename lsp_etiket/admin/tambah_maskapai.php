<?php
session_start();
require 'function.php';

if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('SILAHKAN LOGIN TERLEBIH DAHULU YA TEMAN !');
        window.location = '../../auth/login';
    </script>
    ";
}


if(isset($_POST["tambah"])){
    if(tambahMaskapai($_POST) > 0){
        echo"
            <script type='text/javascript'>
                alert('data berhasil ditambahkan');
                window.location = 'maskapai.php';
                
            </script>
        ";
        
    }else{
        echo"
            <script type='text/javascript'>
                alert('data gagal ditambahkan');
                window.location = 'maskapai.php';
            </script>
        ";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH DATA MASKAPAI</title>
</head>
<body>
 
    <h1>TAMBAH DATA MASKAPAI</h1>

    <form action="" method="POST" enctype="multipart/form-data">

        <label for="logo_maskapai">Logo Maskapai</label><br />
        <input type="file" name="logo_maskapai" id="logo_maskapai" class="form-control"><br /> <br />

        <label for="nama_maskapai">Nama Maskapai</label><br />
        <input type="text" name="nama_maskapai" id="nama_maskapai" class="form-control"><br /> <br />

        <label for="kapasitas">kapasitas</label><br />
        <input type="number" name="kapasitas" id="kapasitas" class="form-control"><br /> <br />

        <button type="submit" name="tambah">Tambah Data</button>
    </form>




   
</body>
</html>