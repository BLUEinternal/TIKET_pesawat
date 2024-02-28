<?php
session_start();
require 'function.php';

if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('SILAHKAN LOGIN TERLEBIH DAHULU YA TEMAN !');
        window.location = '../auth/login';
    </script>
    ";
}

if(isset($_POST["submit"])){
    if(tambahUser($_POST) > 0){
        echo"
            <script type='text/javascript'>
                alert(' data berhasil ditambahkan');
                window.location = 'user.php';
            </script>
        ";
        
    }else{
        echo"
            <script type='text/javascript'>
                alert('data gagal ditambahkan');
                window.location = 'user.php';
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
    <title>TAMBAH USER</title>
</head>
<body>
<div class="">

    <h3 class="">Tambah Data User</h3>
   
    <form action="" method="POST" enctype="multipart/form-data">
        <div>
            <div>
                <span class="detail">Nama Lengkap</span>
                <input type="text" name="nama_lengkap" placeholder="Masukan Nama lengkap anda ">
            </div>
            <div>
                <span class="detail">Username</span>
                <input type="text" name="username" placeholder="Masukan username anda">
            </div>
            <div >
                <span class="detail">Password</span>
                <input type="text" name="password" placeholder="Masukan password anda">
            </div>
            <div>
            <select class="" name="roles">
                <option selected>Pilih Roles</option>
                <option>Admin</option>
                <option>Petugas</option>
                <option>Penumpang</option>
            </select>
            </div>
        </div>
        <button class=""  name="submit" >Tambah</button>
    </form>

     

 </div>
   
</body>
</html>