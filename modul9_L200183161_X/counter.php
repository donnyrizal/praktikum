<?php
session_start();
// error_reporting(E_ALL ^ E_NOTICE);
if (isset($_SESSION['counter'])) {
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counter Session</title>
</head>

<body>
    <?php
    $_SESSION['counter']++;
    $_SESSION['nama_pengunjung'] = 'abdul';
    echo "Selamat Datang $_SESSION[nama_pengunjung] Anda telah mengunjungi halaman ini sebanyak $_SESSION[counter]";
    ?>
</body>

</html>