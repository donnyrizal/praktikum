<?php
$conn=mysqli_connect('localhost','root','','informatika') or die ('Koneksi Gagal');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masukkan Data Mahasiswa</title>
</head>
<body>
    <form action="" method="POST">
        <table border='0'>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td>
                    <input type="text" name="nim" required>
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <input type="text" name="nama" required>
                </td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td>
                    <input type="radio" value="A" name="kelas" checked> A <br>
                    <input type="radio" value="B" name="kelas"> B <br>
                    <input type="radio" value="C" name="kelas"> C <br>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>
                    <textarea name="alamat" id="" cols="30" rows="10" required></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="3" align='right'>
                    <input type="submit" name="submit" value="Tambah">
                </td>
            </tr>
        </table>
    </form>
    <hr>
    <?php
    if(isset($_POST['submit'])){
        if(empty($_POST['kelas'])) {
            echo "Kelas tidak Dipilih";
            exit;
        }
        $nim=$_POST['nim'];
        $nama=$_POST['nama'];
        $kelas=$_POST['kelas'];
        $alamat=$_POST['alamat'];

        if($nim =="") {
            echo "Nim Tidak Boleh Kosong";
            exit;
        } elseif($nama=="") {
            echo "Nama Tidak Boleh Kosong";
            exit;
        } elseif($kelas =="") {
            echo "Kelas Tidak Boleh Kosong";
            exit;
        } elseif($alamat=="") {
            echo "Alamat Tidak Boleh Kosong";
            exit;
        }

        if($kelas == "A" OR $kelas =="B" OR $kelas == "C") {
            // error_reporting(0);
            // cek nim
            $sql=mysqli_query($conn, "SELECT NIM FROM mahasiswa WHERE NIM='$nim'");
            if(mysqli_num_rows($sql)) {
                echo "Mahasiswa Dengan NIM $nim Telah Terdaftar";
                exit;
            } else {
                $query=mysqli_query($conn, "INSERT INTO mahasiswa(NIM, Nama, Kelas, Alamat) VALUES ('$nim','$nama','$kelas','$alamat')");
                if($query) {
                    echo "Data Berhasil ditambahkan.";
                }
            }
        } else {
            echo "Kelas Tidak Valid";
            exit;
        }
        
    }
    ?>
    <hr>
    <h3>Data Mahasiswa</h3>
    <table border='1'>
        <tr>
            <td>#</td>
            <td>Nim</td>
            <td>Nama</td>
            <td>Kelas</td>
            <td>Alamat</td>
            <td>Aksi</td>
        </tr>
        <?php
        $sql=mysqli_query($conn, "SELECT * FROM mahasiswa WHERE 1");
        if(mysqli_num_rows($sql) > 0) {
            $no=1;
            while($data=mysqli_fetch_array($sql)) {
        ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data['NIM']; ?></td>
            <td><?php echo $data['Nama']; ?></td>
            <td><?php echo $data['Kelas']; ?></td>
            <td><?php echo $data['Alamat']; ?></td>
            <td><a href="edit.php?nim=<?php echo $data['NIM']; ?>">UBAH</a> / <a href="hapus.php?nim=<?php echo $data['NIM']; ?>">Hapus</a></td>
        </tr>
        <?php
            $no++;
            }
        } else {
        ?>
        <tr>
            <td colspan='6'>Data Mahasiswa Kosong</td>
        </tr>
        <?php
        }
        
        ?>
    </table>
</body>
</html>