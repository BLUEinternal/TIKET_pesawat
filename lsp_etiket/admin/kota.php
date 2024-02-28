<?php

session_start();
require 'function.php';

if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('SILAHKAN LOGIN KARENA ANDA BELUM LOGIN')
        window.location = '../auth/login/login.php';
    </script>
    ";
}

$kota = query("SELECT * FROM kota");


?>

<?php require '../layout/sidebar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data kota</title>

    <link rel="stylesheet" href="../assets/style/main.css">
</head>
<body>

        
    <h3>Halaman Data Kota</h3>
    
    <a href="tambah_kota.php">Tambah</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Kota</th>
            <th>Aksi</th>
        </tr>
    
        <?php $no = 1; ?>
        <?php foreach($kota as $data) : ?>
        <tr>
            <td><?= $no; ?></td>
            <td><?= $data["nama_kota"]; ?></td>
            <td>
                <a href="edit_kota.php?id=<?= $data["id_kota"]; ?>">Edit</a>
                <a href="hapus_kota.php?id=<?= $data["id_kota"]; ?>" onClick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php $no++; ?>
        <?php endforeach; ?>
    </table>


</body>
</html>