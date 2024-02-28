<?php
session_start();
require 'function.php';

$id = $_GET["id"];
$user = query("SELECT * FROM user WHERE id_user = '$id'")[0];

if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('SILAHKAN LOGIN TERLEBIH DAHULU YA TEMAN !');
        window.location = '../../auth/login';
    </script>
    ";
}


if(isset($_POST["kirim"])){
    if(editUser($_POST) > 0){
        echo"
            <script type='text/javascript'>
                alert('Data user berhasil diedit');
                window.location = 'user.php'
            </script>
        ";
    }else{
        echo"
        <script type='text/javascript'>
            alert('Data user gagal diedit');
            window.location = 'user.php'
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
    <title>Edit User</title>
</head>
<body>
<div class="main">
    <div class="box">

        <h3>Edit Data User</h3>

        <form action="" method="POST" enctype="multipart/form-data">

            <input type="hidden" name="id_user" value="<?= $user["id_user"]; ?>">

            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control" value="<?= $user["username"] ?>"><br><br>
            
            <label for="nama_lengkap">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="<?= $user["nama_lengkap"] ?>"><br><br> 
            
            <label for="password">password</label>
            <input type="text" name="password" id="password" class="form-control" value="<?= $user["password"] ?>"><br><br>


            <label for="roles">Roles</label></br>
            <select name="roles" id="roles">
                <option value="<?= $user["roles"]; ?>"><?= $user["roles"]; ?></option>
                <option value="Petugas">Petugas</option>
                <option value="Penumpang">Penumpang</option>
            </select>  </br></br>
            

            <button type="submit" name="kirim">Edit</button>
        </form>
    </div>
</div>
    
</body>
</html>
