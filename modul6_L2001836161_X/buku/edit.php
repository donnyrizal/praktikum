<?php
if(isset($_GET['kode_buku'])) {
	$conn=mysqli_connect('localhost','root','','informatika') or die ('Koneksi Gagal');
	$kodebuku = $_GET['kode_buku'];

    if(isset($_POST['submit'])){
        if(empty($_POST['kode_buku'])) {
            echo "Buku belum dipilih";
            exit;
        }
        $ganti= $_POST['kode_buku'];
        $namabuku=$_POST['nama_buku'];
        $kodejenis = $_POST['kode_jenis'];
		$submit=$_POST['submit'];
		$update="UPDATE buku set kode_buku ='$ganti', nama_buku ='$namabuku', `kode_jenis` = '$kodejenis' WHERE kode_buku ='$kodebuku'";
		$cari = "select * from buku where kode_buku = '$kodebuku'";
        if($kodebuku == 0) {
            $sql=mysqli_query($conn,$cari);
            if(mysqli_num_rows($sql) == 0) {
                echo "Buku $kodebuku Tidak Terdaftar";
                exit;
            } else {
                $query=mysqli_query($conn,$update);
                if($query) {
                    echo "Data Berhasil diedit, <a href='form.php'>Lihat Data</a>.";
                }
            }
        } else {
            echo "Kelas Tidak Valid";
            exit;
        }
        
    }
    
    $querya=mysqli_query($conn,"select * from buku where kode_buku = '$kodebuku'");

    if(mysqli_num_rows($querya) === 0) {
		// echo "<script>alert('Tidak Ada buku..');</script>";
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
<form action="?kode_buku=<?php echo $kodebuku; ?>" method="POST">
        <table border='0'>
		<tr>
			<td>Kode Buku</td>
			<td>:</td>
			<td><input type="text" name="kode_buku" size="10" value="<?php echo $data['kode_buku']?>"></td>
		</tr>
		<tr>
			<td>Nama Buku</td>
			<td>:</td>
			<td><input type="text" name="nama_buku" size="30" value="<?=$data['nama_buku']?>"></td>
        </tr>
		<tr>
			<td>Kode Jenis</td>
			<td>:</td>
			<td><select name="kode_jenis">
                <?php
                $sql = "select * from jenis_buku";
                $retval = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_array($retval)){
                    echo "<option value='$row[kode_jenis]'>$row[nama_jenis]</option>";
                    }?></select>
            </td>
        </tr>
        
			<tr>
				<td><input type="submit" name="submit" value="UPDATE DATA"></td>
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
?>