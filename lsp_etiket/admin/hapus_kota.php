<?php

session_start();
require 'function.php';

$id = $_GET["id"];

if(hapusKota($id) > 0){
    echo "
    <script type='text/javascript'>
        alert('DATA ANDA BERHASIL DI HAPUS');
        window.location = 'kota.php';
    </script>
    ";
}else{
    echo "
    <script type='text/javascript'>
        alert('DATA TIDAK BISA DI APUS')
        window.location = 'kota.php';
    </script>
    ";
}


?>