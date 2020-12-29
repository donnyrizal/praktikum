<?php
	$conn=mysqli_connect('localhost','root',"","sia") or die ('Koneksi Gagal');//connection 
	$nim = $_GET['nim'];//using GET Method
	$hapus="delete from registrasi where nim = '$nim'";//$nim calling
	$data=mysqli_query($conn,$hapus);
	if($data > 0){//Jika koneksi ke database lebih dari 0 (betul ada) dan berhasil echo command tersebut
		echo "
		<script>
		alert('data berhasil di hapus');
		document.location.href='nomer2.php';
		</script>";
	}else
		echo "
		<script>
		alert('data gagal di hapus');
		document.location.href='nomer2.php';
		</script>";
?>