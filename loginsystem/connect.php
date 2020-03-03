<?php 

$conn = mysqli_connect("localhost","root","","mochbillyrefanto");

function register($infologin){
	global $conn;
	
	$username = htmlspecialchars(stripcslashes($infologin["username"])) ;
	$password = mysqli_real_escape_string($conn,$infologin["password"]);
	$cpassword = mysqli_real_escape_string($conn,$infologin["cpassword"]); 
	$status = $infologin['status'];
	$cek = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username' ");

	if (mysqli_num_rows($cek) > 0){
		echo "<script>alert('Username sudah ada !');</script>";
		return false;
	}


	if ($password !== $cpassword) {
		echo "<script>alert('Password tidak sama !');</script>";
		return false;
	} 
	
	$password = password_hash($password, PASSWORD_DEFAULT);

	$query = mysqli_query($conn, "INSERT INTO users (username, password, status) VALUES ('$username','$password', '$status') ");

	return mysqli_affected_rows($conn);
	
}

function ceklogin($datalogin){
	global $conn;
	$username = $datalogin["username"];
	$password = $datalogin["password"];

	$cekuser = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");

	if (mysqli_num_rows($cekuser) === 1){

		$hasil = mysqli_fetch_assoc($cekuser);

		if (password_verify($password,$hasil["password"])){

			if($hasil['status'] == 'admin') {
				$_SESSION['user'] = $hasil['username'];
				$_SESSION['status'] = 'admin';
				$_SESSION['login'] = true;
				header('Location: administrator.php');
			}
			elseif($hasil['status'] == 'lamar') {
				$_SESSION['user'] = $hasil['username'];
				$_SESSION['status'] = 'lamar';
				$_SESSION['login'] = true;
				header('Location: index.php');
			}

			if (isset($datalogin["rememberme"])){
				setcookie('login', 'tetap_ingat', time() + 30);
				setcookie('status', $hasil['status'], time() + 30);
			} 
			echo "<script>
				alert('Anda berhasil login!');
				document.location.href='administrator.php';
				</script>";
		}
	} else {
		print "<p style=\"color:red; font-style: italic;\"> Username / Password Salah !</p>";
	}
}

 ?>

