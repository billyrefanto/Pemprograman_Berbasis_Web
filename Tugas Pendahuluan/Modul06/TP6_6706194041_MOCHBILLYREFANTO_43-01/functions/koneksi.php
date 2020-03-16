<?php 
$koneksi = mysqli_connect('localhost', 'root', '', 'todolist');
if (mysqli_connect_error() == true) {
    die('Gagal koneksi ke database!');
}

?>