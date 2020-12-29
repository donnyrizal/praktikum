<?php
if (isset($_GET['nim'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'sia') or die('Koneksi Gagal');
    $nim = $_GET['nim'];
    // if clause for submission
    if (isset($_POST['submit'])) {
        if (empty($_POST['nim'])) { //Jika nim kosong dan tidak ada isinya
            echo "<script> alert('You havent choose the ID');</scipt>";
            exit;
        }
        //prevent from using a html attribute for better exp
        $ganti = htmlspecialchars($_POST['nim']);
        $nama = htmlspecialchars($_POST['nama']);
        $alamat = htmlspecialchars($_POST['alamat']);
        $prodi = htmlspecialchars($_POST['prodi']);
        $dob = htmlspecialchars($_POST['dob']);
        $sex = htmlspecialchars($_POST['sex']);
        $username = htmlspecialchars($_POST['username']);
        $pword = htmlspecialchars($_POST['password']);
        $submit = $_POST['submit'];
        $update = "UPDATE registrasi set nim ='$ganti', nama ='$nama', `alamat` = '$alamat' ,`prodi`='$prodi',dob='$dob',`sex`='$sex',`username`='$username',`pword`='$pword' WHERE nim ='$nim'"; //Update query for update the data using GET $nim
        $cari = "SELECT * FROM registrasi WHERE nim = '$nim'"; //selection for $nim only
        if ($nim == 0) {
            $sql = mysqli_query($conn, $cari);
            if (mysqli_num_rows($sql) == 0) {
                echo "$nim unregistered";
                exit;
            } else {
                $query = mysqli_query($conn, $update);
                if ($query) {
                    echo "
                    <h2 align='center'>Data successfully updated, <a style='text-decoration: none' href='nomer2.php'> Look at Data</a></h2>";
                }
            }
        } else {
            echo "Invalid Data";
            exit;
        }
    }
    $querya = mysqli_query($conn, "SELECT * FROM registrasi WHERE nim = '$nim'");
    if (mysqli_num_rows($querya) === 0) {
        // echo "<script>alert('Empty number');document.location.href='nomer2_edit.php';</script>";
        exit;
    } else {
        $data = mysqli_fetch_array($querya);
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Edit Number 2</title>
        </head>

        <body>
            <form action="?nim=<?php echo $nim; ?>" method="POST">
                <h2 align='center'>Edit Data <br> <?php echo $nim; ?></h2>
                <table align='center' border='1'>
                    <hr>
                    <tr>
                        <td>NIM</td>
                        <td style='width:10%; text-align: center '>:</td>
                        <td><input type="text" name="nim" size="30" value="<?php echo $nim; ?>"></td><!-- you can also change your nim -->
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td style='width:10%; text-align: center'>:</td>
                        <td><input type="text" name="nama" size="30" value="<?= $data['nama'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td style='width:10%; text-align: center'>:</td>
                        <td><input type="text" name="alamat" size="30" value="<?= $data['alamat'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Prodi</td>
                        <td style='width:10%; text-align: center'>:</td>
                        <td><input type="text" name="prodi" size="30" value="<?= $data['prodi'] ?>"></td>
                    </tr>
                    <tr>
                        <td>DOB</td>
                        <td style='width:10%; text-align: center'>:</td>
                        <td><input type="date" name="dob" size="30" value="<?= $data['dob'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td style='width:10%; text-align: center'>:</td>
                        <td><input type="text" name="sex" size="30" value="<?= $data['sex'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td style='width:10%; text-align: center'>:</td>
                        <td><input type="text" name="username" size="30" value="<?= $data['username'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td style='width:10%; text-align: center'>:</td>
                        <td><input type="text" name="password" size="30" value="<?= $data['pword'] ?>"></td>
                    </tr>
                    <tr>
                        <td colspan='2'>
                        <td>
                            <input type="submit" name="submit" style="width:100%;text-align:center;color:black;background-color:gray;" value="update"></td>
                        </td>
                    </tr>
                </table>
            </form>
            <hr>
        </body>

        </html>
<?php
    }
} else {
    echo "<script>window.location='./nomer2.php';</script>";
}
?>