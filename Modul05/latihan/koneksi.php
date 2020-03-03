<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $dbName = 'belajar';

    $koneksi = mysqli_connect($server, $username, $password, $dbName);

    if (!$koneksi) {
        echo 'Koneksi gagal!';
    }
?>