<?php 
require 'connect.php';
session_start();

if(isset($_COOKIE['login'])) {
	if ($_COOKIE['status'] == 'admin') {
		$_SESSION['login'] = true;
	} 
	elseif ($_COOKIE['status'] == 'lamar') {
		$_SESSION['login'] = true;
		header('Location: index.php');
	}
} else {
	if ($_SESSION['status'] == 'lamar') {
		header('Location: index.php');
		exit;
	}
}

if (empty($_SESSION['login'])) {
	echo "<script>alert('Ilegal akses!');
	document.location.href='index.php';</script>";
	exit;
} 

?>

<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div class="container mt-4">
		<h1>Halaman Administrator</h1>
	
	<?php 
		echo "selamat datang ". "<b>".$_SESSION["user"]."</b>";

		
		$query = "SELECT * FROM lamarkerja";
		$tampil = mysqli_query($conn, $query);
	?>

	<br>
	<a class="btn btn-primary mt-4" href="logout.php" role="button" 
	onclick="return confirm('yakin akan logout ?')">Logout</a>
	</div>
</body>
</html>