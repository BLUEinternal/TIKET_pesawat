
<?php

session_start();

if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('Silahkan login terlebih dahulu, ya!');
        window.location = '../auth/login';
    </script>
    ";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>petugas</title>
</head>
<body>
    <h1>Halo, <?= $_SESSION["nama_lengkap"]; ?></h1>
    <h1>selamat datang di halaman penumpang ,</h1>
    <a href="../logout.php">logout</a>
</body>
</html>