<!DOCTYPE html>
<html>
<head>
	<title>Input</title>
	<link rel="stylesheet" href="style/bootstrap.min.css" />

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<p>
					<center>
						<h2>CRUD Sederhana</h2>
					</center>
				</p>
				<br>
				<form  method="post" action="input.php">
					<div class="form-group">
						<input type="text" name="nim" class="form-control" placeholder="NIM">
					</div>
					<div class="form-group">
						<input type="text" name="nama" class="form-control" placeholder="Nama">
					</div>
					<div class="form-group">
						<textarea name="alamat" class="form-control" rows="3" placeholder="Alamat">
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