<?php

session_start();
require 'function.php';



$id = $_GET["id"];

if(hapusRute($id) > 0){
    echo "
    <script type='text/javascript'>
        alert('data behasil di hapus');
        window.location = 'rute.php';
    </script>
    ";
}else{
    echo "
    <script type='text/javascript'>
        alert('data gagal di hapus mohon untuk di ulang')
        window.location = 'rute.php';
    </script>
    ";
}


?>
