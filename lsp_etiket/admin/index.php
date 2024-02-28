<?php

session_start();

if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('SILAHKAN LOGIN TERLEBIH DAHULU YA TEMAN !')
        window.location = '../auth/login/'
    </script>
";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   
    <?php require '../layout/sidebar.php'; ?>
    <h1>Halo,  <?= $_SESSION["nama_lengkap"]; ?></h1>
   
</body>
</html>