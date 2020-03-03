<?php  
session_start();
if (isset($_POST["submit"])) {
	$nama = $_POST["nama"];
	$nim = $_POST["nim"];
	$_SESSION["nama"] = $namas;
	$_SESSION["nim"] = $nim;
	echo "<h1>Selamat Datang ".$_SESSION['nama']."</h1> <br>";
	echo "Halaman ini hanya bisa di akses jika anda sudah login! <br>";
	echo "Klik "."<a href='page3.php'>disini</a>"." untuk logout <br>" ;
}else{
	echo "Login terlebih dahulu!";
}
?>

