<?php
    require 'koneksi.php';
    $id = $_GET['id'];
    $nim = $_GET['nim'];
    $username = $_GET['username'];
    $nama_lengkap = $_GET['nama_lengkap'];

    $query = "UPDATE mahasiswa SET nim = '$nim', username = '$username', 
                nama_lengkap = '$nama_lengkap' WHERE id = $id";
    mysqli_query($koneksi, $query);
?>