<?php
if(isset($_GET['nim'])) {
    $conn=mysqli_connect('localhost','root','','informatika') or die ('Koneksi Gagal');

    $nim=($_GET['nim']);

    if(isset($_POST['submit'])){
        if(empty($_POST['kelas'])) {
            echo "Kelas tidak Dipilih";
            exit;
        }
        $nim=$_GET['nim'];
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
            $sql=mysqli_query($conn, "SELECT NIM FROM mahasiswa WHERE NIM='$nim'");
            if(mysqli_num_rows($sql) == 0) {
                echo "Mahasiswa Dengan NIM $nim Tidak Terdaftar";
                exit;
            } else {
                $query=mysqli_query($conn, "UPDATE `mahasiswa` SET `Nama`='$nama',`Kelas`='$kelas',`Alamat`='$alamat' WHERE NIM='$nim'");
                if($query) {
                    echo "Data Berhasil diedit, <a href='form.php'>Lihat Data</a>.";
                }
            }
        } else {
            echo "Kelas Tidak Valid";
            exit;
        }
        
    }
    
    $querya=mysqli_query($conn,"SELECT * FROM mahasiswa WHERE NIM='$nim'");

    if(mysqli_num_rows($querya) == 0) {
        echo "<script>alert('Tidak Ada data Mahasiswa..');window.location='./form.php';</script>";
        exit;
    } else {
        

        $data=mysqli_fetch_array($querya);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EDIT DATA</title>
</head>
<body>
<form action="?nim=<?php echo $nim; ?>" method="POST">
        <table border='0'>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td>
                    <input type="text" name="nim" value="<?php echo $nim; ?>" disabled>
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <input type="text" name="nama" value="<?php echo $data['Nama']; ?>">
                </td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td>
                    <input type="radio" value="A" name="kelas"> A <br>
                    <input type="radio" value="B" name="kelas"> B <br>
                    <input type="radio" value="C" name="kelas"> C <br>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>
                    <textarea name="alamat" id="" cols="30" rows="10"><?php echo $data['Alamat']; ?></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="3" align='right'>
                    <input type="submit" name="submit" value="Tambah">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php
    }
} else {
    echo "<script>window.location='./form.php';</script>";
}