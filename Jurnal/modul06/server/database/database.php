<?php
    $koneksi = mysqli_connect('localhost','root','','modul06');
    if(!$koneksi){
        die('Gagal terhubung ke database!');
    }
    else{
        echo "Berhasil terhubung ke database!";
    }
    
?>