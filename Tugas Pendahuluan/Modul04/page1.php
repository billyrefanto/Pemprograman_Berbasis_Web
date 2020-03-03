<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>

<h1>Login Untuk Memulai Session!</h1>
<form action="page2.php" method="POST">
	<label>Nama : 
		<input type="text" name="nama">
	</label> <br>
	<label>Nim : <input type="text" name="nim"></label> <br>

	<input type="submit" name="submit">
	<input type="reset" name="reset">

</form>
</body>
</html>
