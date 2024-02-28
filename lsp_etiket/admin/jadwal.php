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

$jadwal = query("SELECT * FROM jadwal_penerbangan 
INNER JOIN rute ON rute.id_rute = jadwal_penerbangan.id_rute 
INNER JOIN maskapai ON rute.id_maskapai = maskapai.id_maskapai ORDER BY tanggal_pergi, waktu_berangkat");


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
<h1>Halaman Data Jadwal Penerbangan</h1>

<a href="tambah_jadwal.php">Tambah</a>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Nama Maskapai</th>
        <th>Kapasitas</th>
        <th>Rute Asal</th>
        <th>Rute Tujuan</th>
        <th>Tanggal Pergi</th>
        <th>Waktu Berangkat</th>
        <th>Waktu Tiba</th>
        <th>Harga</th>
        <th>Aksi</th>
    </tr>

    <?php $no = 1; ?>
    <?php foreach($jadwal as $data) : ?>
    <tr>
        <td><?= $no; ?></td>
        <td><?= $data["nama_maskapai"]; ?></td>
        <td><?= $data["kapasitas"]; ?></td>
        <td><?= $data["rute_asal"]; ?></td>
        <td><?= $data["rute_tujuan"]; ?></td>
        <td><?= $data["tanggal_pergi"]; ?></td>
        <td><?= $data["waktu_berangkat"]; ?></td>
        <td><?= $data["waktu_tiba"]; ?></td>
        <td>Rp <?= number_format($data["harga"]); ?></td>
        <td>
            <a href="edit_jadwal.php?id=<?= $data["id_jadwal"]; ?>">Edit</a>
            <a href="hapus_jadwal.php?id=<?= $data["id_jadwal"]; ?>" onClick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a>
        </td>
    </tr>
    <?php $no++; ?>
    <?php endforeach; ?>
</table>

    
</body>
</html>



