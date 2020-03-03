<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "6706194041";

    $connect = mysqli_connect($server, $username,$password,$dbname);
    if(!$connect){
        die("Gagal Koneksi ke database $dbname : ".mysqli_connect_error());
    }else{
        echo "Berhasil Terhubung ke database $dbname <br>";
        echo "Saya mengerjakan TP ini dengan JUJUR!!!";
    }  
?>