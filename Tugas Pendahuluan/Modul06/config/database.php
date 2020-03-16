<?php
    $koneksi = mysqli_connect('localhost','root','','todolist');
    if(!$koneksi){
        die('Gagal terhubung ke database!');
    }
    else{
        echo("Berhasil terhubung ke database!");
    }
?>