<?php

session_start();
require 'function.php';



$id = $_GET["id"];

if(hapusMaskapai($id) > 0){
    echo "
    <script type='text/javascript'>
        alert('Yay! data maskapai berhasil dihapus');
        window.location = 'maskapai.php';
    </script>
    ";
}else{
    echo "
    <script type='text/javascript'>
        alert('Yhaa .. data maskapai gagal ditambahkan :(')
        window.location = 'maskapai.php';
    </script>
    ";
}