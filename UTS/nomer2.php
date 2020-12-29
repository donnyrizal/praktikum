<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomer 2</title>
</head>
<body>
    <form action="nomer2.php" method='POST'>
    <table align='center' border="1">
        <h2 align='center'>Insert Your data</h2>
        <tr>
            <td colspan="3" style='color:red; width:100%; text-align: center'>
                <p>SIGN UP</p>
            </td>
        </tr>
        <tr>
            <td style='width:30%;'>NIM</td>
            <td style='width:10%; text-align: center'>:</td>
            <td>
                <input style='width:96%; text-align:center' type="text" name="nim" maxlength="30" required >
            </td>
        </tr>
        <tr>
            <td style='width:30%;'>Nama Mahasiswa</td>
            <td style='width:10%; text-align: center'>:</td>
            <td>
                <input style='width:96%; text-align:center' type="text" name="nama" >
            </td>
        </tr>
        <tr>
            <td style='width:30%;'>Alamat</td>
            <td style='width:10%; text-align: center'>:</td>
            <td>
                <input style='width:96%; text-align:center' type="text" name="alamat" >
            </td>
        </tr>
        <tr>
            <td style='width:30%;'>Program Studi</td>
            <td style='width:10%; text-align: center'>:</td>
            <td>
                <input style='width:96%; text-align:center' type="text" name="prodi" >
            </td>
        </tr>
        <tr>
            <td style='width:30%;'>Tanggal Lahir</td>
            <td style='width:10%; text-align: center'>:</td>
            <td>
                <input style='width:96%; text-align:center' type="date" name="dob" >
            </td>
        </tr>
        <tr>
            <td style='width:30%;'>Jenis Kelamin</td>
            <td style='width:10%; text-align: center'>:</td>
            <td>
                <input style='width:96%; text-align:center' type="text" name="sex" >
            </td>
        </tr>
        <tr>
            <td style='width:30%;'>Username</td>
            <td style='width:10%; text-align: center'>:</td>
            <td>
                <input style='width:96%; text-align:center' type="text" name="username" >
            </td>
        </tr>
        <tr>
            <td style='width:30%;'>Password</td>
            <td style='width:10%; text-align: center'>:</td>
            <td>
                <input style='width:96%; text-align:center' type="password" name="pword" >
            </td>
        </tr>
        <tr>
            <td colspan="2"></td>
            <td>
                <button type="submit" name='submit' style="width:100%;text-align:center;color:black;background-color:gray;">Submit</button>
            </td>
        </tr>
    </table>
    </form>
    <?php
    $conn=mysqli_connect('localhost','root','',"sia") or die ('Koneksi Gagal');
    if(isset($_POST['submit'])){
        $nim=htmlspecialchars($_POST['nim']);
        $nama=htmlspecialchars($_POST['nama']);
        $alamat=htmlspecialchars($_POST['alamat']);
        $prodi=htmlspecialchars($_POST['prodi']);
        $dob=htmlspecialchars($_POST['dob']);
        $sex=htmlspecialchars($_POST['sex']);
        $username=htmlspecialchars($_POST['username']);
        $pword=htmlspecialchars($_POST['pword']);

        if($username !== $pword){
            $sql=mysqli_query($conn, "SELECT username FROM registrasi WHERE username ='$username'");
            if(mysqli_num_rows($sql)){
                echo "<script>alert('$username have registered');</script>";
            }else{
                echo "<script>alert('username and password has to be the same');</script>";
                exit;
            }
        }else{
            $query=mysqli_query($conn, "INSERT INTO registrasi VALUES ('$nim','$nama','$alamat','$prodi','$dob','$sex','$username','$pword')");
                if($query){
                    echo "<h2 align='center'>Data saved succesfully<h2>";
                }
        }
    }
    ?>
    <br>
    <hr>
    <h3 align='center'>Data Registrasi</h3>
    <table align='center' border='1' width='90%'>
        <tr>
            <td style='width: 5%; text-align: center'>NO</td>
            <td style='width: 10%; text-align: center'>NIM</td>
            <td style='width: 10%; text-align: center'>Nama</td>
            <td style='width: 10%; text-align: center'>Alamat</td>
            <td style='width: 10%; text-align: center'>Program Studi</td>
            <td style='width: 10%; text-align: center'>Date of Birth</td>
            <td style='width: 10%; text-align: center'>Sex</td>
            <td style='width: 10%; text-align: center'>Username</td>
            <td style='width: 10%; text-align: center'>Password</td>
            <td style='width: 10%; text-align: center' colspan="2">Keterangan</td>
            
        </tr>
        <?php
        
        $sql1=mysqli_query($conn, "SELECT * FROM registrasi");
        if(mysqli_num_rows($sql1) > 0) {
            $no=1;
            while($data=mysqli_fetch_array($sql1)){
                $newdate=date("l d-m-Y", strtotime($data['dob']));//Convert date into d-m-y with day
        echo "
        <tr>
            <td style='width: 5%; text-align: center'>$no</td>
            <td style='width: 10%; text-align: center'>$data[0]</td>
            <td style='width: 10%; text-align: center'>$data[1]</td>
            <td style='width: 10%; text-align: center'>$data[2]</td>
            <td style='width: 10%; text-align: center'>$data[3]</td>
            <td style='width: 10%; text-align: center'>$newdate</td>
            <td style='width: 10%; text-align: center'>$data[5]</td>
            <td style='width: 10%; text-align: center'>$data[6]</td>
            <td style='width: 10%; text-align: center'>$data[7]</td>
            <td style='width: 10%; text-align: center'>
            <a href='nomer2_edit.php?nim=$data[0]'>Ubah |</a>
            <a href='nomer2_delete.php?nim=$data[0]'>Hapus</a>
            </td>
        </tr>";
            $no++;//increment
            }
        } else {
        ?>
        <tr>
            <td colspan='8'>Data Registrasi Kosong</td>
        </tr>
        <?php
        }?>
</body>
</html>