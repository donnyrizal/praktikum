<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Your Product</title>
    <?php $conn=mysqli_connect('localhost','root','','informatika') or die ('Koneksi Gagal');?>
</head>
<body>
    <center>
<h3>Data Buku</h3>
        <table style='width: 10%; text-align: center' border='1' width='50%'>
            <tr>
                <td align='center' width='20%'><b>Kode Buku</b></td>
                <td align='center' width='30%'><b>Nama Buku</b></td>
                <td align='center' width='20%'><b>Jenis Buku</b></td>
                <td align='center' width='20%'><b>Keterangan Jenis</b></td>
                <td colspan= 2 align='center' width='30%'><b>Keterangan</b></td>
            </tr>
    <?php
        $cari = "SELECT * FROM `vbuku`";
        $hasil_cari = mysqli_query($conn,$cari);
        while ($data = mysqli_fetch_row($hasil_cari)){
        echo"
            <tr>
                <td width='20%'>$data[0]</td>
                <td width='30%'>$data[1]</td>
                <td width='20%'>$data[2]</td>
                <td width='20%'>$data[3]</td>
                <td><a href='edit.php?kode_buku=$data[0]'>Ubah |</a>
                <a href='delete.php?kode_buku=$data[0]'>Hapus</a></td>
            </tr>";
        }
    ?>
</table>
</center>
</body>
</html>