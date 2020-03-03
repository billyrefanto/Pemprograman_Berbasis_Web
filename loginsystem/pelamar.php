<?php 
session_start();

if(isset($_COOKIE['login'])) {
    if ($_COOKIE['status'] == 'lamar') {
        $_SESSION['login'] = true;
    } 
    
    elseif ($_COOKIE['status'] == 'admin') {
        $_SESSION['login'] = true;
        header('Location: administrator.php');
    }
} else {
    if ($_SESSION['status'] == 'admin') {
        header('Location: administrator.php');
        exit;
    }
}

if (empty($_SESSION['login'])) {
	echo "<script>alert('Ilegal akses!');
	document.location.href='index.php';</script>";
	exit;
} 

?>

// disini kode php apa nih sesuai soal kil