<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomer 1</title>
</head>
<body>
    <!-- Nomer 1a -->
<hr>
    <h3 align='center'>Data Nomer 1a</h3>
    <table align='center' border='1' width='40%'>
        <tr>
            <td style='width: 3%; text-align: center'>NO</td>
            <td style='width: 10%; text-align: center'>NIS</td>
            <td style='width: 10%; text-align: center'>Nama Siswa</td>
            <td style='width: 10%; text-align: center'>Alamat</td>            
        </tr>
        <?php
        $conn=mysqli_connect('localhost','root','',"sia") or die ('Koneksi Gagal');
        $sql1=mysqli_query($conn, "SELECT * FROM siswa");
        if(mysqli_num_rows($sql1) > 0) {
            $no=1;//increment data
            while($data=mysqli_fetch_array($sql1)) {
        echo "
        <tr>
            <td style='width: 3%; text-align: center'>$no</td>
            <td style='width: 10%; text-align: center'>$data[0]</td>
            <td style='width: 10%; text-align: center'>$data[1]</td>
            <td style='width: 10%; text-align: center'>$data[2]</td>
        </tr>";
            $no++;//for no++
            }
        } else {
        ?>
        <tr>
            <td colspan='4'>Empty</td>
        </tr>
        <?php
        }
        
        ?>

<!-- Nomer 1b -->
<hr>
    <table align='center' border='1' width='40%'>
    <h3 align='center'>Data Nomer 1b</h3>
        <tr>
            <td style='width: 3%; text-align: center'>NO</td>
            <td style='width: 10%; text-align: center'>NIS</td>
            <td style='width: 10%; text-align: center'>Nama Siswa</td>
            <td style='width: 10%; text-align: center'>Kelas</td>            
            <td style='width: 10%; text-align: center'>Nama Mata Pelajaran</td>            
            <td style='width: 10%; text-align: center'>Nilai</td>          
        </tr>
        <?php
        $conn=mysqli_connect('localhost','root','',"sia") or die ('Koneksi Gagal');
        $sql1=mysqli_query($conn, "SELECT siswa.nis, siswa.namasis, mapel.kelas, mapel.nama_mapel, nilai.nilai FROM siswa, mapel, nilai WHERE siswa.nis = nilai.nis AND mapel.id_mapel = nilai.id_mapel");
        if(mysqli_num_rows($sql1) > 0) {
            $no=1;
            while($data=mysqli_fetch_array($sql1)) {
        echo "
        <br>
        <tr>
            <td style='width: 3%; text-align: center'>$no</td>
            <td style='width: 10%; text-align: center'>$data[0]</td>
            <td style='width: 10%; text-align: center'>$data[1]</td>
            <td style='width: 10%; text-align: center'>$data[2]</td>
            <td style='width: 10%; text-align: center'>$data[3]</td>
            <td style='width: 10%; text-align: center'>$data[4]</td>
        </tr>";
            $no++;
            }
        } else {
        ?>
        <tr>
            <td colspan='5'>Data Kosong</td>
        </tr>
        <?php
        }
        
        ?>

<!-- Nomer 1c -->
<hr>
    <table align='center' border='1' width='40%'>
    <h3 align='center'>Data Nomer 1c</h3>
        <tr>
            <td style='width: 3%; text-align: center'>NO</td>
            <td style='width: 10%; text-align: center'>NIS</td>
            <td style='width: 10%; text-align: center'>Nama Siswa</td>
            <td style='width: 10%; text-align: center'>Kelas</td>            
            <td style='width: 10%; text-align: center'>Nama Mata Pelajaran</td>            
            <td style='width: 10%; text-align: center'>Nama Guru</td>          
        </tr>
        <?php
        $conn=mysqli_connect('localhost','root','',"sia") or die ('Koneksi Gagal');
        $voila = "WL.1";
        $sql1=mysqli_query($conn, "SELECT siswa.nis, siswa.namasis, mapel.kelas,mapel.nama_mapel, guru.namagur FROM siswa, mapel, guru, nilai WHERE mapel.id_mapel='$voila' AND mapel.id_mapel=nilai.id_mapel AND siswa.nis = nilai.nis AND guru.nip = mapel.nip");
        if(mysqli_num_rows($sql1) > 0) {
            $no=1;
            while($data=mysqli_fetch_array($sql1)) {
        echo "
        <br>
        <tr>
            <td style='width: 3%; text-align: center'>$no</td>
            <td style='width: 10%; text-align: center'>$data[0]</td>
            <td style='width: 10%; text-align: center'>$data[1]</td>
            <td style='width: 10%; text-align: center'>$data[2]</td>
            <td style='width: 10%; text-align: center'>$data[3]</td>
            <td style='width: 10%; text-align: center'>$data[4]</td>
        </tr>";
            $no++;
            }
        } else {
        ?>
        <tr>
            <td colspan='5'>Data Kosong</td>
        </tr>
        <?php
        }
        
        ?>
</body>
</html>