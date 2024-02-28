<?php

session_start();
require 'function.php';


if(isset($_POST["tambah"])){
    if(tambahKota($_POST) > 0 ){
        echo "
            <script type='text/javascript'>
                alert('DATA ANDA BERHASIL DI TAMBAHKAN')
                window.location = 'kota.php'
            </script>
        ";
    }else{
        echo "
            <script type='text/javascript'>
                alert('MOHON MAAF DATA TIDAK BISA DI TAMBAHKAN')
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
    <title>Data Kota</title>

  
    
</head>
<body>
    
  
    <h3>Tambah Kota</h3>
    
    <form action="" method="POST">
        <label for="nama_kota">Nama Kota</label><br />
        <input type="text" name="nama_kota" id="nama_kota" class="form-control"><br /> <br />
    
        <button type="submit" name="tambah">Tambah</button>
    </form>


</body>
</html>