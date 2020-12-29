<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: ./login.php');
    exit;
}

$user = $_SESSION['user'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Halaman Pengguna</title>
</head>

<body>
    Hallo <?php echo $user['nama']; ?>, Selamat datang di halaman Dashboard. <br>
    Anda Login sebagai <?php echo $user['status']; ?>, <a href="logout.php">keluar</a>
</body>

</html>