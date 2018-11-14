<!-- <?php
// session_start();
// $errorMessage = '';
// if (isset($_POST['txtUserId']) && isset($_POST['txtPassword'])) {
// 	if ($_POST['txtUserId']==='admin' && $_POST['txtPassword']==='admin') {
// 		$_SESSION['basic_is_logged_in'] = true;
// 		header('location:index.php');
// 		exit();
// 	}else{
// 		$errorMessage = 'Sorry, wrong username / Password';
	
// 	}
// }
?> -->

<?php
include('koneksi.php');
if (isset($_POST['btnLogin'])) {
	$userid = $_POST['txtUserId'];
	$userpass = $_POST['txtPassword'];

	$sql = "select * from admin where name = '$userid' and password = '$userpass'";
	$hasil = mysqli_query($conn, $sql);
	if ($hasil){
		$baris = mysqli_fetch_array($hasil);
		$id = $baris[1];
		session_start();
		$_SESSION['userid'] = $id;
		
	}
	header('location:index.php');
	exit();

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style type="text/css">
		.style5{
			color:#0000FF;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<form action="login1.php" method="post" name="frmLogin" id="frmLogin">
		<table width="400" border="1" align="center">
			<tr>
				<th width="160" scope="col"><div align="left"> User Id</div></th>
				<th width="224" scope="col"><div align="left"><input type="text" name="txtUserId" id="txtUserId"></div></th>
			</tr>
			<tr>
				<td><div align="left">Password</div></td>
				<td><div align="left"><input type="password" name="txtPassword" id="txtPassword"></div></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" name="btnLogin" id="btnLogin" value="Login"></td>
			</tr>
		</table>
	</form>
</body>
</html>