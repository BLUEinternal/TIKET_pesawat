<?php
session_start();
unset($_SESSION["username"]);
session_destroy();
echo "
<script type='text/javascript'>
    alert(' anda berhasil keluar');
    window.location = './auth/login';
</script>
";


?>