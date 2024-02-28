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


$maskapai = query("SELECT * FROM maskapai");

?>

<?php require '../layout/sidebar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E - Ticketing</title>
</head>
<body>
    <h1>Data Maskapai</h1>
    <a href="tambah_maskapai.php">Tambah</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Logo Maskapai</th>
            <th>Nama Maskapai</th>
            <th>Kapasitas maskapai</th>
            <th>Aksi</th>
        </tr>

        <?php $no = 1; ?> 
        <?php foreach($maskapai as $data) : ?>
            <tr>
                <td><?= $no; ?></td>
                <td><img src="../assets/images/<?= $data["logo_maskapai"]; ?>" alt="" width="80"></td>
                <td><?= $data["nama_maskapai"]; ?></td>
                <td><?= $data["kapasitas"]; ?></td>
                <td>
                    <a href="edit_maskapai.php?id=<?= $data["id_maskapai"]; ?>">Edit</a>
                    <a href="hapus_maskapai.php?id=<?= $data["id_maskapai"]; ?>" onClick="return confirm('Apakah anda yakin ingin menghapus data ini ?')">Hapus</a>
                </td>
            </tr>
        <?php $no++; ?>
        <?php endforeach; ?>
    </table>
    
</body>
</html>