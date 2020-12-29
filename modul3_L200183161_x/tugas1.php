<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Penjumlahan</title>
</head>
<body>
    <h1>Penjumlahan</h1>
    <form method="POST" action="tugas1.php">
        <p>Nilai A adalah <input type="text" name="nilaia" size="10" value="<?php echo $_POST["nilaia"]?>"></p>
        <p>Nilai B adalah <input type="text" name="nilaib" size="10" value="<?php echo $_POST["nilaib"]?>"></p>
        <input type="submit" name="submit" value="Jumlahkan">
    </form>
    <?php
        error_reporting( error_reporting() & ~E_NOTICE );
        $nilaia = $_POST['nilaia'];
        $nilaib = $_POST['nilaib'];
        $jumlah = $nilaia + $nilaib;
        $submit = $_POST['submit'];
        if ($submit) {
            echo "Nilai A adalah $nilaia </br>";
            echo "Nilai B adalah $nilaib </br>";
            echo "Jadi Nilai A ditambah Nilai B adalah $jumlah";
        }
    ?>
</body>
</html> 