<?php
if(isset($_GET['nim'])) {
    $conn=mysqli_connect('localhost','root','','informatika') or die ('Koneksi Gagal');
    $nim=($_GET['nim']);

    $query=mysqli_query($conn,"SELECT * FROM mahasiswa WHERE NIM='$nim'");

    if(mysqli_num_rows($query) == 0) {
        echo "<script>alert('Tidak Ada data Mahasiswa..');window.location='./form.php';</script>";
        exit;
    } else {
        $query=mysqli_query($conn, "DELETE FROM mahasiswa WHERE NIM='$nim'");
        if($query) {
            echo "<script>alert('Data Berhasil Dihapus');window.location='./form.php';</script>";
        } else {
            echo "<script>alert('Data Gagal Dihapus');window.location='./form.php';</script>";
        }
    }
} else {;
}
?>