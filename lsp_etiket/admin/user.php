<?php
session_start();
require 'function.php';



if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('SILAHKAN LOGIN TERLEBIH DAHULU YA TEMAN !')
        window.location = '../auth/login/'
    </script>
";
}

$user = query("SELECT * FROM user WHERE roles = 'Petugas' || roles = 'Penumpang' || roles = 'Admin'");


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User E-tiket</title>
</head>
<body>

    <?php require '../layout/sidebar.php'; ?>

    <div class="content">
        <h1>Data User</h1>
        <a href="tambah_user.php" class="">Tambah User</a>

        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Nama Lengkap</th>
                <th>Username</th>
                <th>password</th>
                <th>Roles</th>
                <th>aksi</th>
            </tr>

            <?php $no = 1; ?>
            <?php foreach($user as $data) : ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $data["nama_lengkap"]; ?></td>
                <td><?= $data["username"]; ?></td>
                <td><?= $data["password"]; ?></td>
                <td><?= $data["roles"]; ?></td>
                <td>
                    <a href="edit_user.php?id=<?=$data["id_user"]; ?>" class="edit">Edit</a>
                    <a href="hapus_user.php?id=<?=$data["id_user"]; ?>" class="hapus" onClick="return confirm('APAKAH ANDA YAKIN INGIN MENGHAPUS DATA INI ?')">Hapus</a>
               </td>
            </tr>

            <?php $no++; ?>
            <?php endforeach; ?>
        </table>
        
    </div>

  
</body>
</html>