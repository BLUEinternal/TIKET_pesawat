<?php

session_start();
require 'function.php';

$id = $_GET["id"];

if(hapusJadwal($id) > 0){
    echo "
    <script type='text/javascript'>
        alert('data berhasil di hapus');
        window.location = 'jadwal.php';
    </script>
    ";
}else{
    echo "
    <script type='text/javascript'>
        alert('data gagal di hapus tolong di ulang')
        window.location = 'jadwal.php.php';
    </script>
    ";
}


?>


