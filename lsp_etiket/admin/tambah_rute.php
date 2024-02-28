<?php

session_start();
require 'function.php';


if(isset($_POST["tambah"])){
    if(tambahRute($_POST) > 0 ){
        echo "
            <script type='text/javascript'>
                alert('Yay! data rute berhasil ditambahkan!')
                window.location = 'rute.php'
            </script>
        ";
    }else{
        echo "
            <script type='text/javascript'>
                alert('Yhaa .. data rute gagal ditambahkan :(')
                window.location = 'rute.php'
            </script>
        ";
    }
}

$maskapai = query("SELECT * FROM maskapai");
$kota = query("SELECT * FROM kota");


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
  <h2>Tambah Rute</h2>


<form action="" method="POST">
    <label for="nama_maskapai">Nama Maskapai</label><br />
    <select name="id_maskapai" id="id_maskapai">
        <?php foreach($maskapai as $data) : ?>
        <option value="<?= $data["id_maskapai"]; ?>"><?= $data["nama_maskapai"]; ?></option>
        <?php endforeach; ?>
    </select><br /> <br />

    <label for="rute_asal">Rute Asal</label><br />
    <select name="rute_asal" id="rute_asal">
        <?php foreach($kota as $data) : ?>
        <option value="<?= $data["nama_kota"]; ?>"><?= $data["nama_kota"]; ?></option>
        <?php endforeach; ?>
    </select><br /> <br />

   
    <label for="rute_tujuan">Rute Tujuan</label><br />
    <select name="rute_tujuan" id="rute_tujuan">
        <?php foreach($kota as $data) : ?>
        <option value="<?= $data["nama_kota"]; ?>"><?= $data["nama_kota"]; ?></option>
        <?php endforeach; ?>
    </select><br /> <br />

    <label for="tanggal_pergi">Tanggal Pergi</label><br />
    <input type="date" name="tanggal_pergi" id="tanggal_pergi"><br /><br />

    <button type="submit" name="tambah">Tambah</button>
</form>

    
</body>
</html>


