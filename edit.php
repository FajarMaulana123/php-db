<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
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
				<form method="post" action="update.php">
					<div class="form-group">
						<input type="text" class="form-control" name="nim" value="<?php echo $baris[0];?>">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="nama" value="<?php echo $baris[1];?>">
					</div>
					<div class="form-group">
						<textarea name="alamat" class="form-control" rows="3"><?php echo $baris[2]; ?>
						</textarea>
					</div>
					<button type="submit" class="btn btn-primary pull-right">Simpan</button> 
                    <a href="home.php" class="btn btn-success pull-right" style="margin-right:1%;">Batal</a>
				</form>
			</div>
		</div>
	</div>
</body>
</html>