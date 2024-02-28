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



$rute = query("SELECT * FROM rute INNER JOIN maskapai ON maskapai.id_maskapai = rute.id_maskapai ORDER BY rute_asal");


?>

<?php require '../layout/sidebar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Halaman Data Rute</h2>

<a href="tambah_rute.php">Tambah</a>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Nama Maskapai</th>
        <th>Rute Asal</th>
        <th>Rute Tujuan</th>
        <th>Tanggal Pergi</th>
        <th>Aksi</th>
    </tr>

    <?php $no = 1; ?>
    <?php foreach($rute as $data) : ?>
    <tr>
        <td><?= $no; ?></td>
        <td><?= $data["nama_maskapai"]; ?></td>
        <td><?= $data["rute_asal"]; ?></td>
        <td><?= $data["rute_tujuan"]; ?></td>
        <td><?= $data["tanggal_pergi"]; ?></td>
        <td>
            <a href="edit_rute.php?id=<?= $data["id_rute"]; ?>">Edit</a>
            <a href="hapus_rute.php?id=<?= $data["id_rute"]; ?>" onClick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a>
        </td>
    </tr>
    <?php $no++; ?>
    <?php endforeach; ?>
</table>
    
</body>
</html>
