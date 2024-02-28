<?php

require '../../koneksi.php';

$username = htmlspecialchars($_POST["username"]);
$nama_lengkap = htmlspecialchars($_POST["nama_lengkap"]);
$password = htmlspecialchars($_POST["password"]);
$roles = "penumpang";

$query = mysqli_query($conn, "INSERT INTO user VALUES (NULL, '$username', '$nama_lengkap', '$password', '$roles')");

if($query){
    echo "
        <script type='text/javascript'>
            alert('Register anda berhasil silahkan login ke akun anda!');
            window.location = '../login/'
        </script>
    ";
}else{
    echo "
    <script type='text/javascript'>
        alert('Register anda gagal mohon untuk di ulang!');
        window.location = 'index.php'
    </script>
";
}

?>