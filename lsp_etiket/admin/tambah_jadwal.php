<?php

session_start();
require 'function.php';



if(isset($_POST["tambah"])){
    if(tambahJadwal($_POST) > 0 ){
        echo "
            <script type='text/javascript'>
                alert('data berhasil ditambahkan')
                window.location = 'jadwal.php'
            </script>
        ";
    }else{
        echo "
            <script type='text/javascript'>
                alert('data gagal di tambahkan mohon di ulang')
                window.location = 'jadwal.php'
            </script>
        ";
    }
}

$rute = query("SELECT * FROM rute INNER JOIN maskapai ON maskapai.id_maskapai = rute.id_maskapai");


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
<h2>Tambah Jadwal Penerbangan</h2>

<form action="" method="POST">
    <label for="id_rute">Pilih Rute</label><br />
    <select name="id_rute" id="id_rute">
        <?php foreach($rute as $data) : ?>
        <option value="<?= $data["id_rute"]; ?>"><?= $data["nama_maskapai"]; ?> - <?= $data["rute_asal"]; ?> - <?= $data["rute_tujuan"]; ?></option>
        <?php endforeach; ?>
    </select><br /> <br />

    <label for="waktu_berangkat">Waktu Berangkat</label><br />
    <input type="time" name="waktu_berangkat" id="waktu_berangkat"><br /><br />

    <label for="waktu_tiba">Waktu Tiba</label><br />
    <input type="time" name="waktu_tiba" id="waktu_tiba"><br /><br />

    <label for="harga">Harga</label><br />
    <input type="number" name="harga" id="harga"><br /><br />

    <button type="submit" name="tambah">Tambah</button>
</form>

    
</body>
</html>
