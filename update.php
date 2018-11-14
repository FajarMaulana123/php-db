<?php
	include('koneksi.php');
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];

	$sql = "UPDATE mahasiswa SET NIM = $nim, Nama = '$nama', Alamat = '$alamat' WHERE NIM = '$nim'
								";
	$hasil = mysqli_query($conn, $sql);
	if ($hasil) {
		header('location:home.php');
	}else{
		echo "error ".$sql;
	}


?>