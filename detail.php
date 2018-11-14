<!DOCTYPE html>
<html>
<head>
	<title>Detail</title>
	<link rel="stylesheet" href="style/bootstrap.min.css" />
</head>
<body>
	<?php
		include('koneksi.php');
		$sql = "select * from mahasiswa where NIM = $_GET[id]";
		$hasil = mysqli_query($conn, $sql);
		$baris = mysqli_fetch_array($hasil);

	?>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<p>
					<center>
						<h2>CRUD Sederhana</h2>
					</center>
				</p>
				<br>
				<p>
				<a href="home.php" class="btn btn-primary"> Kembali </a>
				</p>
				<table class="table table-stripped">
					<tr>
						<td>NIM</td>
						<td> : <?php echo $baris[0]; ?></td>
					</tr>
					<tr>
						<td>Nama</td>
						<td> : <?php echo $baris[1]; ?></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td> : <?php echo $baris[2]; ?></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</body>
</html>