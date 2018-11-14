<?php
include('koneksi.php');
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

$sql = "insert into mahasiswa (NIM,Nama,Alamat) values ('$nim','$nama','$alamat')";
$hasil = mysqli_query($conn, $sql);
if ($hasil) {
	header('location:home.php');
}else{
	echo "error".$sql;
}

?>

